<?php
$root='./';
$page_title='Terms of Use – Anantadrishti Technologies';
$page_desc='Terms of Use for Anantadrishti Technologies website and services.';
include 'includes/header.php';
?>
<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span style="color:#fff">Terms of Use</span></div>
    <div class="page-tag">LEGAL</div>
    <h1>Terms of <span class="grad-text">Use</span></h1>
    <p>Last updated: January 2025. Please read these terms carefully before using our website or services.</p>
  </div>
</div>
<section class="bg-white">
  <div class="container" style="max-width:860px">
    <?php
    $terms=[
      ['Acceptance of Terms','By accessing or using the Anantadrishti Technologies website (www.anantdrishti.com) or any of our services, you agree to be bound by these Terms of Use. If you do not agree with any part of these terms, please do not use our website or services. These terms apply to all visitors, users and clients.'],
      ['Intellectual Property','All content on this website — including text, graphics, logos, icons, images, software and code — is the property of Anantadrishti Technologies Pvt. Ltd. and is protected by applicable intellectual property laws. You may not reproduce, distribute, modify or create derivative works without our explicit written permission. Our company name, logo and product names are trademarks of ADT.'],
      ['Use of the Website','You agree to use this website only for lawful purposes and in a manner that does not infringe the rights of others or restrict their use and enjoyment of the website. Prohibited uses include transmitting harmful or malicious content, attempting to gain unauthorised access to our systems, using automated tools to scrape or extract data, and impersonating ADT or its representatives.'],
      ['Service Engagements','Use of ADT\'s professional services is governed by separate service agreements or statements of work entered into between ADT and the client. These Terms of Use apply to website usage only and do not constitute a service contract. Specific terms for software products, ERP licences and managed services are defined in individual client agreements.'],
      ['Disclaimer of Warranties','This website and its content are provided "as is" without warranties of any kind, express or implied. ADT makes no representations about the accuracy, completeness or suitability of any information on the website. We do not warrant that the website will be uninterrupted, error-free or free of viruses. Use of the website is at your own risk.'],
      ['Limitation of Liability','To the maximum extent permitted by applicable law, ADT shall not be liable for any indirect, incidental, special, consequential or punitive damages arising from your use of or inability to use this website or its content. Our total liability for any claim arising from these terms shall not exceed INR 10,000.'],
      ['Third-Party Links','Our website may contain links to third-party websites. These links are provided for convenience only. ADT has no control over the content of those sites and accepts no responsibility for them or for any loss or damage that may arise from your use of them. Inclusion of any link does not imply endorsement by ADT.'],
      ['Governing Law','These Terms of Use are governed by and construed in accordance with the laws of India, with jurisdiction in the courts of Lucknow, Uttar Pradesh. Any disputes arising from these terms shall be subject to the exclusive jurisdiction of competent courts in Lucknow.'],
      ['Changes to Terms','ADT reserves the right to modify these Terms of Use at any time. Changes take effect immediately upon posting to the website. Your continued use of the website after changes are posted constitutes your acceptance of the revised terms.'],
      ['Contact','If you have questions about these Terms of Use, contact us at: Anantadrishti Technologies Pvt. Ltd., 8/1 Dwarikapuri Colony, Ishwar Puri, Indira Nagar, Lucknow – 226016. Email: info@anantdrishti.com'],
    ];
    foreach($terms as $i=>$t): ?>
    <div style="margin-bottom:2.5rem;<?= $i>0?'padding-top:2rem;border-top:1px solid #f1f5f9':'' ?>">
      <h2 style="font-family:'Sora',sans-serif;font-size:1.05rem;font-weight:800;color:var(--dark);margin-bottom:.75rem;display:flex;align-items:center;gap:10px">
        <span style="width:28px;height:28px;border-radius:8px;background:var(--grad);display:inline-flex;align-items:center;justify-content:center;font-size:.72rem;font-weight:800;color:#fff;flex-shrink:0"><?= $i+1 ?></span>
        <?= $t[0] ?>
      </h2>
      <p style="font-size:.92rem;color:var(--gray);line-height:1.85"><?= $t[1] ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<div class="cta-band">
  <div class="container sr">
    <h2>Need Clarification?</h2>
    <div class="cta-btns"><a class="btn btn-white btn-lg" href="contact.php">Contact Us</a></div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
