<?php
$root='../';
$page_title='Webinar – AnantaDrishti Technologies';
$page_desc='Live and recorded webinars on AI, ML, Cloud, IoT, Cyber Security and Digital Transformation by AnantaDrishti Technologies experts.';
include '../includes/header.php';
?>
<style>
.webinar-card{background:#fff;border-radius:20px;overflow:hidden;border:1px solid rgba(26,86,219,.08);transition:all .3s}
.webinar-card:hover{box-shadow:var(--sh);transform:translateY(-5px)}
.wc-thumb{height:180px;display:flex;align-items:center;justify-content:center;font-size:4rem;position:relative;overflow:hidden}
.wc-thumb::after{content:'';position:absolute;inset:0;opacity:.08}
.wc-status{position:absolute;top:12px;left:12px;font-size:.7rem;font-weight:700;padding:4px 12px;border-radius:20px;letter-spacing:.5px}
.wc-body{padding:1.5rem}
.wc-meta{display:flex;gap:.75rem;flex-wrap:wrap;margin-bottom:.75rem}
.wc-tag{background:var(--light);color:var(--gray);font-size:.72rem;font-weight:600;padding:3px 10px;border-radius:20px}
.wc-title{font-size:.95rem;font-weight:700;color:var(--dark);margin-bottom:.45rem;line-height:1.4}
.wc-desc{font-size:.82rem;color:var(--gray);line-height:1.65;margin-bottom:1rem}
.wc-speaker{display:flex;align-items:center;gap:10px;padding-top:.85rem;border-top:1px solid #f1f5f9}
.wc-avatar{width:36px;height:36px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.85rem;color:#fff;flex-shrink:0}
.wc-name{font-size:.8rem;font-weight:700;color:var(--dark)}
.wc-role{font-size:.72rem;color:var(--gray)}
.register-btn{display:inline-flex;align-items:center;gap:6px;background:var(--grad);color:#fff;padding:8px 20px;border-radius:50px;font-size:.8rem;font-weight:700;cursor:pointer;border:none;font-family:'DM Sans',sans-serif;transition:all .25s;text-decoration:none;margin-top:.85rem}
.register-btn:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(26,86,219,.3)}
.coming-soon-overlay{background:rgba(255,255,255,.95);border-radius:16px;padding:2.5rem;text-align:center;border:2px dashed rgba(26,86,219,.2)}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span style="color:#fff">Webinar</span></div>
    <div class="page-tag">ADT KNOWLEDGE SERIES</div>
    <h1>Expert <span class="grad-text">Webinars</span> on<br>Technology & Innovation</h1>
    <p>Live and recorded sessions by ADT's experts covering AI, ML, Cloud, IoT, Cyber Security and Digital Transformation — designed for business leaders and IT professionals.</p>
    <a class="btn btn-grad" href="../contact.php">Get Notified for Next Webinar</a>
  </div>
</div>

<section class="bg-light">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Upcoming & Recorded</span>
      <h2 class="sec-title">ADT <span class="grad-text">Webinar Series</span></h2>
      <p class="sec-sub">Stay ahead of the curve with expert-led sessions on the technologies shaping India's digital future.</p>
    </div>

    <!-- Upcoming placeholder -->
    <div class="coming-soon-overlay sr" style="margin-top:3rem">
      <div style="font-size:3rem;margin-bottom:1rem">🎥</div>
      <h3 style="font-family:'Sora',sans-serif;font-size:1.2rem;font-weight:700;color:var(--dark);margin-bottom:.75rem">Webinar Series Launching Soon</h3>
      <p style="font-size:.9rem;color:var(--gray);line-height:1.75;max-width:500px;margin:0 auto 1.5rem">ADT's Webinar Series is being curated with experts from our team. Topics will include AI/ML for Indian businesses, Cloud migration best practices, Cyber Security fundamentals and IoT deployment strategies.</p>
      <div style="display:flex;gap:.75rem;justify-content:center;flex-wrap:wrap;margin-bottom:1.5rem">
        <?php foreach(['AI & Machine Learning','Cloud Services','Cyber Security','IoT Solutions','Digital Transformation','Data Science'] as $t): ?>
        <span style="background:rgba(26,86,219,.08);color:var(--p);font-size:.78rem;font-weight:600;padding:5px 14px;border-radius:20px"><?= $t ?></span>
        <?php endforeach; ?>
      </div>
      <a class="register-btn" href="../contact.php">🔔 Notify Me When Live</a>
    </div>

    <!-- Past webinar previews -->
    <div style="margin-top:4rem">
      <h3 style="font-family:'Sora',sans-serif;font-size:1.1rem;font-weight:700;color:var(--dark);margin-bottom:2rem">Topics from Our Expert Team</h3>
      <div class="grid-auto sr">
        <?php $topics=[
          ['🤖','AI & ML','Practical AI for Indian SMEs — From Hype to Real ROI','How businesses across UP are deploying machine learning to cut costs and increase revenue.','Nishant Chaturvedi','Managing Director'],
          ['🛡️','Security','Cyber Threats in 2025 — What Every Indian Business Must Know','DPDP Act, ransomware trends and the 5 security controls every organisation needs immediately.','Awnish Kumar','Cyber Security Head'],
          ['☁️','Cloud','Azure Migration Playbook for Indian SMEs','Step-by-step guide to migrating your on-premise servers to Azure without disrupting operations.','ADT Cloud Team','Azure Specialists'],
          ['📡','IoT','Building Your First Industrial IoT Solution — A Practical Guide','From sensor selection to cloud dashboard — a complete walkthrough for manufacturing companies.','ADT IoT Team','IoT Engineers'],
          ['⚡','Digital','Digital Transformation Without the Chaos — A Realistic Approach','Why 70% of digital transformation projects fail and what the successful 30% do differently.','Amit Kumar','CEO & Co-Founder'],
          ['📊','Data','Turning Your Business Data into Competitive Advantage','Data Science for non-data scientists — practical analytics approaches any business can implement.','ADT Data Team','Data Scientists'],
        ];
        foreach($topics as $i=>$t): ?>
        <div class="webinar-card sr d<?= ($i%4)+1 ?>">
          <div class="wc-thumb" style="background:linear-gradient(135deg,rgba(26,86,219,.12),rgba(124,58,237,.12))">
            <span style="font-size:4rem"><?= $t[0] ?></span>
            <div class="wc-status" style="background:rgba(245,158,11,.15);color:#d97706">Coming Soon</div>
          </div>
          <div class="wc-body">
            <div class="wc-meta"><span class="wc-tag"><?= $t[1] ?></span><span class="wc-tag">60 mins</span><span class="wc-tag">Free</span></div>
            <div class="wc-title"><?= $t[2] ?></div>
            <div class="wc-desc"><?= $t[3] ?></div>
            <a class="register-btn" href="../contact.php">Register Interest →</a>
            <div class="wc-speaker">
              <div class="wc-avatar" style="background:var(--grad)"><?= substr($t[4],0,2) ?></div>
              <div><div class="wc-name"><?= $t[4] ?></div><div class="wc-role"><?= $t[5] ?> · ADT</div></div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<div class="cta-band">
  <div class="container sr">
    <h2>Want to Speak at an ADT Webinar?</h2>
    <p>We welcome industry experts and technology practitioners to share knowledge with our community.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="../contact.php">Propose a Topic</a>
      <a class="btn btn-outline-w btn-lg" href="seminar.php">View Seminars</a>
    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>