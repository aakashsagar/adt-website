<?php
$root='../';
$page_title='Seminar Registration – Anantadrishti Technologies';
$page_desc='Register for Anantadrishti Technologies seminars on AI, Digital Transformation, Cyber Security and Cloud — held in Lucknow, UP, India.';
include '../includes/header.php';
?>
<style>
/* ── Seminar Cards ── */
.seminar-card{background:#fff;border-radius:20px;border:1px solid rgba(26,86,219,.08);overflow:hidden;transition:all .3s}
.seminar-card:hover{box-shadow:var(--sh);transform:translateY(-5px)}
.sem-banner{padding:1.1rem 1.25rem;position:relative;overflow:hidden;min-height:90px;display:flex;flex-direction:column;justify-content:flex-end}
.sem-banner::before{content:'';position:absolute;inset:0;opacity:.08}
.sem-date-badge{position:absolute;top:1.25rem;right:1.25rem;background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.3);backdrop-filter:blur(10px);border-radius:12px;padding:8px 16px;text-align:center}
.sem-date-day{font-family:'Sora',sans-serif;font-size:1.5rem;font-weight:800;color:#fff;line-height:1}
.sem-date-month{font-size:.7rem;color:rgba(255,255,255,.75);font-weight:600;text-transform:uppercase}
.sem-status{display:inline-flex;align-items:center;gap:5px;font-size:.72rem;font-weight:700;padding:4px 12px;border-radius:20px;margin-bottom:.5rem;width:fit-content}
.sem-title{font-family:'Sora',sans-serif;font-size:1.05rem;font-weight:800;color:#fff;line-height:1.3}
.sem-body{padding:1.5rem}
.sem-info{display:flex;flex-wrap:wrap;gap:.75rem;margin-bottom:1rem}
.sem-info-item{display:flex;align-items:center;gap:5px;font-size:.78rem;color:var(--gray)}
.sem-desc{font-size:.85rem;color:var(--gray);line-height:1.7;margin-bottom:1.25rem}
.agenda-item{display:flex;gap:10px;align-items:flex-start;padding:8px 0;border-bottom:1px solid #f1f5f9}
.agenda-item:last-child{border-bottom:none}
.agenda-time{font-size:.72rem;font-weight:700;color:var(--p);min-width:55px;flex-shrink:0;margin-top:1px}
.agenda-topic{font-size:.8rem;color:var(--dark)}
.register-btn{display:inline-flex;align-items:center;gap:6px;padding:10px 22px;border-radius:50px;background:var(--grad);color:#fff;font-weight:700;font-size:.82rem;transition:all .25s;text-decoration:none}
.register-btn:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(26,86,219,.3);color:#fff}

/* ── Registration Form Card ── */
.reg-form-card{background:#fff;border-radius:24px;overflow:hidden;box-shadow:var(--sh);border:1px solid rgba(26,86,219,.06);position:sticky;top:90px}
.reg-form-header{background:var(--grad);padding:1.75rem 2rem;text-align:center;position:relative;overflow:hidden}
.reg-form-header::before{content:'';position:absolute;width:260px;height:260px;border-radius:50%;background:rgba(255,255,255,.06);top:-100px;right:-70px;pointer-events:none}
.reg-form-header::after{content:'';position:absolute;width:180px;height:180px;border-radius:50%;background:rgba(255,255,255,.06);bottom:-70px;left:-50px;pointer-events:none}
.reg-form-header>*{position:relative;z-index:1}
.reg-form-header .rh-icon{font-size:2rem;margin-bottom:.5rem;display:block}
.reg-form-header h3{font-family:'Sora',sans-serif;font-size:1.1rem;font-weight:800;color:#fff;margin-bottom:.3rem}
.reg-form-header p{font-size:.8rem;color:rgba(255,255,255,.82);line-height:1.55}
.reg-form-body{padding:1.75rem 2rem}

/* ── Form Fields ── */
.fg{display:flex;flex-direction:column;gap:.35rem;margin-bottom:1rem}
.fg label{font-size:.78rem;font-weight:700;color:var(--dark);letter-spacing:.2px}
.fg input,.fg textarea,.fg select{padding:11px 15px;border:1.5px solid #e2e8f0;border-radius:11px;font-family:'DM Sans',sans-serif;font-size:.88rem;color:var(--dark);outline:none;transition:all .25s;background:#f8fafd;width:100%}
.fg input:focus,.fg textarea:focus,.fg select:focus{border-color:var(--p);box-shadow:0 0 0 3px rgba(26,86,219,.08);background:#fff}
.fg input::placeholder,.fg textarea::placeholder{color:#b0bac8;font-size:.85rem}
.fg textarea{resize:vertical;min-height:85px}
.fg select{-webkit-appearance:none;appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%2364748b' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 14px center;background-color:#f8fafd;padding-right:38px;cursor:pointer}

/* ── Form Section Dividers ── */
.form-section-label{font-size:.7rem;font-weight:700;color:#94a3b8;text-transform:uppercase;letter-spacing:1.5px;margin:1.1rem 0 .8rem;display:flex;align-items:center;gap:8px}
.form-section-label:first-child{margin-top:0}
.form-section-label::after{content:'';flex:1;height:1px;background:#e8edf5}
.form-row-2{display:grid;grid-template-columns:1fr 1fr;gap:.85rem}

/* ── Responsive ── */
@media(max-width:960px){
  .sem-main-grid{grid-template-columns:1fr!important;gap:2.5rem!important}
  .reg-form-card{position:static!important;top:0}
  .form-row-2{grid-template-columns:1fr}
}
@media(max-width:600px){
  .reg-form-header{padding:1.5rem}
  .reg-form-body{padding:1.5rem}
}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span style="color:#fff">Seminar</span></div>
    <div class="page-tag">ADT TRAINING DIVISION · LUCKNOW</div>
    <h1>Register for ADT<br><span class="grad-text2">Technology Seminars</span></h1>
    <p>In-person and hybrid seminars on AI, Digital Transformation, Cyber Security, Cloud and IoT — delivered by practitioners with 12–20 years of real-world experience.</p>
    <a class="btn btn-grad" href="#register">Register Now →</a>
  </div>
</div>

<section class="bg-light">
  <div class="container">
    <div class="sem-main-grid" style="display:grid;grid-template-columns:1.2fr 1fr;gap:3rem;align-items:start">
      <!-- LEFT: Seminar listings -->
      <div>
        <div class="sr" style="margin-bottom:2rem">
          <!-- <span class="tag">Upcoming Seminars</span> -->
          <h2 class="sec-title">ADT <span class="grad-text">Seminar Calendar</span></h2>
          <p style="font-size:.9rem;color:var(--gray);line-height:1.75">Practical, hands-on seminars designed for business owners, IT managers and technology professionals across Uttar Pradesh.</p>
        </div>

        <?php $seminars=[
          ['AI & Machine Learning','linear-gradient(135deg,#7c3aed,#1a56db)','Completed',['12','Apr','2025'],'rgba(100,116,139,.15)','#475569','🤖',
            'A half-day practical seminar on how Indian businesses can deploy AI and machine learning to reduce costs, automate processes and gain competitive advantage. No technical background required.',
            ['09:00','Welcome & Introduction to AI'],['09:30','ML Use Cases for Indian SMEs'],['10:30','Break & Networking'],['11:00','Live Demo: AI in Action'],['12:00','Q&A and Wrap-Up'],
            'Business Owners · C-Suite · IT Managers','Half Day (9 AM – 12:30 PM)'],
          ['Cyber Security Essentials','linear-gradient(135deg,#ef4444,#dc2626)','Completed',['15','Mar','2025'],'rgba(100,116,139,.15)','#475569','🛡️',
            'A comprehensive seminar covering the current threat landscape, DPDP Act 2023 compliance requirements, and practical steps every organisation should take to protect their digital assets.',
            ['09:00','Current Threat Landscape India 2025'],['10:00','DPDP Act — What Your Business Must Do'],['11:00','Break'],['11:30','Practical Security Controls Workshop'],['01:00','Lunch & Networking'],
            'CIOs · IT Teams · Legal & Compliance · Business Owners','Full Day (9 AM – 5 PM)'],
          ['Cloud Migration Masterclass','linear-gradient(135deg,#0078d4,#0ea5e9)','Completed',['18','Jan','2025'],'rgba(100,116,139,.15)','#475569','☁️',
            'Hands-on masterclass walking through a real cloud migration from on-premise to Azure. Includes cost estimation, risk mitigation and a live deployment demonstration.',
            ['09:00','Why Cloud? ROI for Indian Businesses'],['10:00','Azure Architecture Walkthrough'],['11:00','Live Migration Demo'],['12:00','Lunch'],['01:00','Hands-On Lab Session'],['03:00','Cost Optimisation Strategies'],
            'IT Managers · System Administrators · Tech Leads','Full Day (9 AM – 5 PM)'],
          ['Digital Transformation','linear-gradient(135deg,#f59e0b,#ef4444)','Completed',['14','Dec','2024'],'rgba(100,116,139,.15)','#475569','⚡',
            'A practical seminar tailored for businesses in Uttar Pradesh looking to modernise their operations. Covers automation, digital payments, e-commerce and government digital initiatives.',
            ['09:00','Digital Maturity Assessment'],['10:00','Case Studies: UP Business Transformations'],['11:00','Break'],['11:30','Government Digital Schemes & Benefits'],['12:30','Practical Next Steps Workshop'],
            'Business Owners · Retail · Manufacturing · Services','Half Day (9 AM – 1 PM)'],
        ];
        foreach($seminars as $i=>$s): ?>
        <div class="seminar-card sr d<?= ($i%3)+1 ?>" style="margin-bottom:1.75rem">
          <div class="sem-banner" style="background:<?= $s[1] ?>">
            <div class="sem-date-badge"><div class="sem-date-day"><?= $s[3][0] ?></div><div class="sem-date-month"><?= $s[3][1].' '.$s[3][2] ?></div></div>
            <div class="sem-status" style="background:<?= $s[4] ?>;color:<?= $s[5] ?>">● <?= $s[2] ?></div>
            <div class="sem-title"><?= $s[0] ?></div>
          </div>
          <div class="sem-body">
            <div class="sem-info">
              <span class="sem-info-item">📍 Lucknow, UP</span>
              <!-- <span class="sem-info-item">⏱ <?= $s[11] ?></span>
              <span class="sem-info-item">👥 <?= $s[10] ?></span> -->
            </div>
            <p class="sem-desc"><?= $s[7] ?></p>
            <div style="font-size:.78rem;font-weight:700;color:var(--dark);margin-bottom:.6rem;text-transform:uppercase;letter-spacing:.5px">Agenda</div>
            <?php for($j=8;$j<=8+4&&isset($s[$j]);$j++): ?>
            <div class="agenda-item"><span class="agenda-time"><?= $s[$j][0] ?></span><span class="agenda-topic"><?= $s[$j][1] ?></span></div>
            <?php endfor; ?>
            <!-- <a href="#register" class="register-btn" style="width:100%;justify-content:center;margin-top:1.25rem;display:flex">Register for This Seminar →</a> -->
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- RIGHT: Registration form -->
      <div id="register">
        <div class="reg-form-card sr">
          <div class="reg-form-header">
            <span class="rh-icon">📋</span>
            <h3>Seminar Registration</h3>
            <p>Fill in your details. We'll confirm your spot via email and WhatsApp.</p>
          </div>
          <div class="reg-form-body">
            <form onsubmit="handleSemReg(event)">
              <div class="form-section-label">Personal Details</div>
              <div class="fg"><label>Full Name *</label><input type="text" placeholder="Your full name" required></div>
              <div class="form-row-2">
                <div class="fg"><label>Email Address *</label><input type="email" placeholder="you@company.com" required></div>
                <div class="fg"><label>WhatsApp Number *</label><input type="tel" placeholder="+91 98765 43210" required></div>
              </div>

              <div class="form-section-label">Professional Info</div>
              <div class="form-row-2">
                <div class="fg"><label>Organisation *</label><input type="text" placeholder="Company or institution" required></div>
                <div class="fg"><label>Designation</label><input type="text" placeholder="Your role / designation"></div>
              </div>

              <div class="form-section-label">Seminar Details</div>
              <div class="fg">
                <label>Select Seminar *</label>
                <select required>
                  <option value="">Choose a seminar...</option>
                  <option>AI & Machine Learning for Business Leaders</option>
                  <option>Cyber Security Essentials for Indian Organisations</option>
                  <option>Cloud Migration Masterclass — Azure & AWS</option>
                  <option>Digital Transformation for UP Businesses</option>
                  <option>Notify Me for All Upcoming Seminars</option>
                </select>
              </div>
              <div class="fg">
                <label>Number of Attendees</label>
                <select>
                  <option>1 Person</option>
                  <option>2–3 People (Team)</option>
                  <option>4–10 People (Group)</option>
                  <option>10+ People (Corporate Batch)</option>
                </select>
              </div>
              <div class="fg"><label>Any Specific Topics or Questions?</label><textarea placeholder="Tell us what you'd most like to learn..."></textarea></div>
              <!-- <button type="submit" id="semRegBtn" style="width:100%;padding:14px;border-radius:50px;background:var(--grad);color:#fff;border:none;font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:700;cursor:pointer;transition:all .3s;margin-top:.25rem">Register Now →</button> -->
              <button disabled  style="width:100%;padding:14px;border-radius:50px;background:var(--grad);color:#fff;border:none;font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:700;cursor:pointer;transition:all .3s;margin-top:.25rem ;">Curently not available</button>
            </form>
            <div style="margin-top:1.25rem;padding:1rem;background:var(--light);border-radius:12px;font-size:.78rem;color:var(--gray);line-height:1.65;border:1px solid #e8edf5">
              📞 For group registrations or corporate training, call us at <strong>+91 9140668001</strong> or email <strong>info@anantdrishti.com</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <div class="cta-band">
  <div class="container sr">
    <h2>Want ADT to Conduct a Seminar for Your Organisation?</h2>
    <p>We deliver customised in-house training seminars for corporate teams, colleges and government departments.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="../contact.php">Request Corporate Training</a>
      <a class="btn btn-outline-w btn-lg" href="../internship.php">Internship Program</a>
    </div>
  </div>
</div> -->
<script>
function handleSemReg(e){
  e.preventDefault();
  const btn=document.getElementById('semRegBtn');
  btn.textContent='✓ Registration Confirmed! Check your WhatsApp.';
  btn.style.background='linear-gradient(135deg,#06d6a0,#0ea5e9)';
}
</script>
<?php include '../includes/footer.php'; ?>