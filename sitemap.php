<?php
$root='./';
$page_title='Sitemap – AnantaDrishti Technologies';
include 'includes/header.php';
?>
<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span style="color:#fff">Sitemap</span></div>
    <div class="page-tag">ALL PAGES</div>
    <h1>Site <span class="grad-text">Map</span></h1>
    <p>A complete list of all pages on the AnantaDrishti Technologies website.</p>
  </div>
</div>
<section class="bg-light">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:2rem">
      <?php
      $sitemap=[
        ['🏠 Main Pages','var(--grad)',[
          ['Home','index.php'],['About Us','about.php'],
          ['Careers','careers.php'],['Internship Program','internship.php'],
          ['Contact Us','contact.php'],['Privacy Policy','privacy.php'],['Terms of Use','terms.php'],
        ]],
        ['⚙️ Services','linear-gradient(135deg,#1a56db,#3b82f6)',[
          ['Technology Consulting','services/technology-consulting.php'],
          ['Software Development','services/software-development.php'],
          ['IoT Solutions','services/iot.php'],
          ['AI & Machine Learning','services/ai-ml.php'],
          ['Cyber Security','services/cyber-security.php'],
          ['Cloud Services','services/cloud.php'],
          ['Data Science & Analytics','services/data-science.php'],
          ['Digital Transformation','services/digital-transformation.php'],
          ['Digital Integration','services/digital-integration.php'],
        ]],
        ['📦 Platforms','linear-gradient(135deg,#06d6a0,#0ea5e9)',[
          ['Vehicle Tracking System','platforms/vts.php'],
          ['Smart Management System','platforms/sms.php'],
          ['MS Azure Integration','platforms/azure.php'],
          ['ERP Solutions','platforms/erp.php'],
          ['Business ERP Suite','platforms/business-erp.php'],
        ]],
        ['🏭 Industries','linear-gradient(135deg,#f59e0b,#ef4444)',[
          ['Education','industries/education.php'],
          ['Health Care','industries/healthcare.php'],
          ['Retail & E-Commerce','industries/retail-ecommerce.php'],
          ['Real Estate','industries/real-estate.php'],
          ['Food & Beverage','industries/food-beverage.php'],
          ['Security','industries/security.php'],
        ]],
        ['💡 Insights','linear-gradient(135deg,#7c3aed,#1a56db)',[
          ['Webinar','insights/webinar.php'],
          ['Seminar Registration','insights/seminar.php'],
          ['News & Announcements','insights/news.php'],
          ['Events','insights/events.php'],
          ['Brochures','insights/brochures.php'],
          ['Blogs','insights/blogs.php'],
        ]],
      ];
      foreach($sitemap as $section): ?>
      <div style="background:#fff;border-radius:20px;padding:1.75rem;border:1px solid rgba(26,86,219,.07);box-shadow:var(--sh2)" class="sr">
        <div style="font-family:'Sora',sans-serif;font-weight:700;font-size:.88rem;color:#fff;background:<?= $section[1] ?>;padding:10px 16px;border-radius:10px;margin-bottom:1.25rem"><?= $section[0] ?></div>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:.5rem">
          <?php foreach($section[2] as $page): ?>
          <li><a href="<?= $page[1] ?>" style="display:flex;align-items:center;gap:8px;color:var(--gray);font-size:.85rem;text-decoration:none;padding:5px 0;transition:color .2s" onmouseover="this.style.color='var(--p)'" onmouseout="this.style.color='var(--gray)'">
            <svg viewBox="0 0 6 6" width="6" height="6" fill="var(--p)" style="flex-shrink:0"><circle cx="3" cy="3" r="3"/></svg>
            <?= $page[0] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
