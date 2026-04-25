<?php // includes/footer.php ?>
<!-- TICKER -->
<div class="ticker-wrap">
  <div class="ticker-inner">
    <?php $items = ['Technology Consulting','Software Development','IoT Solutions','Digital Transformation','AI & Machine Learning','Cyber Security','Cloud Services','Data Science & Analytics','Mobile Apps','ERP Solutions','Vehicle Tracking','Computer Vision','NLP','Digital Integration','Web Development','Database Management']; ?>
    <?php foreach(array_merge($items,$items) as $it): ?>
      <span class="ticker-item"><span class="ticker-dot"></span><?= $it ?></span>
    <?php endforeach; ?>
  </div>
</div>

<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <a class="logo" href="<?= $root ?? '' ?>index.php">
        <div class="logo-icon">
            <!-- <svg viewBox="0 0 24 24" fill="white"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg> -->
        <img src="<?= $root ?? '' ?>assets/image/logon.png" alt="Logo" />

        </div>
        <span class="logo-text">Ananta<span>drishti</span> Technologies Pvt Ltd</span>
      </a>
      <p>Anantadrishti Technologies Pvt. Ltd. — A leading business solution provider for the next generation of business innovation, powered by cutting-edge technology.</p>
      <address>
        <strong>📍</strong> 8/1, Dwarikapuri Colony, Ishwar Puri,<br>
        Indira Nagar, Lucknow – 226016, U.P., India<br><br>
        <strong>📞</strong> 0522-4056487 | +91 9140668001, 9389703952<br>
        <strong>✉️</strong> info@anantdrishti.com | amitsingh@anantdrishti.com
      </address>
      <div class="socials">
        <a class="soc" href="#">in</a>
        <a class="soc" href="#">𝕏</a>
        <a class="soc" href="#">fb</a>
        <a class="soc" href="#">yt</a>
      </div>
    </div>

    <div class="footer-col">
      <h4>Services</h4>
      <ul>
        <li><a href="<?= $root ?? '' ?>services/technology-consulting.php">Technology Consulting</a></li>
        <li><a href="<?= $root ?? '' ?>services/software-development.php">Software Development</a></li>
        <li><a href="<?= $root ?? '' ?>services/iot.php">IoT Solutions</a></li>
        <li><a href="<?= $root ?? '' ?>services/digital-transformation.php">Digital Transformation</a></li>
        <li><a href="<?= $root ?? '' ?>services/digital-integration.php">Digital Integration</a></li>
        <li><a href="<?= $root ?? '' ?>services/data-science.php">Data Science & Analytics</a></li>
        <li><a href="<?= $root ?? '' ?>services/cyber-security.php">Cyber Security</a></li>
        <li><a href="<?= $root ?? '' ?>services/cloud.php">Cloud Services</a></li>
        <li><a href="<?= $root ?? '' ?>services/ai-ml.php">AI & Machine Learning</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Platforms</h4>
      <ul>
        <li><a href="<?= $root ?? '' ?>platforms/vts.php">Vehicle Tracking (VTS)</a></li>
        <li><a href="<?= $root ?? '' ?>platforms/sms.php">SMS (ML)</a></li>
        <li><a href="<?= $root ?? '' ?>platforms/azure.php">MS Azure</a></li>
        <li><a href="<?= $root ?? '' ?>platforms/erp.php">ERP Solutions</a></li>
        <li><a href="<?= $root ?? '' ?>platforms/business-erp.php">Business ERP</a></li>
      </ul>
      <h4 style="margin-top:1.5rem">Industries</h4>
      <ul>
        <li><a href="<?= $root ?? '' ?>industries/education.php">Education</a></li>
        <li><a href="<?= $root ?? '' ?>industries/healthcare.php">Health Care</a></li>
        <li><a href="<?= $root ?? '' ?>industries/retail-ecommerce.php">Retail & E-Commerce</a></li>
        <li><a href="<?= $root ?? '' ?>industries/real-estate.php">Real Estate</a></li>
        <li><a href="<?= $root ?? '' ?>industries/food-beverage.php">Food & Beverage</a></li>
        <li><a href="<?= $root ?? '' ?>industries/security.php">Security</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Company</h4>
      <ul>
        <li><a href="<?= $root ?? '' ?>about.php">About Us</a></li>
        <li><a href="<?= $root ?? '' ?>about.php#vision">Our Vision</a></li>
        <li><a href="<?= $root ?? '' ?>about.php#leadership">Leadership</a></li>
        <li><a href="<?= $root ?? '' ?>about.php#principles">Core Principles</a></li>
        <li><a href="<?= $root ?? '' ?>careers.php">Careers</a></li>
        <li><a href="<?= $root ?? '' ?>insights/blogs.php">Blogs</a></li>
        <li><a href="<?= $root ?? '' ?>insights/news.php">News & Events</a></li>
        <li><a href="<?= $root ?? '' ?>internship.php">Internship Program</a></li>
        <li><a href="<?= $root ?? '' ?>contact.php">Contact Us</a></li>
      </ul>
    </div>

    <div class="footer-col newsletter">
      <h4>Stay Updated</h4>
      <p>Get latest insights on AI, cloud, digital transformation and IT innovation.</p>
      <input type="email" placeholder="your@email.com">
      <button>Subscribe →</button>
      <div style="margin-top:1.25rem;padding:1rem;background:rgba(255,255,255,.04);border-radius:12px;border:1px solid rgba(255,255,255,.07)">
        <div style="font-size:.75rem;font-weight:700;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:1px;margin-bottom:.6rem">Quick Links</div>
        <a href="<?= $root ?? '' ?>insights/seminar.php" style="display:block;color:rgba(255,255,255,.45);font-size:.8rem;padding:4px 0;transition:color .2s" onmouseover="this.style.color='#fff'" onmouseout="this.style.color=''">🎤 Seminar Registration</a>
        <a href="<?= $root ?? '' ?>internship.php" style="display:block;color:rgba(255,255,255,.45);font-size:.8rem;padding:4px 0;transition:color .2s" onmouseover="this.style.color='#fff'" onmouseout="this.style.color=''">🎓 Internship Program</a>
        <a href="<?= $root ?? '' ?>insights/webinar.php" style="display:block;color:rgba(255,255,255,.45);font-size:.8rem;padding:4px 0;transition:color .2s" onmouseover="this.style.color='#fff'" onmouseout="this.style.color=''">🎥 Training Division</a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <span>© 2014–<?= date('Y') ?> Anantadrishti Technologies Pvt. Ltd. All rights reserved.</span>
    <span>
      <a href="<?= $root ?? '' ?>privacy.php">Privacy Policy</a>
      <a href="<?= $root ?? '' ?>terms.php">Terms of Use</a>
      <a href="<?= $root ?? '' ?>sitemap.php">Sitemap</a>
    </span>
  </div>
</footer>

<script src="<?= $root ?? '' ?>assets/common.js"></script>
</body>
</html>