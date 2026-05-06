<?php
$page_title = 'Contact Us – Get in Touch with Anantadrishti';
$page_desc = 'Contact Anantadrishti Technologies. Reach us at our Lucknow office or fill the form to start your digital transformation journey.';
include 'includes/header.php';
?>
<style>
.contact-grid{display:grid;grid-template-columns:1fr 1.5fr;gap:3.5rem;margin-top:4rem;align-items:start}
.ci-card{background:#fff;border-radius:18px;padding:1.5rem;border:1px solid rgba(26,86,219,.08);display:flex;gap:1.1rem;align-items:flex-start;transition:all .3s;margin-bottom:1.1rem}
.ci-card:hover{box-shadow:var(--sh2);transform:translateX(4px)}
.ci-icon{width:48px;height:48px;border-radius:14px;background:var(--grad);display:flex;align-items:center;justify-content:center;font-size:1.25rem;flex-shrink:0}
.ci-label{font-size:.72rem;font-weight:700;color:var(--gray);text-transform:uppercase;letter-spacing:1px;margin-bottom:.3rem}
.ci-value{font-size:.9rem;color:var(--dark);font-weight:600;line-height:1.55}
.ci-sub{font-size:.78rem;color:var(--gray);margin-top:.15rem}

.form-card{background:#fff;border-radius:24px;padding:2.5rem;box-shadow:0 25px 80px rgba(26,86,219,.1);border:1px solid rgba(26,86,219,.06)}
.form-title{font-family:'Sora',sans-serif;font-size:1.2rem;font-weight:800;color:var(--dark);margin-bottom:.3rem}
.form-sub{font-size:.85rem;color:var(--gray);margin-bottom:2rem}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
.fg{display:flex;flex-direction:column;gap:.4rem;margin-bottom:1rem}
.fg label{font-size:.8rem;font-weight:700;color:var(--dark);letter-spacing:.2px}
.fg input,.fg textarea,.fg select{padding:12px 16px;border:1.5px solid #e2e8f0;border-radius:12px;font-family:'DM Sans',sans-serif;font-size:.9rem;color:var(--dark);outline:none;transition:all .2s;background:#fff}
.fg input:focus,.fg textarea:focus,.fg select:focus{border-color:var(--p);box-shadow:0 0 0 3px rgba(26,86,219,.08)}
.fg textarea{resize:vertical;min-height:120px}
.submit-btn{width:100%;padding:14px;border-radius:50px;background:var(--grad);color:#fff;border:none;font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:700;cursor:pointer;transition:all .3s;margin-top:.5rem;display:flex;align-items:center;justify-content:center;gap:8px}
.submit-btn:hover{transform:translateY(-2px);box-shadow:0 14px 36px rgba(26,86,219,.4)}

.map-card{background:#fff;border-radius:20px;overflow:hidden;border:1px solid rgba(26,86,219,.08);margin-top:1.5rem}

.dept-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:3rem}
.dept-card{background:#fff;border-radius:18px;padding:1.5rem;border:1px solid rgba(26,86,219,.07);text-align:center;transition:all .3s}
.dept-card:hover{box-shadow:var(--sh2);transform:translateY(-4px)}
.dept-icon{font-size:2rem;margin-bottom:.75rem}
.dept-card h4{font-size:.9rem;font-weight:700;color:var(--dark);margin-bottom:.35rem}
.dept-card p{font-size:.78rem;color:var(--gray);line-height:1.6;margin-bottom:.75rem}
.dept-email{font-size:.8rem;font-weight:600;color:var(--p);text-decoration:none}
.dept-email:hover{text-decoration:underline}

@media(max-width:900px){.contact-grid{grid-template-columns:1fr}.form-row{grid-template-columns:1fr}.dept-grid{grid-template-columns:1fr 1fr}}
@media(max-width:500px){.dept-grid{grid-template-columns:1fr}}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span style="color:#fff">Contact Us</span></div>
    <div class="page-tag">WE'D LOVE TO HEAR FROM YOU</div>
    <h1>Let's <span class="grad-text">Build Together</span></h1>
    <p>Whether you're looking to start a project, explore a partnership, or just have questions — we're here and ready to help.</p>
  </div>
</div>

<!-- ══ CONTACT MAIN ══ -->
<section class="bg-light">
  <div class="container">
    <div class="contact-grid">
      <!-- LEFT: Info -->
      <div class="sr left">
        <span class="tag">Contact Information</span>
        <h2 class="sec-title">Reach <span class="grad-text">Our Team</span></h2>
        <p style="font-size:.9rem;color:var(--gray);line-height:1.8;margin-bottom:2rem">We respond within 24 hours on business days. For urgent requirements, call us directly.</p>

        <div class="ci-card sr d1">
          <div class="ci-icon">📍</div>
          <div>
            <div class="ci-label">Registered Address</div>
            <div class="ci-value">8/1, Dwarikapuri Colony, Ishwar Puri,<br>Indira Nagar, Lucknow – 226016<br>Uttar Pradesh, India</div>
          </div>
        </div>
        <div class="ci-card sr d2">
          <div class="ci-icon">📞</div>
          <div>
            <div class="ci-label">Phone Numbers</div>
            <div class="ci-value">0522-4056487</div>
            <div class="ci-sub">+91 9140668001 &nbsp;·&nbsp; +91 9389703952</div>
          </div>
        </div>
        <div class="ci-card sr d3">
          <div class="ci-icon">✉️</div>
          <div>
            <div class="ci-label">Email Addresses</div>
            <div class="ci-value"><a href="mailto:info@anantdrishti.com" style="color:var(--p);text-decoration:none">info@anantdrishti.com</a></div>
            <div class="ci-sub"><a href="mailto:amitsingh@anantdrishti.com" style="color:var(--gray);text-decoration:none">amitsingh@anantdrishti.com</a></div>
          </div>
        </div>
        <div class="ci-card sr d4">
          <div class="ci-icon">🌐</div>
          <div>
            <div class="ci-label">Website</div>
            <div class="ci-value"><a href="https://www.anantdrishti.com" style="color:var(--p);text-decoration:none" target="_blank">www.anantdrishti.com</a></div>
            <div class="ci-sub">Anantadrishti Technologies Pvt. Ltd.</div>
          </div>
        </div>
        <div class="ci-card sr d5">
          <div class="ci-icon">⏰</div>
          <div>
            <div class="ci-label">Business Hours</div>
            <div class="ci-value">Monday – Saturday: 9:00 AM – 7:00 PM IST</div>
            <div class="ci-sub">Sunday: Closed &nbsp;·&nbsp; Holidays: Limited support</div>
          </div>
        </div>

        <!-- Map SVG -->
        <div class="map-card sr d5">
          <svg viewBox="0 0 400 220" xmlns="http://www.w3.org/2000/svg" style="display:block">
            <rect width="400" height="220" fill="#f0f6ff"/>
            <line x1="0" y1="44" x2="400" y2="44" stroke="#e2e8f0" stroke-width="1"/>
            <line x1="0" y1="88" x2="400" y2="88" stroke="#e2e8f0" stroke-width="1"/>
            <line x1="0" y1="132" x2="400" y2="132" stroke="#e2e8f0" stroke-width="1"/>
            <line x1="0" y1="176" x2="400" y2="176" stroke="#e2e8f0" stroke-width="1"/>
            <line x1="80" y1="0" x2="80" y2="220" stroke="#e2e8f0" stroke-width="1"/>
            <line x1="160" y1="0" x2="160" y2="220" stroke="#e2e8f0" stroke-width="1"/>
            <line x1="240" y1="0" x2="240" y2="220" stroke="#e2e8f0" stroke-width="1"/>
            <line x1="320" y1="0" x2="320" y2="220" stroke="#e2e8f0" stroke-width="1"/>
            <!-- India simplified outline -->
            <path d="M160 30 Q185 35 205 55 Q225 75 220 105 Q215 135 195 155 Q185 170 182 188 Q178 200 182 188 Q170 175 155 158 Q135 138 130 110 Q125 82 136 60 Q148 38 160 30Z" fill="rgba(26,86,219,.07)" stroke="rgba(26,86,219,.18)" stroke-width="1.5"/>
            <!-- Lucknow pin -->
            <circle cx="188" cy="108" r="10" fill="rgba(26,86,219,.15)"><animate attributeName="r" values="10;16;10" dur="2s" repeatCount="indefinite"/><animate attributeName="opacity" values="0.15;0.05;0.15" dur="2s" repeatCount="indefinite"/></circle>
            <circle cx="188" cy="108" r="6" fill="#1a56db"/>
            <circle cx="188" cy="108" r="3" fill="#fff"/>
            <line x1="188" y1="108" x2="230" y2="80" stroke="rgba(26,86,219,.4)" stroke-width="1.5" stroke-dasharray="4 3"/>
            <rect x="230" y="58" width="145" height="46" rx="10" fill="#fff" stroke="rgba(26,86,219,.15)" stroke-width="1"/>
            <text x="242" y="76" fill="#1a56db" font-family="Sora,sans-serif" font-size="10" font-weight="800">Anantadrishti HQ</text>
            <text x="242" y="91" fill="#64748b" font-family="DM Sans,sans-serif" font-size="8.5">Indira Nagar, Lucknow UP</text>
            <text x="200" y="200" text-anchor="middle" fill="#64748b" font-family="DM Sans,sans-serif" font-size="9">Lucknow, Uttar Pradesh, India</text>
          </svg>
        </div>
      </div>

      <!-- RIGHT: Form -->
      <div class="sr right">
        <div class="form-card">
          <div class="form-title">Send Us a Message</div>
          <div class="form-sub">We typically respond within 1 business day.</div>
          <form id="contactForm" onsubmit="handleSubmit(event)">
            <input type="text" name="_hp" style="display:none!important" tabindex="-1" autocomplete="off" aria-hidden="true">
            <div class="form-row">
              <div class="fg"><label>First Name *</label><input type="text" name="first_name" placeholder="Rahul" required></div>
              <div class="fg"><label>Last Name *</label><input type="text" name="last_name" placeholder="Sharma" required></div>
            </div>
            <div class="fg"><label>Email Address *</label><input type="email" name="email" placeholder="rahul@company.com" required></div>
            <div class="fg"><label>Phone Number</label><input type="tel" name="phone" placeholder="+91 98765 43210"></div>
            <div class="fg"><label>Company / Organisation</label><input type="text" name="company" placeholder="Your company name"></div>
            <div class="fg">
              <label>Service of Interest</label>
              <select name="service">
                <option value="">Select a service...</option>
                <option>Technology Consulting</option>
                <option>Software Development</option>
                <option>AI & Machine Learning</option>
                <option>IoT Solutions</option>
                <option>Digital Transformation</option>
                <option>Digital Integration</option>
                <option>Cyber Security</option>
                <option>Cloud Services</option>
                <option>Data Science & Analytics</option>
                <option>ERP / Business Solutions</option>
                <option>Vehicle Tracking System (VTS)</option>
                <option>Internship / Training</option>
                <option>Other</option>
              </select>
            </div>
            <div class="fg">
              <label>Project Budget (Optional)</label>
              <select name="budget">
                <option value="">Select budget range...</option>
                <option>Under ₹1 Lakh</option>
                <option>₹1 – 5 Lakhs</option>
                <option>₹5 – 20 Lakhs</option>
                <option>₹20 – 50 Lakhs</option>
                <option>₹50 Lakhs +</option>
                <option>Government / Enterprise (Custom)</option>
              </select>
            </div>
            <div class="fg"><label>Your Message *</label><textarea name="message" placeholder="Tell us about your project, requirements, or any questions you have..." required></textarea></div>
            <button type="submit" class="submit-btn" id="submitBtn">
              <span>Send Message</span>
              <svg viewBox="0 0 24 24" width="18" fill="white"><path d="M22 2L11 13M22 2L15 22l-4-9-9-4 20-7z"/></svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ DEPARTMENT CONTACTS ══ -->
<section class="bg-white">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Departments</span>
      <h2 class="sec-title">Contact the <span class="grad-text">Right Team</span></h2>
      <p class="sec-sub">Reach out directly to the department best suited to help you.</p>
    </div>
    <div class="dept-grid">
      <?php $depts=[
        ['💼','Sales & Business','For new projects, partnerships and enterprise inquiries.','amitsingh@anantdrishti.com'],
        ['🛠️','Technical Support','For existing clients needing technical assistance.','info@anantdrishti.com'],
        ['🎓','Training & Internship','For seminar registration and internship programme.','info@anantdrishti.com'],
        ['🛡️','Cyber Security','For security audits, pen testing and compliance queries.','info@anantdrishti.com'],
        ['☁️','Cloud & DevOps','For Azure, AWS, GCP deployment and migration queries.','info@anantdrishti.com'],
        ['📰','Media & PR','For press, media coverage and event collaboration.','info@anantdrishti.com'],
      ];
      foreach($depts as $i=>$d): ?>
      <div class="dept-card sr d<?= ($i%4)+1 ?>">
        <div class="dept-icon"><?= $d[0] ?></div>
        <h4><?= $d[1] ?></h4>
        <p><?= $d[2] ?></p>
        <a class="dept-email" href="mailto:<?= $d[3] ?>"><?= $d[3] ?></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<!-- <div class="cta-band">
  <div class="container sr">
    <h2>Prefer a Direct Call?</h2>
    <p>Our team is available Monday to Saturday, 9 AM – 7 PM IST. Don't hesitate to call us directly.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="tel:+919140668001">📞 +91 9140668001</a>
      <a class="btn btn-outline-w btn-lg" href="insights/seminar.php">Register for Seminar</a>
    </div>
  </div>
</div> -->

<script>
function handleSubmit(e){
  e.preventDefault();
  const btn  = document.getElementById('submitBtn');
  const form = document.getElementById('contactForm');
  const orig = btn.innerHTML;

  btn.innerHTML = '<span>Sending…</span>';
  btn.disabled  = true;

  fetch('api/send-contact.php', {method:'POST', body: new FormData(form)})
    .then(r => r.json())
    .then(data => {
      if(data.success){
        btn.innerHTML = '<span>✓ Message Sent!</span>';
        btn.style.background = 'linear-gradient(135deg,#06d6a0,#0ea5e9)';
        form.reset();
        setTimeout(()=>{ btn.innerHTML=orig; btn.style.background=''; btn.disabled=false; }, 4000);
      } else {
        btn.innerHTML = '<span>⚠ ' + data.message + '</span>';
        btn.style.background = 'linear-gradient(135deg,#ef4444,#dc2626)';
        setTimeout(()=>{ btn.innerHTML=orig; btn.style.background=''; btn.disabled=false; }, 4000);
      }
    })
    .catch(()=>{
      btn.innerHTML = '<span>⚠ Network error. Please try again.</span>';
      btn.style.background = 'linear-gradient(135deg,#ef4444,#dc2626)';
      setTimeout(()=>{ btn.innerHTML=orig; btn.style.background=''; btn.disabled=false; }, 4000);
    });
}
</script>
<?php include 'includes/footer.php'; ?>
