<?php
$root='./';
$page_title='Privacy Policy – AnantaDrishti Technologies';
$page_desc='Privacy Policy of AnantaDrishti Technologies Pvt. Ltd. — how we collect, use and protect your personal data.';
include 'includes/header.php';
?>
<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span style="color:#fff">Privacy Policy</span></div>
    <div class="page-tag">LEGAL · DATA PROTECTION</div>
    <h1>Privacy <span class="grad-text">Policy</span></h1>
    <p>Last updated: January 2025. How AnantaDrishti Technologies collects, uses and protects your information.</p>
  </div>
</div>
<section class="bg-white">
  <div class="container" style="max-width:860px">
    <?php
    $sections=[
      ['Who We Are','AnantaDrishti Technologies Private Limited ("ADT", "we", "us", "our") is a technology solutions company incorporated in India, with its registered office at 8/1, Dwarikapuri Colony, Ishwar Puri, Indira Nagar, Lucknow – 226016, Uttar Pradesh, India. This Privacy Policy explains how we collect, use, share and protect personal information when you use our website (www.anantdrishti.com), contact us, use our services or engage with our products.'],
      ['Information We Collect','We collect information you provide directly (name, email, phone number, company details, messages submitted via contact or registration forms), information collected automatically when you visit our website (IP address, browser type, pages visited, time spent, referring URLs via cookies and analytics tools), and business information shared during service engagements (project requirements, technical details, business data necessary to deliver our services).'],
      ['How We Use Your Information','We use your information to respond to enquiries and provide requested services, send confirmations and updates about events, seminars and webinars you register for, improve our website and services, send relevant communications about our services (you may opt out at any time), comply with legal obligations, and prevent fraud and ensure security.'],
      ['Data Sharing','We do not sell your personal data to third parties. We may share information with trusted service providers who assist us in operating our website and delivering services (subject to confidentiality obligations), when required by law or regulatory authority, or with your explicit consent. All third-party service providers are bound by data processing agreements.'],
      ['Data Security','We implement appropriate technical and organisational security measures to protect your personal data against unauthorised access, accidental loss, destruction or disclosure. These include encryption of data in transit (TLS/SSL), access controls, regular security assessments and employee data protection training. However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.'],
      ['Your Rights','Under the Digital Personal Data Protection Act 2023 (DPDP Act) and applicable Indian law, you have the right to access personal data we hold about you, correct inaccurate personal data, request erasure of your personal data (subject to legal obligations), withdraw consent for data processing, and lodge a complaint with the Data Protection Board of India. To exercise these rights, contact us at info@anantdrishti.com.'],
      ['Cookies','Our website uses cookies to enhance your browsing experience, analyse website traffic and remember your preferences. You can control cookie settings through your browser. Disabling cookies may affect some website functionality. We use Google Analytics and similar tools to understand how visitors use our website; this data is anonymised and aggregated.'],
      ['Children\'s Privacy','Our services are not directed at individuals under the age of 18. We do not knowingly collect personal data from minors. If you believe we have inadvertently collected information from a minor, please contact us and we will promptly delete it.'],
      ['Changes to This Policy','We may update this Privacy Policy from time to time. We will notify you of significant changes by posting a notice on our website or contacting you directly. The date at the top of this policy indicates when it was last updated. Continued use of our services after changes take effect constitutes acceptance of the updated policy.'],
      ['Contact Us','For privacy-related enquiries, data subject requests or complaints, contact: Privacy Officer, AnantaDrishti Technologies Pvt. Ltd., 8/1 Dwarikapuri Colony, Ishwar Puri, Indira Nagar, Lucknow – 226016, UP, India. Email: info@anantdrishti.com. Phone: 0522-4056487.'],
    ];
    foreach($sections as $i=>$s): ?>
    <div style="margin-bottom:2.5rem;<?= $i>0?'padding-top:2rem;border-top:1px solid #f1f5f9':'' ?>">
      <h2 style="font-family:'Sora',sans-serif;font-size:1.05rem;font-weight:800;color:var(--dark);margin-bottom:.75rem;display:flex;align-items:center;gap:10px">
        <span style="width:28px;height:28px;border-radius:8px;background:var(--grad);display:inline-flex;align-items:center;justify-content:center;font-size:.72rem;font-weight:800;color:#fff;flex-shrink:0"><?= $i+1 ?></span>
        <?= $s[0] ?>
      </h2>
      <p style="font-size:.92rem;color:var(--gray);line-height:1.85"><?= $s[1] ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<div class="cta-band">
  <div class="container sr">
    <h2>Questions About Our Privacy Practices?</h2>
    <div class="cta-btns"><a class="btn btn-white btn-lg" href="contact.php">Contact Our Team</a></div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
