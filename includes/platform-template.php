<?php
/**
 * Platform Page Template
 * Used by all platform pages
 */
?>
<style>
.plat-hero-icon{width:90px;height:90px;border-radius:24px;display:flex;align-items:center;justify-content:center;font-size:2.8rem;margin:0 auto 1.5rem;position:relative;overflow:hidden}
.module-card{background:#fff;border-radius:16px;padding:1.5rem;border:1px solid rgba(26,86,219,.08);transition:all .3s;display:flex;gap:12px;align-items:flex-start}
.module-card:hover{box-shadow:var(--sh2);transform:translateY(-4px);border-color:rgba(26,86,219,.2)}
.mod-icon{width:42px;height:42px;border-radius:11px;display:flex;align-items:center;justify-content:center;font-size:1.1rem;flex-shrink:0;background:var(--light)}
.mod-title{font-size:.9rem;font-weight:700;color:var(--dark);margin-bottom:.25rem}
.mod-desc{font-size:.78rem;color:var(--gray);line-height:1.6}
.screenshot-card{background:var(--dark);border-radius:20px;overflow:hidden;box-shadow:0 30px 80px rgba(26,86,219,.2)}
.screen-bar{background:linear-gradient(135deg,var(--p),var(--p3));padding:.75rem 1.25rem;display:flex;align-items:center;gap:.5rem}
.screen-dot{width:10px;height:10px;border-radius:50%;background:rgba(255,255,255,.3)}
.screen-body{padding:1.5rem}
.spec-row{display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid rgba(255,255,255,.06)}
.spec-row:last-child{border-bottom:none}
.spec-label{font-size:.82rem;color:rgba(255,255,255,.5)}
.spec-val{font-family:'Sora',sans-serif;font-weight:700;color:#fff;font-size:.9rem}
@media(max-width:900px){.grid-2{grid-template-columns:1fr}}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="<?= $root ?>index.php">Home</a><span>/</span><a href="<?= $root ?>index.php#platforms">Platforms</a><span>/</span><span style="color:#fff"><?= $plat['title'] ?></span></div>
    <div class="plat-hero-icon" style="background:<?= $plat['grad'] ?>"><?= $plat['icon'] ?></div>
    <div class="page-tag"><?= strtoupper($plat['tag']) ?></div>
    <h1><?= $plat['headline'] ?></h1>
    <p><?= $plat['hero_sub'] ?></p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-grad" href="<?= $root ?>contact.php">Request a Demo</a>
      <!-- <a class="btn btn-glass" href="<?= $root ?>contact.php">Get Pricing</a> -->
    </div>
  </div>
</div>

<!-- OVERVIEW -->
<section class="bg-white">
  <div class="container">
    <div class="grid-2">
      <div class="sr left">
        <span class="tag"><?= $plat['title'] ?></span>
        <h2 class="sec-title"><?= $plat['overview_title'] ?></h2>
        <?php foreach($plat['overview_paras'] as $p): ?>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:1.1rem"><?= $p ?></p>
        <?php endforeach; ?>
        <div style="display:flex;gap:1rem;flex-wrap:wrap;margin-top:1.5rem">
          <a class="btn btn-grad" href="<?= $root ?>contact.php">Request Demo →</a>
          <!-- <a class="btn btn-outline" href="<?= $root ?>contact.php">Get Pricing</a> -->
        </div>
      </div>
      <div class="sr right">
        <div class="screenshot-card">
          <div class="screen-bar">
            <div class="screen-dot"></div><div class="screen-dot"></div><div class="screen-dot"></div>
            <span style="color:rgba(255,255,255,.7);font-size:.8rem;margin-left:.5rem"><?= $plat['title'] ?> Dashboard</span>
          </div>
          <div class="screen-body">
            <?php foreach($plat['specs'] as $s): ?>
            <div class="spec-row">
              <span class="spec-label"><?= $s[0] ?></span>
              <span class="spec-val"><?= $s[1] ?></span>
            </div>
            <?php endforeach; ?>
            <div style="margin-top:1.25rem;padding:1rem;background:rgba(6,214,160,.08);border:1px solid rgba(6,214,160,.2);border-radius:12px;display:flex;align-items:center;gap:10px">
              <span style="font-size:1.2rem">✅</span>
              <span style="font-size:.82rem;color:rgba(255,255,255,.7)"><?= $plat['status_msg'] ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MODULES / FEATURES -->
<section class="bg-light">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Features & Modules</span>
      <h2 class="sec-title"><?= $plat['modules_title'] ?></h2>
      <p class="sec-sub"><?= $plat['modules_sub'] ?></p>
    </div>
    <div class="grid-auto sr" style="margin-top:3rem">
      <?php foreach($plat['modules'] as $i=>$m): ?>
      <div class="module-card d<?= ($i%4)+1 ?>">
        <div class="mod-icon"><?= $m[0] ?></div>
        <div><div class="mod-title"><?= $m[1] ?></div><div class="mod-desc"><?= $m[2] ?></div></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- WHO IS IT FOR -->
<section class="bg-dark">
  <div class="container">
    <div class="tc sr">
      <span class="tag" style="color:rgba(6,214,160,.9)">Ideal For</span>
      <h2 class="sec-title" style="color:#fff"><?= $plat['for_title'] ?></h2>
      <p class="sec-sub" style="color:rgba(255,255,255,.5)"><?= $plat['for_sub'] ?></p>
    </div>
    <div class="grid-3 sr" style="margin-top:3rem">
      <?php foreach($plat['for_cards'] as $i=>$fc): ?>
      <div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.07);border-radius:18px;padding:1.75rem;transition:all .3s" class="card-dark d<?= $i+1 ?>">
        <div style="font-size:2.2rem;margin-bottom:.85rem"><?= $fc[0] ?></div>
        <h4 style="font-size:.95rem;font-weight:700;color:#fff;margin-bottom:.45rem"><?= $fc[1] ?></h4>
        <p style="font-size:.82rem;color:rgba(255,255,255,.5);line-height:1.65"><?= $fc[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TECH STACK -->
<!-- <section class="bg-white">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Technology</span>
      <h2 class="sec-title">Built With <span class="grad-text">Modern Technology</span></h2>
    </div>
    <div style="text-align:center;margin-top:2.5rem" class="sr">
      <?php foreach($plat['techs'] as $t): ?>
      <span style="display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid rgba(26,86,219,.12);border-radius:50px;padding:8px 18px;font-size:.82rem;font-weight:600;color:var(--dark);transition:all .3s;margin:.3rem;cursor:default" onmouseover="this.style.borderColor='var(--p)';this.style.color='var(--p)'" onmouseout="this.style.borderColor='rgba(26,86,219,.12)';this.style.color='var(--dark)'"><?= $t ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section> -->

<!-- <div class="cta-band">
  <div class="container sr">
    <h2>See <?= $plat['title'] ?> in Action</h2>
    <p>Request a live demo and discover how <?= $plat['title'] ?> can transform your operations.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="<?= $root ?>contact.php">Book a Free Demo</a>
      <a class="btn btn-outline-w btn-lg" href="<?= $root ?>index.php#platforms">All Platforms</a>
    </div>
  </div>
</div> -->
