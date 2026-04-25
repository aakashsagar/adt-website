/* ═══════════════════════════════
   ANANTADRISHTI — SHARED JS
   ═══════════════════════════════ */

// ── PARTICLE NETWORK ──
(function(){
  const canvas = document.getElementById('pc');
  if(!canvas) return;
  const ctx = canvas.getContext('2d');
  let W, H, particles = [];
  const colors = ['26,86,219','124,58,237','6,214,160'];

  function resize(){
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }

  class P {
    constructor(){this.reset()}
    reset(){
      this.x = Math.random()*W; this.y = Math.random()*H;
      this.size = Math.random()*2+.4;
      this.vx = (Math.random()-.5)*.35; this.vy = (Math.random()-.5)*.35;
      this.opacity = Math.random()*.45+.1;
      this.color = colors[Math.floor(Math.random()*3)];
    }
    update(){
      this.x+=this.vx; this.y+=this.vy;
      if(this.x<0||this.x>W||this.y<0||this.y>H) this.reset();
    }
    draw(){
      ctx.beginPath();
      ctx.arc(this.x,this.y,this.size,0,Math.PI*2);
      ctx.fillStyle=`rgba(${this.color},${this.opacity})`;
      ctx.fill();
    }
  }

  function init(){
    resize();
    particles = [];
    const n = Math.min(Math.floor(W*H/12000),140);
    for(let i=0;i<n;i++) particles.push(new P());
  }

  function links(){
    for(let i=0;i<particles.length;i++){
      for(let j=i+1;j<particles.length;j++){
        const dx=particles[i].x-particles[j].x, dy=particles[i].y-particles[j].y;
        const d=Math.sqrt(dx*dx+dy*dy);
        if(d<110){
          ctx.beginPath();
          ctx.moveTo(particles[i].x,particles[i].y);
          ctx.lineTo(particles[j].x,particles[j].y);
          ctx.strokeStyle=`rgba(26,86,219,${.07*(1-d/110)})`;
          ctx.lineWidth=.5; ctx.stroke();
        }
      }
    }
  }

  function animate(){
    ctx.clearRect(0,0,W,H);
    particles.forEach(p=>{p.update();p.draw()});
    links();
    requestAnimationFrame(animate);
  }

  window.addEventListener('resize',init);
  init(); animate();
})();

// ── NAVBAR ──
(function(){
  const nav = document.querySelector('nav');
  if(!nav) return;
  window.addEventListener('scroll',()=>{
    nav.classList.toggle('scrolled', window.scrollY>50);
  });
  // Active link
  const cur = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-dropdown a, .nav-link[href]').forEach(a=>{
    if(a.getAttribute('href')===cur) a.classList.add('active');
  });
  // Hamburger
  const hbg = document.getElementById('hbg');
  const mob = document.getElementById('mobMenu');
  if(hbg&&mob){
    hbg.addEventListener('click',()=>mob.classList.toggle('open'));
    mob.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>mob.classList.remove('open')));
  }
})();

// ── SCROLL REVEAL ──
(function(){
  const obs = new IntersectionObserver(entries=>{
    entries.forEach(e=>{
      if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target);}
    });
  },{threshold:.1,rootMargin:'0px 0px -40px 0px'});
  document.querySelectorAll('.sr').forEach(el=>obs.observe(el));
})();

// ── COUNTER ANIMATION ──
window.startCounters = function(){
  document.querySelectorAll('[data-count]').forEach(el=>{
    const target = parseInt(el.dataset.count);
    const suffix = el.dataset.suffix||'';
    let cur = 0;
    const dur = 2000, step = target/(dur/16);
    const t = setInterval(()=>{
      cur = Math.min(cur+step, target);
      el.textContent = Math.floor(cur)+suffix;
      if(cur>=target) clearInterval(t);
    },16);
  });
};

(function(){
  const band = document.querySelector('.stats-band');
  if(!band) return;
  const obs = new IntersectionObserver(entries=>{
    if(entries[0].isIntersecting){window.startCounters();obs.disconnect();}
  },{threshold:.3});
  obs.observe(band);
})();

// ── HERO COUNTERS ──
(function(){
  const hero = document.querySelector('.hero-stats');
  if(!hero) return;
  const obs = new IntersectionObserver(entries=>{
    if(entries[0].isIntersecting){
      hero.querySelectorAll('[data-count]').forEach(el=>{
        const t=parseInt(el.dataset.count), s=el.dataset.suffix||'';
        let c=0; const step=t/(1800/16);
        const iv=setInterval(()=>{c=Math.min(c+step,t);el.textContent=Math.floor(c)+s;if(c>=t)clearInterval(iv);},16);
      });
      obs.disconnect();
    }
  },{threshold:.5});
  obs.observe(hero);
})();

// ── SMOOTH SCROLL ──
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const t=document.querySelector(a.getAttribute('href'));
    if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'});}
  });
});

// ── HOVER TILT on cards ──
document.querySelectorAll('.tilt').forEach(card=>{
  card.addEventListener('mousemove',e=>{
    const r=card.getBoundingClientRect();
    const x=(e.clientX-r.left)/r.width-.5;
    const y=(e.clientY-r.top)/r.height-.5;
    card.style.transform=`perspective(600px) rotateY(${x*8}deg) rotateX(${-y*8}deg) translateY(-4px)`;
  });
  card.addEventListener('mouseleave',()=>{card.style.transform='';});
});

// ── TYPING EFFECT ──
window.typeEffect = function(el, texts, speed=80, pause=2000){
  let ti=0, ci=0, del=false;
  function tick(){
    const txt = texts[ti];
    el.textContent = del ? txt.slice(0,--ci) : txt.slice(0,++ci);
    if(!del&&ci===txt.length){setTimeout(()=>{del=true;tick();},pause);return;}
    if(del&&ci===0){del=false;ti=(ti+1)%texts.length;}
    setTimeout(tick, del?40:speed);
  }
  tick();
};

// ── CONTACT FORM ──
(function(){
  const form = document.querySelector('.contact-form form');
  if(!form) return;
  form.addEventListener('submit',e=>{
    e.preventDefault();
    const btn = form.querySelector('[type=submit]');
    btn.textContent='✓ Message Sent!';
    btn.style.background='linear-gradient(135deg,#06d6a0,#0ea5e9)';
    setTimeout(()=>{btn.textContent='Send Message';btn.style.background='';},3000);
  });
})();