<?php
/**
 * Industry Page Template
 * Expects: $ind array, $root
 */
?>
<style>
.ind-hero-icon{width:90px;height:90px;border-radius:24px;display:flex;align-items:center;justify-content:center;font-size:2.8rem;margin:0 auto 1.5rem}
.solution-card{background:#fff;border-radius:18px;padding:1.75rem;border:1px solid rgba(26,86,219,.08);transition:all .3s;position:relative;overflow:hidden;text-decoration:none;display:block}
.solution-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:var(--grad);transform:scaleX(0);transition:transform .3s}
.solution-card:hover{box-shadow:var(--sh);transform:translateY(-5px)}
.solution-card:hover::after{transform:scaleX(1)}
.sol-icon{font-size:1.8rem;margin-bottom:.85rem}
.solution-card h3{font-size:.95rem;font-weight:700;color:var(--dark);margin-bottom:.45rem}
.solution-card p{font-size:.82rem;color:var(--gray);line-height:1.65}
.challenge-item{display:flex;gap:1rem;align-items:flex-start;padding:1.25rem;background:#fff;border-radius:14px;border:1px solid rgba(239,68,68,.12);margin-bottom:.85rem}
.challenge-item:hover{border-color:rgba(239,68,68,.3);box-shadow:0 4px 20px rgba(239,68,68,.08)}
.chall-icon{width:40px;height:40px;border-radius:10px;background:rgba(239,68,68,.08);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0}
.challenge-item h4{font-size:.88rem;font-weight:700;color:var(--dark);margin-bottom:.2rem}
.challenge-item p{font-size:.78rem;color:var(--gray);line-height:1.6}
.adt-solve{display:flex;gap:1rem;align-items:flex-start;padding:1.25rem;background:var(--light);border-radius:14px;border:1px solid rgba(26,86,219,.1);margin-bottom:.85rem}
.solve-icon{width:40px;height:40px;border-radius:10px;background:rgba(26,86,219,.1);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0}
.adt-solve h4{font-size:.88rem;font-weight:700;color:var(--dark);margin-bottom:.2rem}
.adt-solve p{font-size:.78rem;color:var(--gray);line-height:1.6}
.client-result{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:18px;padding:1.75rem;transition:all .3s}
.client-result:hover{background:rgba(255,255,255,.08);transform:translateY(-3px)}
.result-metric{font-family:'Sora',sans-serif;font-size:2rem;font-weight:800;background:var(--grad2);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;margin-bottom:.25rem}
.result-label{font-size:.8rem;color:rgba(255,255,255,.5)}
.result-desc{font-size:.82rem;color:rgba(255,255,255,.6);margin-top:.85rem;line-height:1.65;font-style:italic}
@media(max-width:900px){.grid-2{grid-template-columns:1fr}}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="<?= $root ?>index.php">Home</a><span>/</span><a href="<?= $root ?>index.php#industries">Industries</a><span>/</span><span style="color:#fff"><?= $ind['title'] ?></span></div>
    <div class="ind-hero-icon" style="background:<?= $ind['grad'] ?>"><?= $ind['icon'] ?></div>
    <div class="page-tag">ADT FOR <?= strtoupper($ind['title']) ?></div>
    <h1><?= $ind['headline'] ?></h1>
    <p><?= $ind['hero_sub'] ?></p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-grad" href="<?= $root ?>contact.php">Discuss Your Requirements</a>
      <a class="btn btn-glass" href="<?= $root ?>index.php#services">Our Services</a>
    </div>
  </div>
</div>

<!-- OVERVIEW -->
<section class="bg-white">
  <div class="container">
    <div class="tc sr">
      <span class="tag"><?= $ind['title'] ?> Technology</span>
      <h2 class="sec-title"><?= $ind['overview_title'] ?></h2>
      <p class="sec-sub"><?= $ind['overview_sub'] ?></p>
    </div>
    <div class="grid-auto sr" style="margin-top:3rem">
      <?php foreach($ind['solutions'] as $i=>$s): ?>
      <a class="solution-card d<?= ($i%4)+1 ?>" href="<?= $root ?>contact.php">
        <div class="sol-icon"><?= $s[0] ?></div>
        <h3><?= $s[1] ?></h3>
        <p><?= $s[2] ?></p>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CHALLENGES & HOW ADT SOLVES -->
<section class="bg-light">
  <div class="container">
    <div class="grid-2">
      <div class="sr left">
        <span class="tag">Industry Challenges</span>
        <h2 class="sec-title">Problems We<br><span class="grad-text">Understand</span></h2>
        <?php foreach($ind['challenges'] as $c): ?>
        <div class="challenge-item"><div class="chall-icon">⚠️</div><div><h4><?= $c[0] ?></h4><p><?= $c[1] ?></p></div></div>
        <?php endforeach; ?>
      </div>
      <div class="sr right">
        <span class="tag" style="color:var(--acc)">How ADT Solves Them</span>
        <h2 class="sec-title">Technology<br><span class="grad-text2">That Fixes It</span></h2>
        <?php foreach($ind['solutions_to_challenges'] as $s): ?>
        <div class="adt-solve"><div class="solve-icon">✅</div><div><h4><?= $s[0] ?></h4><p><?= $s[1] ?></p></div></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- RESULTS -->
<section class="bg-dark">
  <div class="container">
    <div class="tc sr">
      <span class="tag" style="color:rgba(6,214,160,.9)">Client Results</span>
      <h2 class="sec-title" style="color:#fff">Real <span class="grad-text2">Outcomes</span> Delivered</h2>
      <p class="sec-sub" style="color:rgba(255,255,255,.5)">Measurable results from <?= $ind['title'] ?> engagements delivered by ADT.</p>
    </div>
    <div class="grid-3 sr" style="margin-top:3rem">
      <?php foreach($ind['results'] as $i=>$r): ?>
      <div class="client-result d<?= $i+1 ?>">
        <div class="result-metric"><?= $r[0] ?></div>
        <div class="result-label"><?= $r[1] ?></div>
        <div class="result-desc"><?= $r[2] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- <div class="cta-band">
  <div class="container sr">
    <h2>Ready to Transform Your <?= $ind['title'] ?> Business?</h2>
    <p>Talk to our specialists and discover how ADT can solve your industry's toughest challenges.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="<?= $root ?>contact.php">Start a Conversation</a>
      <a class="btn btn-outline-w btn-lg" href="<?= $root ?>index.php#industries">All Industries</a>
    </div>
  </div>
</div> -->