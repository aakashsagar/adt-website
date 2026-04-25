<?php
$root='../';
$page_title='Brochures – AnantaDrishti Technologies';
$page_desc='Download detailed product and service brochures from AnantaDrishti Technologies — PDF downloads for VTS, ERP, SMS-ML, AI/ML and more.';
include '../includes/header.php';
?>
<style>
.brochure-card{background:#fff;border-radius:20px;border:1px solid rgba(26,86,219,.08);overflow:hidden;transition:all .3s;position:relative}
.brochure-card:hover{box-shadow:var(--sh);transform:translateY(-5px)}
.brochure-cover{height:200px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.brochure-cover::after{content:'';position:absolute;inset:0;background:rgba(0,0,0,.05)}
.brochure-pages{position:absolute;bottom:12px;right:12px;background:rgba(0,0,0,.4);backdrop-filter:blur(8px);color:#fff;font-size:.68rem;font-weight:700;padding:3px 10px;border-radius:20px}
.brochure-icon{font-size:5rem;position:relative;z-index:1}
.brochure-body{padding:1.5rem}
.brochure-category{font-size:.7rem;font-weight:700;color:var(--p);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:.5rem}
.brochure-title{font-size:.95rem;font-weight:800;color:var(--dark);margin-bottom:.45rem;line-height:1.35}
.brochure-desc{font-size:.8rem;color:var(--gray);line-height:1.65;margin-bottom:1rem}
.brochure-tags{display:flex;flex-wrap:wrap;gap:5px;margin-bottom:1.1rem}
.brochure-tag{background:var(--light);color:var(--gray);font-size:.68rem;font-weight:600;padding:2px 9px;border-radius:20px}
.download-btn{display:flex;align-items:center;justify-content:center;gap:7px;width:100%;padding:10px;border-radius:50px;background:var(--grad);color:#fff;border:none;font-family:'DM Sans',sans-serif;font-size:.85rem;font-weight:700;cursor:pointer;transition:all .3s}
.download-btn:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(26,86,219,.35)}
.request-btn{display:flex;align-items:center;justify-content:center;gap:7px;width:100%;padding:10px;border-radius:50px;background:transparent;color:var(--p);border:2px solid rgba(26,86,219,.2);font-family:'DM Sans',sans-serif;font-size:.85rem;font-weight:700;cursor:pointer;transition:all .3s;margin-top:.6rem}
.request-btn:hover{background:rgba(26,86,219,.06);border-color:var(--p)}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span style="color:#fff">Brochures</span></div>
    <div class="page-tag">ADT RESOURCES</div>
    <h1>Product &amp; Service<br><span class="grad-text">Brochures</span></h1>
    <p>Download detailed PDF brochures covering ADT's services, platforms and industry solutions. Share with your team or management to kickstart your technology conversation.</p>
  </div>
</div>

<section class="bg-light">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Downloads</span>
      <h2 class="sec-title">ADT <span class="grad-text">Resource Library</span></h2>
      <p class="sec-sub">Detailed brochures for every ADT product and service. Fill in the form to request a PDF copy delivered to your inbox.</p>
    </div>

    <!-- Company Overview -->
    <div style="margin-top:3rem">
      <h3 style="font-family:'Sora',sans-serif;font-size:.9rem;font-weight:700;color:var(--gray);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:1.5rem;padding-bottom:.75rem;border-bottom:2px solid rgba(26,86,219,.1)">🏢 Company Overview</h3>
      <div class="grid-auto sr">
        <div class="brochure-card">
          <div class="brochure-cover" style="background:var(--grad)">
            <span class="brochure-icon">📘</span>
            <span class="brochure-pages">12 Pages · PDF</span>
          </div>
          <div class="brochure-body">
            <div class="brochure-category">Company</div>
            <div class="brochure-title">AnantaDrishti Corporate Overview 2025</div>
            <div class="brochure-desc">Complete company overview — history, leadership, services, platforms, client portfolio and contact details. Ideal for procurement and vendor evaluation.</div>
            <div class="brochure-tags"><span class="brochure-tag">Company Profile</span><span class="brochure-tag">All Services</span><span class="brochure-tag">Leadership</span></div>
            <button class="download-btn" onclick="requestBrochure('Corporate Overview 2025')">📥 Request PDF</button>
          </div>
        </div>
        <div class="brochure-card">
          <div class="brochure-cover" style="background:linear-gradient(135deg,#0d1b3e,#1a56db)">
            <span class="brochure-icon">🎯</span>
            <span class="brochure-pages">8 Pages · PDF</span>
          </div>
          <div class="brochure-body">
            <div class="brochure-category">Capabilities</div>
            <div class="brochure-title">ADT Technology Capabilities Deck</div>
            <div class="brochure-desc">A concise capabilities document covering all 9 service lines, technology expertise, delivery methodology and key differentiators. Great for initial meetings.</div>
            <div class="brochure-tags"><span class="brochure-tag">Capabilities</span><span class="brochure-tag">Technology</span><span class="brochure-tag">Methodology</span></div>
            <button class="download-btn" onclick="requestBrochure('Technology Capabilities Deck')">📥 Request PDF</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Services -->
    <div style="margin-top:3rem">
      <h3 style="font-family:'Sora',sans-serif;font-size:.9rem;font-weight:700;color:var(--gray);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:1.5rem;padding-bottom:.75rem;border-bottom:2px solid rgba(26,86,219,.1)">⚙️ Service Brochures</h3>
      <div class="grid-auto sr">
        <?php $svcBrochures=[
          ['💡','linear-gradient(135deg,#1a56db,#3b82f6)','Technology Consulting','Technology Consulting Services Brochure','6 Pages · PDF','Consulting methodology, engagement models, advisory scope and case study summaries.','Consulting','Strategy','Advisory'],
          ['💻','linear-gradient(135deg,#7c3aed,#a855f7)','Software Dev','Software Development Services Brochure','8 Pages · PDF','Full-stack capabilities, technology stack, agile methodology and project portfolio highlights.','Full-Stack','Agile','Web & Mobile'],
          ['🤖','linear-gradient(135deg,#7c3aed,#06d6a0)','AI & ML','AI & Machine Learning Brochure','10 Pages · PDF','AI/ML capabilities, use cases, model types, deployment options and ROI examples.','AI','ML','NLP','Computer Vision'],
          ['🛡️','linear-gradient(135deg,#ef4444,#dc2626)','Cyber Security','Cyber Security Services Brochure','8 Pages · PDF','VAPT scope, compliance frameworks, SIEM services and security engagement process.','VAPT','Compliance','SIEM'],
          ['☁️','linear-gradient(135deg,#1a56db,#7c3aed)','Cloud Services','Cloud Services Brochure','8 Pages · PDF','Azure, AWS, GCP capabilities, migration methodology and managed services scope.','Azure','AWS','GCP'],
          ['📊','linear-gradient(135deg,#0ea5e9,#7c3aed)','Data Science','Data Science & Analytics Brochure','8 Pages · PDF','Data platform architecture, BI tools, analytics use cases and data engineering capabilities.','Big Data','BI','Analytics'],
          ['📡','linear-gradient(135deg,#06d6a0,#0ea5e9)','IoT','IoT Solutions Brochure','6 Pages · PDF','IoT architecture, hardware platforms, protocol expertise and VTS product overview.','IoT','GPS','MQTT'],
          ['⚡','linear-gradient(135deg,#f59e0b,#ef4444)','Digital Transform','Digital Transformation Brochure','8 Pages · PDF','Transformation framework, methodology, case studies and ROI benchmarks.','Transformation','Automation','Change Mgmt'],
          ['🔗','linear-gradient(135deg,#0ea5e9,#06d6a0)','Integration','Digital Integration Brochure','6 Pages · PDF','Integration architecture, API management, supported connectors and middleware platforms.','API','Middleware','ESB'],
        ];
        foreach($svcBrochures as $i=>$b): ?>
        <div class="brochure-card sr d<?= ($i%4)+1 ?>">
          <div class="brochure-cover" style="background:<?= $b[1] ?>">
            <span class="brochure-icon"><?= $b[0] ?></span>
            <span class="brochure-pages"><?= $b[5] ?></span>
          </div>
          <div class="brochure-body">
            <div class="brochure-category"><?= $b[2] ?></div>
            <div class="brochure-title"><?= $b[3] ?></div>
            <div class="brochure-desc"><?= $b[6] ?></div>
            <div class="brochure-tags"><?php for($j=7;$j<10&&isset($b[$j]);$j++) echo '<span class="brochure-tag">'.$b[$j].'</span>'; ?></div>
            <button class="download-btn" onclick="requestBrochure('<?= $b[3] ?>')">📥 Request PDF</button>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Platforms -->
    <div style="margin-top:3rem">
      <h3 style="font-family:'Sora',sans-serif;font-size:.9rem;font-weight:700;color:var(--gray);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:1.5rem;padding-bottom:.75rem;border-bottom:2px solid rgba(26,86,219,.1)">📦 Platform Brochures</h3>
      <div class="grid-auto sr">
        <?php $platBrochures=[
          ['🚗','linear-gradient(135deg,#1a56db,#06d6a0)','VTS Platform','Vehicle Tracking System (VTS) Brochure','6 Pages · PDF','VTS features, hardware specs, dashboard screenshots, pricing and deployment options.'],
          ['🏥','linear-gradient(135deg,#06d6a0,#0ea5e9)','SMS-ML','Smart Management System (SMS-ML) Brochure','10 Pages · PDF','All 12 industry modules, ML features, screenshots, pricing plans and implementation timeline.'],
          ['☁️','linear-gradient(135deg,#0078d4,#0ea5e9)','Azure','MS Azure Integration Services Brochure','6 Pages · PDF','Azure service catalogue, implementation approach, managed services scope and pricing structure.'],
          ['📦','linear-gradient(135deg,#f59e0b,#ef4444)','ERP Suite','Business ERP Suite — 30+ Verticals Brochure','12 Pages · PDF','All 30+ vertical modules with feature lists, screenshots, pricing and implementation timeline.'],
        ];
        foreach($platBrochures as $i=>$b): ?>
        <div class="brochure-card sr d<?= $i+1 ?>">
          <div class="brochure-cover" style="background:<?= $b[1] ?>">
            <span class="brochure-icon"><?= $b[0] ?></span>
            <span class="brochure-pages"><?= $b[4] ?></span>
          </div>
          <div class="brochure-body">
            <div class="brochure-category"><?= $b[2] ?></div>
            <div class="brochure-title"><?= $b[3] ?></div>
            <div class="brochure-desc"><?= $b[5] ?></div>
            <button class="download-btn" onclick="requestBrochure('<?= $b[3] ?>')">📥 Request PDF</button>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- REQUEST MODAL -->
<div id="brochureModal" style="display:none;position:fixed;inset:0;z-index:9999;background:rgba(6,13,31,.8);backdrop-filter:blur(8px);align-items:center;justify-content:center;padding:2rem">
  <div style="background:#fff;border-radius:24px;padding:2.5rem;max-width:460px;width:100%;position:relative;box-shadow:0 40px 100px rgba(0,0,0,.3)">
    <button onclick="closeModal()" style="position:absolute;top:1.25rem;right:1.25rem;background:var(--light);border:none;border-radius:50%;width:36px;height:36px;font-size:1.1rem;cursor:pointer">✕</button>
    <div style="font-size:2.5rem;margin-bottom:.75rem">📥</div>
    <div style="font-family:'Sora',sans-serif;font-size:1.1rem;font-weight:800;color:var(--dark);margin-bottom:.25rem">Request Brochure</div>
    <div id="modalBrochureName" style="font-size:.82rem;color:var(--p);font-weight:600;margin-bottom:1.5rem"></div>
    <form onsubmit="submitBrochure(event)">
      <div class="fg"><label>Full Name *</label><input type="text" placeholder="Your name" required></div>
      <div class="fg"><label>Work Email *</label><input type="email" placeholder="you@company.com" required></div>
      <div class="fg"><label>Phone / WhatsApp</label><input type="tel" placeholder="+91 98765 43210"></div>
      <div class="fg"><label>Company</label><input type="text" placeholder="Your organisation"></div>
      <button type="submit" id="brochureSubmitBtn" style="width:100%;padding:13px;border-radius:50px;background:var(--grad);color:#fff;border:none;font-family:'DM Sans',sans-serif;font-size:.95rem;font-weight:700;cursor:pointer;transition:all .3s">Send Me the PDF →</button>
    </form>
    <p style="font-size:.72rem;color:var(--gray);margin-top:.85rem;text-align:center">We'll send the PDF to your email within 1 business day.</p>
  </div>
</div>

<div class="cta-band">
  <div class="container sr">
    <h2>Need a Custom Presentation?</h2>
    <p>We can prepare a tailored presentation deck specific to your industry, requirements and business size.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="../contact.php">Request Custom Deck</a>
      <a class="btn btn-outline-w btn-lg" href="blogs.php">Read Our Blogs</a>
    </div>
  </div>
</div>

<script>
function requestBrochure(name){
  document.getElementById('modalBrochureName').textContent=name;
  document.getElementById('brochureModal').style.display='flex';
  document.body.style.overflow='hidden';
}
function closeModal(){
  document.getElementById('brochureModal').style.display='none';
  document.body.style.overflow='';
}
function submitBrochure(e){
  e.preventDefault();
  document.getElementById('brochureSubmitBtn').textContent='✓ Request Received! Check your email.';
  document.getElementById('brochureSubmitBtn').style.background='linear-gradient(135deg,#06d6a0,#0ea5e9)';
  setTimeout(closeModal,3000);
}
document.getElementById('brochureModal').addEventListener('click',function(e){if(e.target===this)closeModal()});
</script>
<?php include '../includes/footer.php'; ?>
