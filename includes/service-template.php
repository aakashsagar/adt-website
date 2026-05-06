<?php
/**
 * Service Page Template
 * Variables expected: $svc (array with all service data)
 * $root = '../'
 */
?>
<style>
.svc-hero-icon{width:90px;height:90px;border-radius:24px;display:flex;align-items:center;justify-content:center;font-size:2.8rem;margin:0 auto 1.5rem;position:relative;overflow:hidden}
.svc-hero-icon::after{content:'';position:absolute;inset:0;background:rgba(255,255,255,.12)}
.overview-grid{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center}
.key-point{display:flex;gap:14px;align-items:flex-start;padding:1.25rem 0;border-bottom:1px solid #f1f5f9}
.key-point:last-child{border-bottom:none}
.kp-icon{width:44px;height:44px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.2rem;flex-shrink:0;background:var(--light)}
.kp-title{font-size:.92rem;font-weight:700;color:var(--dark);margin-bottom:.25rem}
.kp-desc{font-size:.83rem;color:var(--gray);line-height:1.65}
.benefit-card{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.07);border-radius:18px;padding:1.75rem;transition:all .3s}
.benefit-card:hover{background:rgba(255,255,255,.07);border-color:rgba(26,86,219,.3);transform:translateY(-4px)}
.benefit-icon{font-size:1.8rem;margin-bottom:.85rem}
.benefit-card h4{font-size:.9rem;font-weight:700;color:#fff;margin-bottom:.4rem}
.benefit-card p{font-size:.82rem;color:rgba(255,255,255,.5);line-height:1.65}
.use-case-card{background:var(--light);border-radius:16px;padding:1.5rem;border-left:4px solid var(--p);transition:all .3s}
.use-case-card:hover{background:#fff;box-shadow:var(--sh2)}
.use-case-card h4{font-size:.9rem;font-weight:700;color:var(--dark);margin-bottom:.4rem}
.use-case-card p{font-size:.82rem;color:var(--gray);line-height:1.65}
.tech-pill{display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid rgba(26,86,219,.12);border-radius:50px;padding:8px 18px;font-size:.82rem;font-weight:600;color:var(--dark);transition:all .3s;margin:.3rem}
.tech-pill:hover{border-color:var(--p);color:var(--p);box-shadow:0 4px 14px rgba(26,86,219,.1)}
.process-card{background:#fff;border-radius:18px;padding:1.5rem;border:1px solid rgba(26,86,219,.08);display:flex;gap:1.1rem;align-items:flex-start;transition:all .3s}
.process-card:hover{box-shadow:var(--sh2);transform:translateX(4px)}
.proc-step-num{width:44px;height:44px;border-radius:50%;background:var(--grad);color:#fff;font-family:'Sora',sans-serif;font-weight:800;font-size:.9rem;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.proc-step-num.acc{background:var(--grad2)}
.process-card h4{font-size:.9rem;font-weight:700;color:var(--dark);margin-bottom:.3rem}
.process-card p{font-size:.82rem;color:var(--gray);line-height:1.65}
@media(max-width:900px){.overview-grid{grid-template-columns:1fr}}
</style>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="<?= $root ?>index.php">Home</a><span>/</span><a href="<?= $root ?>index.php#services">Services</a><span>/</span><span style="color:#fff"><?= $svc['title'] ?></span></div>
    <div class="svc-hero-icon" style="background:<?= $svc['grad'] ?>"><?= $svc['icon'] ?></div>
    <div class="page-tag"><?= strtoupper($svc['tag']) ?></div>
    <h1><?= $svc['headline'] ?></h1>
    <p><?= $svc['hero_sub'] ?></p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-grad" href="<?= $root ?>contact.php">Start a Project</a>
      <a class="btn btn-glass" href="<?= $root ?>about.php">About ADT</a>
    </div>
  </div>
</div>

<!-- ══ OVERVIEW ══ -->
<section class="bg-white">
  <div class="container">
    <div class="overview-grid">
      <div class="sr left">
        <span class="tag"><?= $svc['title'] ?></span>
        <h2 class="sec-title"><?= $svc['overview_title'] ?></h2>
        <?php foreach($svc['overview_paras'] as $p): ?>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:1.1rem"><?= $p ?></p>
        <?php endforeach; ?>
        <a class="btn btn-grad" href="<?= $root ?>contact.php" style="margin-top:1rem">Get a Free Consultation →</a>
      </div>
      <div class="sr right">
        <?php foreach($svc['key_points'] as $kp): ?>
        <div class="key-point">
          <div class="kp-icon"><?= $kp[0] ?></div>
          <div><div class="kp-title"><?= $kp[1] ?></div><div class="kp-desc"><?= $kp[2] ?></div></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ══ BENEFITS ══ -->
<section class="bg-dark">
  <div class="container">
    <div class="tc sr">
      <span class="tag" style="color:rgba(6,214,160,.9)">Why Choose ADT</span>
      <h2 class="sec-title" style="color:#fff"><?= $svc['benefits_title'] ?></h2>
      <p class="sec-sub" style="color:rgba(255,255,255,.5)"><?= $svc['benefits_sub'] ?></p>
    </div>
    <div class="grid-auto sr" style="margin-top:3rem">
      <?php foreach($svc['benefits'] as $i=>$b): ?>
      <div class="benefit-card d<?= ($i%4)+1 ?>">
        <div class="benefit-icon"><?= $b[0] ?></div>
        <h4><?= $b[1] ?></h4>
        <p><?= $b[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ USE CASES ══ -->
<section class="bg-light">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Use Cases</span>
      <h2 class="sec-title">Real-World <span class="grad-text">Applications</span></h2>
      <p class="sec-sub">How businesses across India are using ADT's <?= $svc['title'] ?> services to drive growth.</p>
    </div>
    <div class="grid-auto sr" style="margin-top:3rem">
      <?php foreach($svc['use_cases'] as $i=>$uc): ?>
      <div class="use-case-card d<?= ($i%4)+1 ?>" style="border-left-color:<?= $svc['color'] ?>">
        <h4><?= $uc[0] ?></h4>
        <p><?= $uc[1] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ TECHNOLOGIES ══ -->
<section class="bg-white">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Technologies</span>
      <h2 class="sec-title">Tools &amp; <span class="grad-text">Technologies</span> We Use</h2>
      <p class="sec-sub">Industry-standard technologies chosen for performance, reliability and scalability.</p>
    </div>
    <div style="text-align:center;margin-top:3rem" class="sr">
      <?php foreach($svc['techs'] as $t): ?>
      <span class="tech-pill"><?= $t ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ PROCESS ══ -->
<section class="bg-light">
  <div class="container">
    <div class="grid-2">
      <div class="sr left">
        <span class="tag">Our Process</span>
        <h2 class="sec-title">How We <span class="grad-text">Deliver It</span></h2>
        <p class="sec-sub">A structured, transparent delivery process that keeps you informed at every step.</p>
        <div style="margin-top:2.5rem;display:flex;flex-direction:column;gap:1.1rem">
          <?php foreach($svc['process'] as $i=>$pr): ?>
          <div class="process-card sr d<?= $i+1 ?>">
            <div class="proc-step-num <?= $i%2==1?'acc':'' ?>"><?= str_pad($i+1,2,'0',STR_PAD_LEFT) ?></div>
            <div><h4><?= $pr[0] ?></h4><p><?= $pr[1] ?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="sr right">
        <!-- Service SVG visual -->
        <div style="background:var(--dark);border-radius:24px;padding:2.5rem;position:relative;overflow:hidden">
          <div style="position:absolute;top:-60px;right:-60px;width:250px;height:250px;border-radius:50%;background:radial-gradient(circle,<?= $svc['color'] ?>22,transparent 70%)"></div>
          <div style="font-family:'Sora',sans-serif;font-weight:700;color:#fff;font-size:1rem;margin-bottom:1.5rem;position:relative;z-index:1"><?= $svc['title'] ?> at ADT</div>
          <?php foreach($svc['stats'] as $st): ?>
          <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 0;border-bottom:1px solid rgba(255,255,255,.06);position:relative;z-index:1">
            <div style="font-size:.85rem;color:rgba(255,255,255,.6)"><?= $st[0] ?></div>
            <div style="font-family:'Sora',sans-serif;font-weight:800;color:#fff;font-size:1rem"><?= $st[1] ?></div>
          </div>
          <?php endforeach; ?>
          <a class="btn btn-grad" href="<?= $root ?>contact.php" style="margin-top:1.5rem;width:100%;justify-content:center;position:relative;z-index:1">Discuss Your Project →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<!-- <div class="cta-band">
  <div class="container sr">
    <h2>Ready to Get Started?</h2>
    <p>Talk to our <?= $svc['title'] ?> team today and let's build something extraordinary.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="<?= $root ?>contact.php">Request a Consultation</a>
      <a class="btn btn-outline-w btn-lg" href="<?= $root ?>index.php#services">All Services</a>
    </div>
  </div>
</div> -->