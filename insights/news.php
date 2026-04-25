<?php
$root='../';
$page_title='News & Announcements – AnantaDrishti Technologies';
$page_desc='Latest news, product launches, partnerships and company announcements from AnantaDrishti Technologies.';
include '../includes/header.php';
?>
<style>
.news-card{background:#fff;border-radius:20px;border:1px solid rgba(26,86,219,.08);overflow:hidden;transition:all .3s;display:flex;flex-direction:column}
.news-card:hover{box-shadow:var(--sh);transform:translateY(-5px)}
.news-cat{font-size:.7rem;font-weight:700;padding:4px 12px;border-radius:20px;display:inline-block;margin-bottom:.6rem}
.news-title{font-size:.98rem;font-weight:700;color:var(--dark);line-height:1.4;margin-bottom:.5rem}
.news-excerpt{font-size:.82rem;color:var(--gray);line-height:1.7;flex:1}
.news-meta{font-size:.72rem;color:var(--gray);margin-top:.85rem;padding-top:.75rem;border-top:1px solid #f1f5f9;display:flex;justify-content:space-between;align-items:center}
.news-icon{height:160px;display:flex;align-items:center;justify-content:center;font-size:4rem}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span style="color:#fff">News & Announcements</span></div>
    <div class="page-tag">ADT NEWSROOM</div>
    <h1>Latest <span class="grad-text">News &</span><br><span class="grad-text2">Announcements</span></h1>
    <p>Stay up to date with the latest developments, product launches, partnerships and milestones from AnantaDrishti Technologies.</p>
  </div>
</div>

<section class="bg-light">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Newsroom</span>
      <h2 class="sec-title">What's New at <span class="grad-text">ADT</span></h2>
    </div>
    <!-- Featured announcement -->
    <div style="background:var(--dark);border-radius:24px;padding:3rem;margin-top:3rem;display:grid;grid-template-columns:1fr auto;gap:2rem;align-items:center;overflow:hidden;position:relative" class="sr">
      <div style="position:absolute;top:-60px;right:-60px;width:250px;height:250px;border-radius:50%;background:radial-gradient(circle,rgba(26,86,219,.2),transparent 70%)"></div>
      <div style="position:relative;z-index:1">
        <div style="display:inline-flex;align-items:center;gap:6px;background:rgba(6,214,160,.15);color:var(--acc);font-size:.72rem;font-weight:700;padding:4px 14px;border-radius:20px;margin-bottom:1rem">🎉 MILESTONE</div>
        <h3 style="font-family:'Sora',sans-serif;font-size:1.5rem;font-weight:800;color:#fff;margin-bottom:.75rem">AnantaDrishti Celebrates 10 Years of Technology Innovation in Lucknow</h3>
        <p style="font-size:.9rem;color:rgba(255,255,255,.6);line-height:1.75;margin-bottom:1.5rem">Founded in 2014 with a vision to bridge technology gaps for Indian businesses, AnantaDrishti Technologies has grown into a full-service IT solutions company serving 500+ clients across Uttar Pradesh and beyond. We celebrate a decade of building software, AI systems, IoT platforms and ERP solutions that have transformed businesses across India.</p>
        <a class="btn btn-grad" href="../about.php">Read Our Story →</a>
      </div>
      <div style="font-size:6rem;position:relative;z-index:1">🎊</div>
    </div>

    <div class="grid-3 sr" style="margin-top:3rem">
      <?php $news=[
        ['🚀','Company','ADT Launches SMS-ML v3.0 with Advanced AI Features','The latest version of our Smart Management System adds ML-powered demand forecasting, WhatsApp analytics delivery and support for 5 new industry verticals.','Product Launch'],
        ['🤝','Partnership','ADT Becomes Microsoft Azure Training Partner','AnantaDrishti Technologies has been recognised as a Microsoft Azure training and implementation partner, enabling us to deliver certified Azure training programmes in UP.','Partnership'],
        ['🏆','Award','ADT Team Completes 500th Software Project','A milestone for the ADT engineering team — 500 software projects delivered since 2014, spanning ERP, AI, IoT, web and mobile development.','Milestone'],
        ['🛡️','Security','ADT Expands Cyber Security Practice with VAPT Services','Following growing demand from NBFC and healthcare clients, ADT has expanded its cyber security practice with comprehensive VAPT and compliance advisory services.','Service Launch'],
        ['🎓','Training','ADT Training Division Launches Structured Internship Program','ADT has formalised its internship programme with structured 3–6 month tracks in Software Development, AI/ML, IoT, Cloud and Cyber Security.','Program Launch'],
        ['📱','Product','Vehicle Tracking System (VTS) Now Supports 4G/LTE Devices','ADT\'s proprietary VTS platform has been upgraded to support 4G/LTE GPS devices, delivering faster location updates and improved accuracy for fleet operators.','Product Update'],
      ];
      foreach($news as $i=>$n): ?>
      <div class="news-card sr d<?= ($i%4)+1 ?>">
        <div class="news-icon" style="background:linear-gradient(135deg,rgba(26,86,219,.06),rgba(124,58,237,.06))"><?= $n[0] ?></div>
        <div style="padding:1.5rem;display:flex;flex-direction:column;flex:1">
          <span class="news-cat" style="background:rgba(26,86,219,.08);color:var(--p)"><?= $n[1] ?></span>
          <div class="news-title"><?= $n[2] ?></div>
          <div class="news-excerpt"><?= $n[3] ?></div>
          <div class="news-meta"><span><?= $n[4] ?></span><span>ADT Newsroom</span></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="cta-band">
  <div class="container sr">
    <h2>Want to Feature ADT in Your Publication?</h2>
    <p>For press enquiries, media coverage and partnership announcements, get in touch with our team.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="../contact.php">Media Enquiries</a>
      <a class="btn btn-outline-w btn-lg" href="events.php">Upcoming Events</a>
    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>