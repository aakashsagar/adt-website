<?php
$page_title = 'About Us – Our Vision, Leadership & Core Principles';
$page_desc = 'Learn about AnantaDrishti Technologies — our vision, leadership team, core principles and journey since 2014.';
include 'includes/header.php';
?>
<style>
.timeline{position:relative;padding-left:3rem;margin-top:2.5rem}
.timeline::before{content:'';position:absolute;left:18px;top:0;bottom:0;width:2px;background:linear-gradient(to bottom,var(--p),var(--p3),var(--acc))}
.tl-item{position:relative;margin-bottom:2.5rem}
.tl-dot{position:absolute;left:-2.25rem;top:4px;width:16px;height:16px;border-radius:50%;background:var(--grad);border:3px solid #fff;box-shadow:0 0 0 3px rgba(26,86,219,.2)}
.tl-year{font-family:'Sora',sans-serif;font-size:.75rem;font-weight:800;color:var(--p);letter-spacing:1px;text-transform:uppercase;margin-bottom:.3rem}
.tl-title{font-size:1rem;font-weight:700;color:var(--dark);margin-bottom:.35rem}
.tl-desc{font-size:.875rem;color:var(--gray);line-height:1.7}

.principle-card{background:#fff;border-radius:20px;padding:2rem;border:1px solid rgba(26,86,219,.08);transition:all .3s;position:relative;overflow:hidden}
.principle-card::before{content:'';position:absolute;top:0;left:0;bottom:0;width:4px;border-radius:4px 0 0 4px}
.principle-card:hover{box-shadow:var(--sh);transform:translateY(-5px)}
.principle-num{font-family:'Sora',sans-serif;font-size:3rem;font-weight:800;opacity:.06;position:absolute;right:1.5rem;top:.5rem;line-height:1}
.principle-icon{width:52px;height:52px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin-bottom:1.1rem}
.principle-card h3{font-size:1rem;font-weight:700;color:var(--dark);margin-bottom:.6rem}
.principle-card p{font-size:.875rem;color:var(--gray);line-height:1.75}

.leader-card{background:#fff;border-radius:22px;overflow:hidden;border:1px solid rgba(26,86,219,.07);transition:all .35s}
.leader-card:hover{box-shadow:var(--sh);transform:translateY(-8px)}
.leader-header{height:200px;display:flex;align-items:center;justify-content:center;font-size:5rem;position:relative;overflow:hidden}
.leader-header::after{content:'';position:absolute;inset:0;opacity:.08}
.leader-body{padding:1.75rem}
.leader-name{font-size:1.05rem;font-weight:800;color:var(--dark);margin-bottom:.2rem}
.leader-role{font-size:.78rem;font-weight:700;color:var(--p);text-transform:uppercase;letter-spacing:.5px;margin-bottom:.75rem}
.leader-exp{display:inline-flex;align-items:center;gap:6px;background:rgba(26,86,219,.07);color:var(--p);font-size:.72rem;font-weight:700;padding:3px 12px;border-radius:20px;margin-bottom:.85rem}
.leader-bio{font-size:.83rem;color:var(--gray);line-height:1.75}
.leader-skills{display:flex;flex-wrap:wrap;gap:6px;margin-top:1rem}
.skill-tag{background:var(--light);color:var(--gray);font-size:.7rem;font-weight:600;padding:3px 10px;border-radius:20px}

.vision-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:3rem}
.vision-item{text-align:center;padding:2rem 1.5rem;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:18px;transition:all .3s}
.vision-item:hover{background:rgba(255,255,255,.08);transform:translateY(-4px)}
.vision-icon{font-size:2.5rem;margin-bottom:1rem}
.vision-item h3{font-size:.95rem;font-weight:700;color:#fff;margin-bottom:.5rem}
.vision-item p{font-size:.82rem;color:rgba(255,255,255,.5);line-height:1.7}

@media(max-width:768px){.vision-grid{grid-template-columns:1fr 1fr}.timeline{padding-left:2rem}}
@media(max-width:500px){.vision-grid{grid-template-columns:1fr}}
</style>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span style="color:#fff">About Us</span></div>
    <div class="page-tag">EST. 2014 · LUCKNOW, INDIA</div>
    <h1>We Are <span class="grad-text">AnantaDrishti</span><br>Technologies</h1>
    <p>A collective of passionate technologists using cutting-edge technology to solve real-world business problems — anytime, anywhere.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-grad" href="#leadership">Meet Our Team</a>
      <a class="btn btn-glass" href="contact.php">Get in Touch</a>
    </div>
  </div>
</div>

<!-- ══ ABOUT STORY ══ -->
<section class="bg-white">
  <div class="container">
    <div class="grid-2">
      <div class="sr left">
        <span class="tag">Our Story</span>
        <h2 class="sec-title">Built on <span class="grad-text">Passion</span> &amp; Purpose</h2>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:1.2rem">AnantaDrishti Technologies Private Limited is a leading business solution provider for the next generation of business innovation, powered by technology with state-of-the-art business automation, software development, corporate training, consultation services and resource management.</p>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:1.2rem">We are a highly innovative software house, systems integrator and technology provider, established to provide leading-edge intelligent technical solutions and consulting services to businesses, organizations and government — allowing efficient and effective secure access and communication with various heterogeneous information resources, anytime anywhere.</p>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85">Established in 2014 with well experienced professionals, run by experienced promoters who have established themselves in the IT domain working with multiple organisations. Our key staff have relevant work experience of <strong style="color:var(--dark)">15–20 years</strong> and have worked in multiple geographies and with various multinational clients.</p>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin-top:2rem">
          <div style="text-align:center;padding:1.25rem;background:var(--light);border-radius:14px"><div style="font-family:'Sora',sans-serif;font-size:2rem;font-weight:800;color:var(--p)">10+</div><div style="font-size:.78rem;color:var(--gray)">Years in Business</div></div>
          <div style="text-align:center;padding:1.25rem;background:var(--light);border-radius:14px"><div style="font-family:'Sora',sans-serif;font-size:2rem;font-weight:800;color:var(--acc)">500+</div><div style="font-size:.78rem;color:var(--gray)">Clients Served</div></div>
          <div style="text-align:center;padding:1.25rem;background:var(--light);border-radius:14px"><div style="font-family:'Sora',sans-serif;font-size:2rem;font-weight:800;color:var(--p3)">50+</div><div style="font-size:.78rem;color:var(--gray)">IT Professionals</div></div>
        </div>
      </div>
      <div class="sr right">
        <div class="timeline">
          <div class="tl-item"><div class="tl-dot"></div><div class="tl-year">2014</div><div class="tl-title">Founded in Lucknow</div><div class="tl-desc">AnantaDrishti Technologies incorporated with a vision to bridge technology gaps for Indian businesses and government organisations.</div></div>
          <div class="tl-item"><div class="tl-dot"></div><div class="tl-year">2016</div><div class="tl-title">IoT & Software Division Launch</div><div class="tl-desc">Launched dedicated IoT data processing division and scalable industrial automation solutions for manufacturing clients.</div></div>
          <div class="tl-item"><div class="tl-dot"></div><div class="tl-year">2018</div><div class="tl-title">AI/ML Center of Excellence</div><div class="tl-desc">Established the AI & Machine Learning center with Computer Vision, NLP and Deep Learning capabilities.</div></div>
          <div class="tl-item"><div class="tl-dot"></div><div class="tl-year">2020</div><div class="tl-title">VTS & ERP Product Launch</div><div class="tl-desc">Launched Vehicle Tracking System and Business ERP Suite with 30+ vertical-specific modules.</div></div>
          <div class="tl-item"><div class="tl-dot"></div><div class="tl-year">2022</div><div class="tl-title">Cloud & Cyber Security Expansion</div><div class="tl-desc">Azure, AWS and GCP partnership programs. Dedicated cyber security practice protecting Indian organizations.</div></div>
          <div class="tl-item"><div class="tl-dot"></div><div class="tl-year">2024</div><div class="tl-title">Decade of Innovation</div><div class="tl-desc">Celebrating 10 years of delivering transformative technology to 500+ clients across India and beyond.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ VISION ══ -->
<section class="bg-dark" id="vision">
  <div class="container">
    <div class="tc sr">
      <span class="tag" style="color:rgba(6,214,160,.9)">Our Vision</span>
      <h2 class="sec-title" style="color:#fff">Creating <span class="grad-text2">Local Opportunity</span><br>Through Global Technology</h2>
      <p class="sec-sub" style="color:rgba(255,255,255,.5)">ADT is a Software Technology & Services company. We endeavor to create local opportunity, growth and services. Our strategy is to develop best-in-class software and productivity services for an intelligent cloud and artificial intelligence era.</p>
    </div>
    <div class="vision-grid sr">
      <div class="vision-item d1">
        <div class="vision-icon">🎯</div>
        <h3>Mission</h3>
        <p>Provide leading-edge intelligent technical solutions enabling efficient, secure access to information resources for businesses, organizations and government — anytime, anywhere.</p>
      </div>
      <div class="vision-item d2">
        <div class="vision-icon">🔭</div>
        <h3>Vision</h3>
        <p>Develop best-in-class software and productivity services for an intelligent cloud and AI-powered future, creating local opportunity and enabling global competitiveness.</p>
      </div>
      <div class="vision-item d3">
        <div class="vision-icon">⭐</div>
        <h3>Purpose</h3>
        <p>We are not just a technology company — we are a collective of people that use technology to solve problems. We continue to break through boundaries every day.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ CORE PRINCIPLES ══ -->
<section class="bg-light" id="principles">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Core Principles</span>
      <h2 class="sec-title">Values That Drive <span class="grad-text">Everything We Do</span></h2>
      <p class="sec-sub">Our values are driven by passion. A passion gives you a reason to keep learning and to work toward mastery. These core principles keep ADT from becoming just like everybody else.</p>
    </div>
    <div class="grid-auto sr" style="margin-top:3rem">
      <?php $principles=[
        ['🔥','#ef4444','Passion','We are passionate about what we do — not just "in it for the money." This passion drives us to learn continuously and push toward mastery every single day.'],
        ['💡','#f59e0b','Innovation','We continuously break through boundaries. Speed and success come from constantly finding better, smarter ways to apply technology to real-world problems.'],
        ['🤝','#1a56db','Integrity','Honesty and transparency are non-negotiable. We build relationships with clients, partners and our team based on trust, clear communication and shared goals.'],
        ['🎯','#7c3aed','Excellence','We are not only geared toward client satisfaction — we strive toward client delight. Good is never good enough. We aim for exceptional, every time.'],
        ['🌱','#06d6a0','Growth','We invest in the growth of our people, our clients and our communities. Local opportunity creation and knowledge transfer are core to our purpose.'],
        ['🔒','#0ea5e9','Security','Security is not an afterthought — it is built in from the start. We take responsibility for protecting the data, systems and trust of every client we serve.'],
      ];
      foreach($principles as $i=>$p): ?>
      <div class="principle-card sr d<?= ($i%4)+1 ?>" style="--pc:<?= $p[1] ?>">
        <style>.principle-card:nth-child(<?= $i+1 ?>)::before{background:<?= $p[1] ?>}</style>
        <div class="principle-num"><?= str_pad($i+1,2,'0',STR_PAD_LEFT) ?></div>
        <div class="principle-icon" style="background:<?= $p[1] ?>22"><?= $p[0] ?></div>
        <h3><?= $p[2] ?></h3>
        <p><?= $p[3] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ PASSION SECTION ══ -->
<section class="bg-white">
  <div class="container">
    <div class="grid-2">
      <div class="sr left">
        <span class="tag">Our Culture</span>
        <h2 class="sec-title">Values Driven by <span class="grad-text">Passion</span></h2>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:1.25rem">A passion gives you a reason to keep learning and to work toward mastery. We are not a technology. We are a collective of people that simply use technology to solve problems. And we are good at it because we continue to break through boundaries every day.</p>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:1.25rem">However, this speed and the success that has come from it are only possible because we follow a set of core principles. Passion is one of our core principles and our core principles are what keep ADT from becoming just like everybody else.</p>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85">We are passionate about what we do, rather than just "in it for the money." This culture of passion and purpose is woven into everything — from how we write code to how we serve clients.</p>
        <a class="btn btn-grad" href="contact.php" style="margin-top:2rem">Work With Us →</a>
      </div>
      <div class="sr right">
        <div style="background:var(--dark);border-radius:24px;padding:2.5rem;position:relative;overflow:hidden">
          <div style="position:absolute;top:-80px;right:-80px;width:300px;height:300px;border-radius:50%;background:radial-gradient(circle,rgba(124,58,237,.15),transparent 70%)"></div>
          <div style="position:relative;z-index:1">
            <div style="font-family:'Sora',sans-serif;font-size:1.1rem;font-weight:700;color:#fff;margin-bottom:2rem">What Makes ADT Different</div>
            <?php $diffs=[['🧠','Deep Domain Expertise','15–20 years of avg. experience across all service areas'],['🌐','Multi-Geography Experience','Worked with clients across India and internationally'],['⚡','Innovation at Speed','Agile delivery with continuous improvement cycles'],['🤝','Client-First Approach','Not just satisfaction — we achieve client delight'],['🔐','Security-First Culture','Security embedded in every solution, not bolted on'],['📈','Measurable Outcomes','Every engagement tied to real business outcomes']];
            foreach($diffs as $d): ?>
            <div style="display:flex;align-items:center;gap:14px;padding:12px 0;border-bottom:1px solid rgba(255,255,255,.05)">
              <div style="width:40px;height:40px;border-radius:10px;background:rgba(255,255,255,.06);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0"><?= $d[0] ?></div>
              <div><div style="font-size:.88rem;font-weight:700;color:#fff;margin-bottom:.15rem"><?= $d[1] ?></div><div style="font-size:.78rem;color:rgba(255,255,255,.45)"><?= $d[2] ?></div></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ LEADERSHIP ══ -->
<section class="bg-light" id="leadership">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Our Leadership</span>
      <h2 class="sec-title">Meet the Team <span class="grad-text">Leading ADT</span></h2>
      <p class="sec-sub">Passionate, driven individuals leading AnantaDrishti into its next chapter of innovation and growth.</p>
    </div>
    <div class="grid-auto sr" style="margin-top:3rem">
      <?php $leaders=[
        ['👨‍💼','Amit Kumar','Founder & CEO','15+ Years','rgba(26,86,219,.1),rgba(124,58,237,.1)','amitsingh@anantdrishti.com','15+ years in IT Industry in driving business as Chief Executive Officer & Co-Founder in India. He leads business operations and develops strategies that satisfy long-range strategic goals of the company. His leadership has been instrumental in growing ADT from a startup to a recognised technology solutions provider.','Business Strategy','Operations Management','Digital Transformation','Stakeholder Relations'],
        ['🧑‍💻','Nishant Chaturvedi','Managing Director','12+ Years','rgba(6,214,160,.1),rgba(14,165,233,.1)','info@anantdrishti.com','More than 12 years of experience; consistently recognized for strong leadership in emerging technologies. Expert in Machine Learning, Artificial Intelligence, Deep Learning, Neural Networks, Natural Language Processing and Computer Vision. Drives the technical vision and AI strategy of the company.','AI / Machine Learning','Deep Learning','NLP','Computer Vision'],
        ['🔐','Awnish Kumar','Cyber Security Head','16 Years','rgba(239,68,68,.1),rgba(245,158,11,.1)','info@anantdrishti.com','A seasoned professional with 16 years of experience in the IT industry in the security domain, specializing in AEM, Cyber Security and Streaming Data Security. He leads ADT\'s cybersecurity practice helping clients protect their digital infrastructure against emerging threats.','Cyber Security','AEM','Streaming Security','Data Protection'],
        ['👩‍💼','Sanehlata Singh','Business & Corporate Head','12+ Years','rgba(124,58,237,.12),rgba(245,158,11,.1)','info@anantdrishti.com','12+ years experience in Operations, Strategic Relationship Management, Business Planning & Development, Training & Development and extensive experience that encompasses Corporate HR Practices. She drives ADT\'s business development and talent strategy.','Operations','Business Development','Corporate HR','Training & Development'],
      ];
      foreach($leaders as $i=>$l): ?>
      <div class="leader-card sr d<?= $i+1 ?>">
        <div class="leader-header" style="background:linear-gradient(135deg,<?= $l[4] ?>)"><?= $l[0] ?>
          <div style="position:absolute;bottom:0;left:0;right:0;height:50%;background:linear-gradient(to top,rgba(255,255,255,.05),transparent)"></div>
        </div>
        <div class="leader-body">
          <div class="leader-name"><?= $l[1] ?></div>
          <div class="leader-role"><?= $l[2] ?></div>
          <div class="leader-exp">🏆 <?= $l[3] ?> Experience</div>
          <div class="leader-bio"><?= $l[5+1] ?></div>
          <div class="leader-skills">
            <?php for($j=7;$j<11;$j++) echo '<span class="skill-tag">'.$l[$j].'</span>'; ?>
          </div>
          <div style="margin-top:1.1rem;display:flex;gap:.5rem">
            <a style="display:inline-flex;align-items:center;gap:5px;background:rgba(26,86,219,.08);color:var(--p);font-size:.75rem;font-weight:600;padding:5px 12px;border-radius:20px;text-decoration:none;transition:all .2s" href="mailto:<?= $l[5] ?>">✉ Email</a>
            <a style="display:inline-flex;align-items:center;gap:5px;background:rgba(26,86,219,.08);color:var(--p);font-size:.75rem;font-weight:600;padding:5px 12px;border-radius:20px;text-decoration:none;transition:all .2s" href="#">in LinkedIn</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<div class="cta-band">
  <div class="container sr">
    <h2>Ready to Build Together?</h2>
    <p>Join 500+ organisations that trust AnantaDrishti to power their digital transformation.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="contact.php">Start a Conversation</a>
      <a class="btn btn-outline-w btn-lg" href="careers.php">Join Our Team</a>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>