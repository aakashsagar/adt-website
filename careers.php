<?php
$page_title = 'Careers – Join AnantaDrishti Technologies';
$page_desc = 'Join the ADT team. View open positions in software development, AI/ML, cyber security and more. Based in Lucknow, India.';
include 'includes/header.php';
?>
<style>
.job-card{background:#fff;border-radius:20px;padding:2rem;border:1px solid rgba(26,86,219,.08);transition:all .3s;position:relative;overflow:hidden}
.job-card::before{content:'';position:absolute;top:0;left:0;bottom:0;width:4px;background:var(--grad);border-radius:4px 0 0 4px;transform:scaleY(0);transition:transform .3s}
.job-card:hover{box-shadow:var(--sh);transform:translateY(-5px)}
.job-card:hover::before{transform:scaleY(1)}
.job-header{display:flex;align-items:flex-start;justify-content:space-between;gap:1rem;margin-bottom:1rem}
.job-title{font-size:1.05rem;font-weight:800;color:var(--dark);margin-bottom:.3rem}
.job-meta{display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:1rem}
.job-tag{font-size:.72rem;font-weight:700;padding:3px 12px;border-radius:20px}
.tag-dept{background:rgba(26,86,219,.1);color:var(--p)}
.tag-loc{background:rgba(6,214,160,.1);color:#059669}
.tag-type{background:rgba(245,158,11,.1);color:#d97706}
.tag-exp{background:rgba(124,58,237,.1);color:var(--p3)}
.job-desc{font-size:.875rem;color:var(--gray);line-height:1.7;margin-bottom:1.25rem}
.job-skills{display:flex;flex-wrap:wrap;gap:6px;margin-bottom:1.25rem}
.job-skill{background:var(--light);color:var(--dark);font-size:.72rem;font-weight:600;padding:3px 10px;border-radius:20px}
.job-footer{display:flex;align-items:center;justify-content:space-between;padding-top:1rem;border-top:1px solid #f1f5f9}
.job-posted{font-size:.75rem;color:var(--gray)}

.perks-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:3rem}
.perk-card{background:#fff;border-radius:18px;padding:1.75rem;border:1px solid rgba(26,86,219,.07);text-align:center;transition:all .3s}
.perk-card:hover{box-shadow:var(--sh2);transform:translateY(-4px)}
.perk-icon{font-size:2.2rem;margin-bottom:.85rem}
.perk-card h4{font-size:.9rem;font-weight:700;color:var(--dark);margin-bottom:.4rem}
.perk-card p{font-size:.8rem;color:var(--gray);line-height:1.65}

.apply-modal-btn{display:inline-flex;align-items:center;gap:7px;background:var(--grad);color:#fff;padding:10px 22px;border-radius:50px;font-weight:600;font-size:.85rem;cursor:pointer;border:none;font-family:'DM Sans',sans-serif;transition:all .25s}
.apply-modal-btn:hover{transform:translateY(-2px);box-shadow:0 10px 28px rgba(26,86,219,.35)}

.process-steps{display:flex;gap:0;margin-top:3rem;position:relative}
.process-steps::before{content:'';position:absolute;top:28px;left:10%;right:10%;height:2px;background:linear-gradient(to right,var(--p),var(--p3),var(--acc));z-index:0}
.proc-step{flex:1;text-align:center;position:relative;z-index:1}
.proc-num{width:56px;height:56px;border-radius:50%;background:var(--grad);color:#fff;font-family:'Sora',sans-serif;font-weight:800;font-size:1rem;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;box-shadow:0 6px 20px rgba(26,86,219,.3)}
.proc-step h4{font-size:.85rem;font-weight:700;color:var(--dark);margin-bottom:.3rem}
.proc-step p{font-size:.75rem;color:var(--gray);line-height:1.6;padding:0 .5rem}

@media(max-width:900px){.perks-grid{grid-template-columns:repeat(2,1fr)}.process-steps{flex-direction:column;gap:1.5rem}.process-steps::before{display:none}}
@media(max-width:500px){.perks-grid{grid-template-columns:1fr}}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span style="color:#fff">Careers</span></div>
    <div class="page-tag">JOIN THE ADT FAMILY</div>
    <h1>Build the Future<br>with <span class="grad-text2">AnantaDrishti</span></h1>
    <p>Work with talented people, united by the passion to collaborate, make a difference, and have fun while doing it. Join our growing team in Lucknow.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-grad" href="#openings">View Open Positions</a>
      <a class="btn btn-glass" href="internship.php">Internship Program</a>
    </div>
  </div>
</div>

<!-- ══ WHY JOIN ══ -->
<section class="bg-white">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Why AnantaDrishti</span>
      <h2 class="sec-title">More Than a Job —<br><span class="grad-text">A Mission</span></h2>
      <p class="sec-sub">We are always seeking talented, driven and passionate individuals who want to make a real difference through technology.</p>
    </div>
    <div class="perks-grid">
      <?php $perks=[
        ['🚀','High-Impact Work','Work on real AI, IoT, cloud and software solutions deployed across India and beyond.'],
        ['🧠','Learn from the Best','Our team averages 15–20 years of experience — a learning environment unlike any other.'],
        ['🌱','Career Growth','Clear growth paths, regular performance reviews and internal mobility across projects.'],
        ['🤝','Collaborative Culture','Flat hierarchy, open communication and a team that genuinely supports each other.'],
        ['🎓','Continuous Training',"Access to certifications, workshops, seminars and ADT's own training division."],
        ['📍','Lucknow-based',"Work at our modern Indira Nagar office — one of UP's most liveable neighbourhoods."],
      ];
      foreach($perks as $i=>$p): ?>
      <div class="perk-card sr d<?= ($i%4)+1 ?>">
        <div class="perk-icon"><?= $p[0] ?></div>
        <h4><?= $p[1] ?></h4>
        <p><?= $p[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ OPEN POSITIONS ══ -->
<section class="bg-light" id="openings">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Open Positions</span>
      <h2 class="sec-title">Current <span class="grad-text">Openings</span></h2>
      <p class="sec-sub">All positions are based in Lucknow, Uttar Pradesh. Remote-friendly for senior roles.</p>
    </div>
    <div style="display:flex;flex-direction:column;gap:1.5rem;margin-top:3rem">
      <?php $jobs=[
        ['fullstack','Full Stack Software Engineer','IT – Development','Lucknow','Full-Time','2–5 yrs','Open',
          'Build scalable web applications using Python/Django and React/Next.js. You\'ll work on real products serving thousands of users across India.',
          ['Python','Django','React','Next.js','REST APIs','PostgreSQL','Docker','Git'],
          ['Design and build RESTful APIs','Develop responsive frontend interfaces','Database design and optimisation','Code reviews and technical documentation','Collaborate with AI/ML team on integrations']
        ],
        ['ml','Machine Learning Engineer','IT – AI/ML','Lucknow','Full-Time','2–6 yrs','Open',
          'Build and deploy ML models for computer vision, NLP and predictive analytics. Work directly with our Managing Director on cutting-edge AI projects.',
          ['Python','PyTorch','TensorFlow','Scikit-learn','OpenCV','NLP','FastAPI','AWS/Azure'],
          ['Train and evaluate deep learning models','Computer vision pipeline development','NLP model fine-tuning and deployment','MLOps and model lifecycle management','Research and implement state-of-the-art techniques']
        ],
        ['php','PHP Developer','IT – Development','Lucknow','Full-Time','1–4 yrs','Open',
          'Develop and maintain business ERP modules, customer portals and API integrations. Strong focus on our 30+ vertical-specific ERP product suite.',
          ['PHP','Laravel','MySQL','REST APIs','JavaScript','jQuery','HTML/CSS','Git'],
          ['Build and maintain Laravel-based ERP modules','Database schema design and query optimisation','Third-party API integrations','Bug fixes and performance improvements','Write clean, documented code']
        ],
        ['java','Java Developer','IT – Development','Lucknow','Full-Time','2–5 yrs','Open',
          'Architect and build microservices-based backend systems for enterprise clients. Work with Spring Boot, Kafka and cloud-native technologies.',
          ['Java','Spring Boot','Microservices','Kafka','MySQL','Docker','Kubernetes','REST APIs'],
          ['Design microservices architecture','Develop Spring Boot REST services','Implement messaging with Kafka','Write unit and integration tests','Collaborate on cloud deployment']
        ],
        ['iot','IoT Engineer','IT – IoT','Lucknow','Full-Time','2–5 yrs','Open',
          'Build IoT data ingestion pipelines and embedded firmware for industrial applications including vehicle tracking and smart sensors.',
          ['Python','C/C++','MQTT','Raspberry Pi','GPS/GSM','AWS IoT','Node-RED','SQL'],
          ['Develop IoT device firmware','Build MQTT data ingestion pipelines','Integrate GPS/GSM modules','Real-time data processing and dashboards','Deploy and monitor IoT infrastructure']
        ],
        ['security','Cyber Security Analyst','IT – Security','Lucknow','Full-Time','3–7 yrs','Open',
          'Lead security assessments, pen testing engagements and compliance reviews for ADT\'s clients across banking, healthcare and government sectors.',
          ['Penetration Testing','VAPT','SIEM','OWASP','Network Security','Python','ISO 27001','GDPR'],
          ['Conduct web/network penetration tests','Prepare security assessment reports','Implement SIEM and log monitoring','Client security advisory and training','Draft security policies and compliance docs']
        ],
      ];
      foreach($jobs as $i=>$j): ?>
      <div class="job-card sr d<?= ($i%3)+1 ?>" id="<?= $j[0] ?>">
        <div class="job-header">
          <div>
            <div class="job-title"><?= $j[1] ?></div>
            <div class="job-meta">
              <span class="job-tag tag-dept"><?= $j[2] ?></span>
              <span class="job-tag tag-loc">📍 <?= $j[3] ?></span>
              <span class="job-tag tag-type">⏱ <?= $j[4] ?></span>
              <span class="job-tag tag-exp">🏆 <?= $j[5] ?></span>
            </div>
          </div>
          <span style="background:#ecfdf5;color:#059669;font-size:.72rem;font-weight:700;padding:4px 14px;border-radius:20px;white-space:nowrap;height:fit-content">● <?= $j[6] ?></span>
        </div>
        <p class="job-desc"><?= $j[7] ?></p>
        <div class="job-skills"><?php foreach($j[8] as $sk) echo '<span class="job-skill">'.$sk.'</span>'; ?></div>
        <details style="margin-bottom:1rem">
          <summary style="cursor:pointer;font-size:.85rem;font-weight:700;color:var(--p);list-style:none;display:flex;align-items:center;gap:6px">▶ View Responsibilities</summary>
          <ul style="margin-top:.75rem;padding-left:1.25rem;display:flex;flex-direction:column;gap:.4rem">
            <?php foreach($j[9] as $r) echo '<li style="font-size:.82rem;color:var(--gray);line-height:1.6">'.$r.'</li>'; ?>
          </ul>
        </details>
        <div class="job-footer">
          <span class="job-posted">📅 Posted recently · Lucknow HQ</span>
          <button class="apply-modal-btn" onclick="openApply('<?= $j[1] ?>')">Apply Now →</button>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ HIRING PROCESS ══ -->
<section class="bg-white">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Hiring Process</span>
      <h2 class="sec-title">Simple, <span class="grad-text">Transparent</span> Process</h2>
      <p class="sec-sub">We respect your time. Our hiring process is clear, fast and focused on finding the right mutual fit.</p>
    </div>
    <div class="process-steps sr">
      <?php $proc=[['01','Apply Online','Submit your resume and cover letter via our form.'],['02','Screening Call','15-min call with our HR team to understand your background.'],['03','Technical Round','Skills assessment relevant to the role (1–2 hours).'],['04','Final Interview','Meet the leadership team and discuss your fit.'],['05','Offer & Onboard','Offer letter within 48 hours. Welcome to ADT!']];
      foreach($proc as $p): ?>
      <div class="proc-step sr">
        <div class="proc-num"><?= $p[0] ?></div>
        <h4><?= $p[1] ?></h4>
        <p><?= $p[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ APPLY MODAL ══ -->
<div id="applyModal" style="display:none;position:fixed;inset:0;z-index:9999;background:rgba(6,13,31,.8);backdrop-filter:blur(8px);align-items:center;justify-content:center;padding:2rem">
  <div style="background:#fff;border-radius:24px;padding:2.5rem;max-width:550px;width:100%;position:relative;max-height:90vh;overflow-y:auto;box-shadow:0 40px 100px rgba(0,0,0,.3)">
    <button onclick="closeApply()" style="position:absolute;top:1.25rem;right:1.25rem;background:var(--light);border:none;border-radius:50%;width:36px;height:36px;font-size:1.1rem;cursor:pointer;display:flex;align-items:center;justify-content:center">✕</button>
    <div style="font-family:'Sora',sans-serif;font-size:1.1rem;font-weight:800;color:var(--dark);margin-bottom:.3rem">Apply for <span id="modalJobTitle" class="grad-text"></span></div>
    <div style="font-size:.82rem;color:var(--gray);margin-bottom:1.75rem">AnantaDrishti Technologies · Lucknow, UP</div>
    <form onsubmit="submitApply(event)">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
        <div class="fg"><label>Full Name *</label><input type="text" placeholder="Your full name" required></div>
        <div class="fg"><label>Email *</label><input type="email" placeholder="you@email.com" required></div>
      </div>
      <div class="fg"><label>Phone Number *</label><input type="tel" placeholder="+91 98765 43210" required></div>
      <div class="fg"><label>Years of Experience *</label><select required><option value="">Select...</option><option>0–1 year (Fresher)</option><option>1–3 years</option><option>3–6 years</option><option>6+ years</option></select></div>
      <div class="fg"><label>Current Company (Optional)</label><input type="text" placeholder="Where do you currently work?"></div>
      <div class="fg"><label>LinkedIn / Portfolio URL</label><input type="url" placeholder="https://linkedin.com/in/..."></div>
      <div class="fg"><label>Why do you want to join ADT? *</label><textarea placeholder="Tell us about your motivation and what you'd bring to the team..." style="min-height:100px" required></textarea></div>
      <button type="submit" class="submit-btn" style="width:100%;padding:14px;border-radius:50px;background:var(--grad);color:#fff;border:none;font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:700;cursor:pointer;transition:all .3s">Submit Application →</button>
    </form>
  </div>
</div>

<div class="cta-band">
  <div class="container sr">
    <h2>Don't See Your Role?</h2>
    <p>We're always open to exceptional talent. Send us your CV and let's find the right fit together.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="mailto:info@anantdrishti.com">Send Your CV</a>
      <a class="btn btn-outline-w btn-lg" href="internship.php">View Internship Program</a>
    </div>
  </div>
</div>

<script>
function openApply(title){
  document.getElementById('modalJobTitle').textContent=title;
  document.getElementById('applyModal').style.display='flex';
  document.body.style.overflow='hidden';
}
function closeApply(){
  document.getElementById('applyModal').style.display='none';
  document.body.style.overflow='';
}
function submitApply(e){
  e.preventDefault();
  e.target.querySelector('[type=submit]').textContent='✓ Application Submitted!';
  e.target.querySelector('[type=submit]').style.background='linear-gradient(135deg,#06d6a0,#0ea5e9)';
  setTimeout(closeApply,2500);
}
document.getElementById('applyModal').addEventListener('click',function(e){if(e.target===this)closeApply()});
</script>
<?php include 'includes/footer.php'; ?>
