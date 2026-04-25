<?php
$page_title = 'Internship Program – AnantaDrishti Technologies';
$page_desc = 'Join ADT\'s structured internship program. Learn AI, ML, software development, IoT and more from industry veterans with 15+ years experience.';
include 'includes/header.php';
?>
<style>
.intern-track{background:#fff;border-radius:20px;padding:2rem;border:1px solid rgba(26,86,219,.08);transition:all .3s;position:relative;overflow:hidden}
.intern-track::after{content:'';position:absolute;top:0;left:0;right:0;height:3px;border-radius:3px 3px 0 0}
.intern-track:hover{box-shadow:var(--sh);transform:translateY(-5px)}
.track-icon{width:60px;height:60px;border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:1.6rem;margin-bottom:1.25rem}
.track-dur{display:inline-flex;align-items:center;gap:5px;background:var(--light);color:var(--gray);font-size:.73rem;font-weight:700;padding:3px 12px;border-radius:20px;margin-bottom:.85rem}
.intern-track h3{font-size:1rem;font-weight:800;color:var(--dark);margin-bottom:.6rem}
.intern-track p{font-size:.85rem;color:var(--gray);line-height:1.7;margin-bottom:1rem}
.week-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;margin-top:3rem}
.week-card{background:var(--dark);border-radius:16px;padding:1.5rem;border:1px solid rgba(255,255,255,.07)}
.week-label{font-size:.72rem;font-weight:700;color:var(--acc);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:.5rem}
.week-card h4{font-size:.9rem;font-weight:700;color:#fff;margin-bottom:.5rem}
.week-card ul{list-style:none;display:flex;flex-direction:column;gap:.4rem}
.week-card li{font-size:.78rem;color:rgba(255,255,255,.5);padding-left:1rem;position:relative}
.week-card li::before{content:'→';position:absolute;left:0;color:var(--acc)}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><a href="careers.php">Careers</a><span>/</span><span style="color:#fff">Internship</span></div>
    <div class="page-tag">ADT TRAINING DIVISION</div>
    <h1>Internship &<br><span class="grad-text2">Training Program</span></h1>
    <p>Learn from professionals with 15–20 years of real-world experience. Build industry-ready skills in AI, software development, IoT, cloud, and cybersecurity.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-grad" href="#apply">Apply Now</a>
      <a class="btn btn-glass" href="insights/seminar.php">Seminar Registration</a>
    </div>
  </div>
</div>

<!-- ══ OVERVIEW ══ -->
<section class="bg-light">
  <div class="container">
    <div class="grid-2">
      <div class="sr left">
        <span class="tag">About the Program</span>
        <h2 class="sec-title">Learn. Build.<br><span class="grad-text">Launch Your Career.</span></h2>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:1.2rem">ADT's internship program is designed to give fresh graduates and students hands-on exposure to the same technologies and methodologies used by our expert team on live client projects. This isn't just observational — you will build, code, and deploy real solutions.</p>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:2rem">Our structured 3-month to 6-month programs are mentored by professionals with 12–20 years of industry experience. Top performers receive pre-placement offers to join ADT full-time.</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
          <?php $facts=[['🗓️','Duration','3 to 6 months'],['👨‍🏫','Mentors','15–20 yrs exp.'],['💻','Mode','Lucknow Office'],['🏅','Certificate','ADT Certified']];
          foreach($facts as $f): ?>
          <div style="background:#fff;border-radius:14px;padding:1.1rem;border:1px solid rgba(26,86,219,.08);display:flex;gap:10px;align-items:center">
            <div style="font-size:1.4rem"><?= $f[0] ?></div>
            <div><div style="font-size:.75rem;font-weight:700;color:var(--gray);text-transform:uppercase;letter-spacing:.5px"><?= $f[1] ?></div><div style="font-size:.88rem;font-weight:700;color:var(--dark)"><?= $f[2] ?></div></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="sr right">
        <div style="background:var(--dark);border-radius:24px;padding:2.5rem">
          <div style="font-family:'Sora',sans-serif;font-weight:700;color:#fff;margin-bottom:1.5rem;font-size:1rem">What You'll Get</div>
          <?php $gets=[['🎯','Hands-on project work on live ADT client projects'],['🧑‍💻','Dedicated mentor with 12+ years of industry experience'],['📜','ADT-certified completion certificate'],['💼','Pre-placement offer for outstanding performers'],['🎤','Access to ADT seminars and training sessions'],['🌐','Exposure to enterprise-grade tools and platforms'],['📊','Portfolio projects to showcase to future employers'],['🤝','Professional network across ADT\'s client ecosystem']];
          foreach($gets as $g): ?>
          <div style="display:flex;align-items:center;gap:12px;padding:10px 0;border-bottom:1px solid rgba(255,255,255,.05)">
            <span style="font-size:1.1rem"><?= $g[0] ?></span>
            <span style="font-size:.86rem;color:rgba(255,255,255,.7)"><?= $g[1] ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TRACKS ══ -->
<section class="bg-white">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Internship Tracks</span>
      <h2 class="sec-title">Choose Your <span class="grad-text">Learning Path</span></h2>
      <p class="sec-sub">Specialise in the domain that excites you most. All tracks include foundational training before diving deep.</p>
    </div>
    <div class="grid-auto sr" style="margin-top:3rem">
      <?php $tracks=[
        ['💻','#1a56db','Software Development','3–6 months','Build real applications using Python, Django, React and REST APIs. Learn software architecture, testing and deployment.'],
        ['🤖','#7c3aed','AI & Machine Learning','4–6 months','Work with PyTorch, TensorFlow, OpenCV and NLP. Build and deploy machine learning models on real datasets.'],
        ['📡','#06d6a0','IoT & Embedded Systems','3–5 months','Program microcontrollers, build MQTT pipelines, work with GPS/GSM and real-time sensor data processing.'],
        ['☁️','#0ea5e9','Cloud & DevOps','3–5 months','Learn Azure, AWS, Docker, Kubernetes and CI/CD pipelines. Deploy and monitor cloud-native applications.'],
        ['🛡️','#ef4444','Cyber Security','4–6 months','Learn penetration testing, VAPT, network security and security audit reporting under experienced mentors.'],
        ['📊','#f59e0b','Data Science & Analytics','3–5 months','Work with Python, Pandas, SQL and Power BI to extract insights from real business data for ADT clients.'],
      ];
      foreach($tracks as $i=>$t): ?>
      <div class="intern-track sr d<?= ($i%4)+1 ?>" style="border-top:3px solid <?= $t[1] ?>">
        <div class="track-icon" style="background:<?= $t[1] ?>18"><?= $t[0] ?></div>
        <div class="track-dur">⏱ <?= $t[2] ?></div>
        <h3><?= $t[3] ?></h3>
        <p><?= $t[4] ?></p>
        <a class="btn btn-grad btn-sm" href="#apply" style="font-size:.75rem">Apply for This Track →</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ PROGRAM STRUCTURE ══ -->
<section class="bg-dark">
  <div class="container">
    <div class="tc sr">
      <span class="tag" style="color:rgba(6,214,160,.9)">Program Structure</span>
      <h2 class="sec-title" style="color:#fff">What 6 Months <span class="grad-text2">Looks Like</span></h2>
      <p class="sec-sub" style="color:rgba(255,255,255,.5)">A structured, progressive journey from foundational learning to real-world project delivery.</p>
    </div>
    <div class="week-grid sr">
      <?php $weeks=[
        ['Month 1','Foundations & Onboarding',['Development environment setup','Technology stack orientation','Git, Agile and team workflows','Assigned mentor introduction','Complete ADT orientation modules']],
        ['Month 2','Core Skill Building',['Deep dive into chosen track','Hands-on coding exercises','Code review sessions','Mini-project assignment','Weekly mentor check-ins']],
        ['Month 3','Live Project Exposure',['Join live client project team','Implement real features','Bug fixing and testing','Documentation writing','Sprint demos to stakeholders']],
        ['Month 4–5','Independent Delivery',['Own a full module end-to-end','Deploy to staging environment','Security and performance testing','Technical presentation to team','Peer code reviews']],
        ['Month 6','Capstone & Evaluation',['Final capstone project','360° performance review','Certificate presentation','Pre-placement offer review','Alumni network induction']],
      ];
      foreach($weeks as $w): ?>
      <div class="week-card sr">
        <div class="week-label"><?= $w[0] ?></div>
        <h4><?= $w[1] ?></h4>
        <ul><?php foreach($w[2] as $li) echo '<li>'.$li.'</li>'; ?></ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ APPLY FORM ══ -->
<section class="bg-light" id="apply">
  <div class="container" style="max-width:700px">
    <div class="tc sr">
      <span class="tag">Apply Now</span>
      <h2 class="sec-title">Start Your <span class="grad-text">Journey</span></h2>
      <p class="sec-sub">Fill in the form below. We review applications on a rolling basis and respond within 5 business days.</p>
    </div>
    <div style="background:#fff;border-radius:24px;padding:2.5rem;margin-top:2.5rem;box-shadow:var(--sh);border:1px solid rgba(26,86,219,.06)" class="sr">
      <form onsubmit="handleInternApply(event)">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
          <div class="fg"><label>Full Name *</label><input type="text" placeholder="Your full name" required></div>
          <div class="fg"><label>Email Address *</label><input type="email" placeholder="you@email.com" required></div>
        </div>
        <div class="fg"><label>Phone Number *</label><input type="tel" placeholder="+91 98765 43210" required></div>
        <div class="fg"><label>College / University</label><input type="text" placeholder="Your institution name"></div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
          <div class="fg"><label>Degree & Branch</label><input type="text" placeholder="B.Tech Computer Science"></div>
          <div class="fg"><label>Graduation Year</label><select><option value="">Select...</option><option>2025</option><option>2026</option><option>2027</option><option>Already Graduated</option></select></div>
        </div>
        <div class="fg"><label>Preferred Track *</label><select required><option value="">Select an internship track...</option><option>Software Development</option><option>AI & Machine Learning</option><option>IoT & Embedded Systems</option><option>Cloud & DevOps</option><option>Cyber Security</option><option>Data Science & Analytics</option></select></div>
        <div class="fg"><label>Preferred Duration</label><select><option>3 Months</option><option>4 Months</option><option>6 Months</option></select></div>
        <div class="fg"><label>Why do you want to intern at ADT? *</label><textarea placeholder="Tell us about your motivation, skills and what you hope to learn..." required></textarea></div>
        <div class="fg"><label>GitHub / Portfolio URL (Optional)</label><input type="url" placeholder="https://github.com/yourname"></div>
        <button type="submit" style="width:100%;padding:14px;border-radius:50px;background:var(--grad);color:#fff;border:none;font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:700;cursor:pointer;transition:all .3s;margin-top:.5rem" id="internBtn">Submit Application →</button>
      </form>
    </div>
  </div>
</section>

<div class="cta-band">
  <div class="container sr">
    <h2>Questions About the Program?</h2>
    <p>Reach out to our team and we'll help you find the right track for your career goals.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="contact.php">Contact Us</a>
      <a class="btn btn-outline-w btn-lg" href="careers.php">Full-Time Openings</a>
    </div>
  </div>
</div>
<script>
function handleInternApply(e){
  e.preventDefault();
  const btn=document.getElementById('internBtn');
  btn.textContent='✓ Application Submitted! We\'ll be in touch.';
  btn.style.background='linear-gradient(135deg,#06d6a0,#0ea5e9)';
}
</script>
<?php include 'includes/footer.php'; ?>
