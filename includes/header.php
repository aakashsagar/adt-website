<?php
// Usage: include 'includes/header.php';
// Set $page_title, $page_desc, $active_nav before including
$page_title = $page_title ?? 'AnantaDrishti Technologies';
$page_desc = $page_desc ?? 'Future Possibilities with Technology — IT Consulting, AI, IoT, Cloud, Software Development.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($page_title) ?> | Anantadrishti Technologies Pvt Ltd</title>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
<link rel="stylesheet" href="<?= $root ?? '' ?>assets/style.css">
<link rel="shortcut icon" href="<?= $root ?? '' ?>assets/image/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<canvas id="pc"></canvas>

<nav>
  <div class="nav-inner">
    <a class="logo" href="<?= $root ?? '' ?>index.php">
      <div class="logo-icon">
        <!-- <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg> -->
        <img src="<?= $root ?? '' ?>assets/image/logon.png" alt="Logo" />

      </div>
      <span class="logo-text">Anantadrishti</span>
      <!-- <span class="logo-text">Ananta<span>drishti</span></span> -->
    </a>

    <ul class="nav-menu">
      <li class="nav-item">
        <span class="nav-link">Services & Tech <svg viewBox="0 0 10 6"><path d="M1 1l4 4 4-4"/></svg></span>
        <div class="nav-dropdown" style="min-width:260px">
          <a href="<?= $root ?? '' ?>services/technology-consulting.php"><div class="dd-icon" style="background:rgba(26,86,219,.15)">💡</div>Technology Consulting</a>
          <a href="<?= $root ?? '' ?>services/software-development.php"><div class="dd-icon" style="background:rgba(124,58,237,.15)">💻</div>Software Development</a>
          <a href="<?= $root ?? '' ?>services/iot.php"><div class="dd-icon" style="background:rgba(6,214,160,.15)">📡</div>IoT Solutions</a>
          <a href="<?= $root ?? '' ?>services/digital-transformation.php"><div class="dd-icon" style="background:rgba(245,158,11,.15)">⚡</div>Digital Transformation</a>
          <a href="<?= $root ?? '' ?>services/digital-integration.php"><div class="dd-icon" style="background:rgba(14,165,233,.15)">🔗</div>Digital Integration</a>
          <a href="<?= $root ?? '' ?>services/data-science.php"><div class="dd-icon" style="background:rgba(239,68,68,.12)">📊</div>Data Science & Analytics</a>
          <a href="<?= $root ?? '' ?>services/cyber-security.php"><div class="dd-icon" style="background:rgba(239,68,68,.15)">🛡️</div>Cyber Security</a>
          <a href="<?= $root ?? '' ?>services/cloud.php"><div class="dd-icon" style="background:rgba(26,86,219,.12)">☁️</div>Cloud Services</a>
          <a href="<?= $root ?? '' ?>services/ai-ml.php"><div class="dd-icon" style="background:rgba(124,58,237,.12)">🤖</div>AI & Machine Learning</a>
        </div>
      </li>
      <li class="nav-item">
        <span class="nav-link">Platforms <svg viewBox="0 0 10 6"><path d="M1 1l4 4 4-4"/></svg></span>
        <div class="nav-dropdown">
          <a href="<?= $root ?? '' ?>platforms/vts.php"><div class="dd-icon" style="background:rgba(6,214,160,.15)">🚗</div>Vehicle Tracking (VTS)</a>
          <a href="<?= $root ?? '' ?>platforms/sms.php"><div class="dd-icon" style="background:rgba(26,86,219,.15)">🏥</div>SMS (ML)</a>
          <a href="<?= $root ?? '' ?>platforms/azure.php"><div class="dd-icon" style="background:rgba(14,165,233,.15)">☁️</div>MS Azure</a>
          <a href="<?= $root ?? '' ?>platforms/erp.php"><div class="dd-icon" style="background:rgba(245,158,11,.15)">📦</div>ERP Solutions</a>
          <a href="<?= $root ?? '' ?>platforms/business-erp.php"><div class="dd-icon" style="background:rgba(124,58,237,.15)">🏪</div>Business ERP</a>
        </div>
      </li>
      <li class="nav-item">
        <span class="nav-link">Insights <svg viewBox="0 0 10 6"><path d="M1 1l4 4 4-4"/></svg></span>
        <div class="nav-dropdown">
          <a href="<?= $root ?? '' ?>insights/webinar.php"><div class="dd-icon" style="background:rgba(26,86,219,.15)">🎥</div>Webinar</a>
          <a href="<?= $root ?? '' ?>insights/seminar.php"><div class="dd-icon" style="background:rgba(6,214,160,.15)">🎤</div>Seminar</a>
          <a href="<?= $root ?? '' ?>insights/news.php"><div class="dd-icon" style="background:rgba(245,158,11,.15)">📰</div>News & Announcements</a>
          <a href="<?= $root ?? '' ?>insights/events.php"><div class="dd-icon" style="background:rgba(239,68,68,.15)">📅</div>Events</a>
          <a href="<?= $root ?? '' ?>insights/brochures.php"><div class="dd-icon" style="background:rgba(124,58,237,.15)">📄</div>Brochures</a>
          <a href="<?= $root ?? '' ?>insights/blogs.php"><div class="dd-icon" style="background:rgba(14,165,233,.15)">✍️</div>Blogs</a>
        </div>
      </li>
      <li class="nav-item">
        <span class="nav-link">Industries <svg viewBox="0 0 10 6"><path d="M1 1l4 4 4-4"/></svg></span>
        <div class="nav-dropdown">
          <a href="<?= $root ?? '' ?>industries/security.php"><div class="dd-icon" style="background:rgba(239,68,68,.15)">🛡️</div>Security</a>
          <a href="<?= $root ?? '' ?>industries/retail-ecommerce.php"><div class="dd-icon" style="background:rgba(26,86,219,.15)">🛒</div>Retail & E-Commerce</a>
          <a href="<?= $root ?? '' ?>industries/real-estate.php"><div class="dd-icon" style="background:rgba(124,58,237,.15)">🏠</div>Real Estate</a>
          <a href="<?= $root ?? '' ?>industries/healthcare.php"><div class="dd-icon" style="background:rgba(6,214,160,.15)">🏥</div>Health Care</a>
          <a href="<?= $root ?? '' ?>industries/food-beverage.php"><div class="dd-icon" style="background:rgba(245,158,11,.15)">🍽️</div>Food & Beverage</a>
          <a href="<?= $root ?? '' ?>industries/education.php"><div class="dd-icon" style="background:rgba(14,165,233,.15)">🎓</div>Education</a>
        </div>
      </li>
      <li class="nav-item">
        <span class="nav-link">About <svg viewBox="0 0 10 6"><path d="M1 1l4 4 4-4"/></svg></span>
        <div class="nav-dropdown">
          <a href="<?= $root ?? '' ?>about.php#vision"><div class="dd-icon" style="background:rgba(26,86,219,.15)">🎯</div>Our Vision</a>
          <a href="<?= $root ?? '' ?>about.php#leadership"><div class="dd-icon" style="background:rgba(6,214,160,.15)">👥</div>Our Leadership</a>
          <a href="<?= $root ?? '' ?>about.php#principles"><div class="dd-icon" style="background:rgba(245,158,11,.15)">⭐</div>Core Principles</a>
          <a href="<?= $root ?? '' ?>careers.php"><div class="dd-icon" style="background:rgba(124,58,237,.15)">💼</div>Careers</a>
          <a href="<?= $root ?? '' ?>contact.php"><div class="dd-icon" style="background:rgba(14,165,233,.15)">📬</div>Contact Us</a>
        </div>
      </li>
    </ul>

    <div class="nav-cta">
      <a class="btn btn-glass btn-sm" href="<?= $root ?? '' ?>insights/seminar.php">Seminar Registration</a>
      <a class="btn btn-grad btn-sm" href="<?= $root ?? '' ?>contact.php">Get in Touch</a>
    </div>
    <button class="hamburger" id="hbg"><span></span><span></span><span></span></button>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="mob-menu" id="mobMenu">
  <span class="mob-section">Services</span>
  <a href="<?= $root ?? '' ?>services/technology-consulting.php">💡 Technology Consulting</a>
  <a href="<?= $root ?? '' ?>services/software-development.php">💻 Software Development</a>
  <a href="<?= $root ?? '' ?>services/iot.php">📡 IoT Solutions</a>
  <a href="<?= $root ?? '' ?>services/digital-transformation.php">⚡ Digital Transformation</a>
  <a href="<?= $root ?? '' ?>services/digital-integration.php">🔗 Digital Integration</a>
  <a href="<?= $root ?? '' ?>services/data-science.php">📊 Data Science & Analytics</a>
  <a href="<?= $root ?? '' ?>services/cyber-security.php">🛡️ Cyber Security</a>
  <a href="<?= $root ?? '' ?>services/cloud.php">☁️ Cloud Services</a>
  <a href="<?= $root ?? '' ?>services/ai-ml.php">🤖 AI & Machine Learning</a>
  <span class="mob-section">Platforms</span>
  <a href="<?= $root ?? '' ?>platforms/vts.php">🚗 Vehicle Tracking (VTS)</a>
  <a href="<?= $root ?? '' ?>platforms/erp.php">📦 ERP Solutions</a>
  <a href="<?= $root ?? '' ?>platforms/business-erp.php">🏪 Business ERP</a>
  <span class="mob-section">Company</span>
  <a href="<?= $root ?? '' ?>about.php">About ADT</a>
  <a href="<?= $root ?? '' ?>careers.php">Careers</a>
  <a href="<?= $root ?? '' ?>contact.php">Contact Us</a>
  <a class="btn btn-grad" href="<?= $root ?? '' ?>contact.php" style="margin-top:.5rem;justify-content:center">Get in Touch →</a>
</div>