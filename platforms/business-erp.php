<?php
$root='../';
$page_title='Business ERP Suite – 30+ Industry Verticals – Anantadrishti';
$page_desc='Ready-to-deploy Business ERP for automobile dealers, bakeries, grocery, furniture, optical, restaurants and 30+ more verticals. By Anantadrishti Technologies.';
include '../includes/header.php';
?>
<style>
.vertical-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:1rem;margin-top:3rem}
.vertical-card{background:#fff;border-radius:16px;padding:1.25rem;border:1px solid rgba(26,86,219,.08);transition:all .3s;text-align:center;cursor:default}
.vertical-card:hover{box-shadow:var(--sh2);transform:translateY(-4px);border-color:rgba(26,86,219,.2)}
.vert-icon{font-size:2rem;margin-bottom:.6rem}
.vert-name{font-size:.85rem;font-weight:700;color:var(--dark)}
.vert-tag{font-size:.7rem;color:var(--gray);margin-top:.2rem}
.compare-table{width:100%;border-collapse:collapse;margin-top:2rem;border-radius:16px;overflow:hidden}
.compare-table th{background:var(--grad);color:#fff;padding:14px 20px;text-align:left;font-size:.82rem;font-weight:700;letter-spacing:.5px;text-transform:uppercase}
.compare-table td{padding:14px 20px;font-size:.875rem;color:var(--dark);border-bottom:1px solid #f1f5f9;vertical-align:middle}
.compare-table tr:last-child td{border-bottom:none}
.compare-table tr:hover td{background:var(--light)}
.check{color:#059669;font-weight:700}
.cross{color:#dc2626}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><a href="../index.php#platforms">Platforms</a><span>/</span><span style="color:#fff">Business ERP Suite</span></div>
    <div class="page-tag">30+ INDUSTRY VERTICALS · READY TO DEPLOY</div>
    <h1>Business ERP for<br><span class="grad-text">Every Trade & Industry</span></h1>
    <p>Ready-to-deploy ERP software purpose-built for 30+ business verticals. Operational in 2–5 days. Built for Indian SMEs with GST compliance, Hindi support and WhatsApp integration.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-grad" href="../contact.php">Request a Free Demo</a>
      <a class="btn btn-glass" href="#verticals">See All Verticals</a>
    </div>
  </div>
</div>

<!-- WHY CHOOSE -->
<section class="bg-light">
  <div class="container">
    <div class="grid-2">
      <div class="sr left">
        <span class="tag">About Business ERP</span>
        <h2 class="sec-title">Ready in Days,<br><span class="grad-text">Not Months</span></h2>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:1.2rem">ADT's Business ERP Suite is a collection of 30+ vertical-specific ERP products, each pre-configured with the exact modules, workflows and reports that businesses in that industry need most. There's no lengthy configuration phase — you get a working system from day one.</p>
        <p style="font-size:.95rem;color:var(--gray);line-height:1.85;margin-bottom:2rem">Every vertical has been designed in close collaboration with actual business owners in that trade, ensuring the software reflects real-world Indian business practices — including GST compliance, Tally integration, cash/credit billing, barcode scanning and WhatsApp report delivery.</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
          <?php $pts=[['🚀','2–5 Days Setup','No lengthy implementation cycles'],['💰','Affordable Pricing','Starting ₹499/month for SMEs'],['🤝','On-Site Training','Our team trains your staff at your premises'],['📞','Dedicated Support','Phone, WhatsApp and on-site support']];
          foreach($pts as $p): ?>
          <div style="background:#fff;border-radius:14px;padding:1.1rem;border:1px solid rgba(26,86,219,.08);display:flex;gap:10px;align-items:flex-start">
            <span style="font-size:1.3rem"><?= $p[0] ?></span>
            <div><div style="font-size:.85rem;font-weight:700;color:var(--dark)"><?= $p[1] ?></div><div style="font-size:.75rem;color:var(--gray)"><?= $p[2] ?></div></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="sr right">
        <div style="background:var(--dark);border-radius:24px;padding:2rem;position:relative;overflow:hidden">
          <div style="position:absolute;top:-50px;right:-50px;width:200px;height:200px;border-radius:50%;background:radial-gradient(circle,rgba(245,158,11,.12),transparent)"></div>
          <div style="font-family:'Sora',sans-serif;font-weight:700;color:#fff;margin-bottom:1.5rem;font-size:1rem">Business ERP — Key Features</div>
          <?php $feats=[['🧾','GST Billing & Filing','CGST, SGST, IGST compliant invoicing with return report export'],['📊','Real-Time Dashboard','Live sales, stock and cash position at a glance'],['📱','WhatsApp Reports','Daily business summary delivered to your WhatsApp every evening'],['🔍','Barcode / QR POS','Fast billing with barcode scanner support'],['📤','Tally Sync','One-click export of ledger data to Tally ERP'],['🔐','Multi-User Access','Cashier, manager and owner roles with permission control']];
          foreach($feats as $f): ?>
          <div style="display:flex;gap:12px;align-items:center;padding:12px 0;border-bottom:1px solid rgba(255,255,255,.05);position:relative;z-index:1">
            <span style="font-size:1.1rem"><?= $f[0] ?></span>
            <div><div style="font-size:.85rem;font-weight:700;color:#fff"><?= $f[1] ?></div><div style="font-size:.75rem;color:rgba(255,255,255,.45)"><?= $f[2] ?></div></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ALL VERTICALS -->
<section class="bg-white" id="verticals">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Industry Verticals</span>
      <h2 class="sec-title">30+ Business Verticals<br><span class="grad-text">Covered</span></h2>
      <p class="sec-sub">Each vertical has its own pre-configured module set, reports and workflows designed specifically for that trade.</p>
    </div>
    <div class="vertical-grid sr">
      <?php $verts=[
        ['🚗','Automobile Dealer','Sales, Service & Spares'],['🥐','Bakery & Confectionery','Production & POS'],
        ['💊','Medical Store','Inventory & Billing'],['👁️','Optical Store','Frame & Lens Management'],
        ['🛒','Grocery & FMCG','Multi-SKU Retail POS'],['🍽️','Restaurant','Orders & Kitchen'],
        ['🥛','Dairy & Milk','Collection & Payment'],['🪑','Furniture Shop','Catalogue & Orders'],
        ['💍','Jewellery','Gold Rate & Ornaments'],['👗','Garment & Textile','Piece & Meter Sales'],
        ['🏗️','Hardware & Paints','Multi-Unit Inventory'],['📚','Book Shop & Stationery','ISBN & Stock'],
        ['🔌','Electronics Retail','Serial No. Tracking'],['🌿','Agri-Input Dealer','Pesticide & Seeds'],
        ['🏠','Real Estate Agency','Property & Leads'],['🎓','Coaching Institute','Batches & Fees'],
        ['🏨','Guest House','Rooms & Billing'],['🚲','Cycle & Bike Shop','Service & Parts'],
        ['🧴','Beauty Salon & Spa','Appointments & Stock'],['🔧','Workshop & Garage','Job Cards & Parts'],
        ['❄️','Cold Storage','Chamber & Consignment'],['🌾','Sabzi Mandi','Lot & Commission'],
        ['🧱','Building Material','Delivery & Credit'],['📦','Courier & Logistics','Tracking & Billing'],
        ['🏋️','Gym & Fitness Centre','Membership & Renewals'],['🔬','Pathology Lab','Tests & Reports'],
        ['🏥','Clinic & Hospital','OPD/IPD & Pharmacy'],['🐄','Cattle & Livestock','Purchase & Sale'],
        ['🎪','Event Management','Bookings & Vendors'],['🧹','Laundry & Dry Clean','Orders & Delivery'],
        ['🪄','Photocopy & Printing','Job Orders & Billing'],['🛠️','Electrical Contractor','Projects & Materials'],
      ];
      foreach($verts as $i=>$v): ?>
      <div class="vertical-card sr d<?= ($i%4)+1 ?>">
        <div class="vert-icon"><?= $v[0] ?></div>
        <div class="vert-name"><?= $v[1] ?></div>
        <div class="vert-tag"><?= $v[2] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:2.5rem">
      <p style="color:var(--gray);font-size:.9rem;margin-bottom:1rem">Don't see your industry? We build custom verticals in 4–6 weeks.</p>
      <a class="btn btn-grad" href="../contact.php">Request Custom Vertical →</a>
    </div>
  </div>
</section>

<!-- COMPARISON TABLE -->
<section class="bg-light">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Why ADT ERP</span>
      <h2 class="sec-title">ADT ERP vs<br><span class="grad-text">Generic Solutions</span></h2>
    </div>
    <div style="overflow-x:auto;margin-top:2rem" class="sr">
      <table class="compare-table">
        <thead><tr><th>Feature</th><th>ADT Business ERP</th><th>Generic ERP</th><th>Spreadsheets</th></tr></thead>
        <tbody>
          <?php $rows=[
            ['Industry-Specific Workflows','<span class="check">✓ Pre-configured</span>','<span class="cross">✗ Requires customisation</span>','<span class="cross">✗ Manual setup</span>'],
            ['GST Compliance','<span class="check">✓ Built-in</span>','<span class="check">✓ Usually included</span>','<span class="cross">✗ Manual</span>'],
            ['Setup Time','<span class="check">✓ 2–5 Days</span>','3–12 Months','Immediate'],
            ['Hindi Language Support','<span class="check">✓ Yes</span>','<span class="cross">✗ Rarely</span>','<span class="cross">✗ No</span>'],
            ['WhatsApp Reports','<span class="check">✓ Automated daily</span>','<span class="cross">✗ Not standard</span>','<span class="cross">✗ No</span>'],
            ['Mobile App','<span class="check">✓ Android + iOS</span>','✓ Varies','<span class="cross">✗ Limited</span>'],
            ['On-Site Training','<span class="check">✓ Included</span>','Usually chargeable','<span class="cross">✗ None</span>'],
            ['Barcode POS','<span class="check">✓ Built-in</span>','Varies','<span class="cross">✗ No</span>'],
            ['Cost (SME)','<span class="check">✓ From ₹499/mo</span>','₹5,000–50,000/mo','Low but risky'],
          ];
          foreach($rows as $r): ?>
          <tr><td><strong><?= $r[0] ?></strong></td><td><?= $r[1] ?></td><td><?= $r[2] ?></td><td><?= $r[3] ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<div class="cta-band">
  <div class="container sr">
    <h2>Find the Right ERP for Your Business</h2>
    <p>Tell us your industry and business size — we'll show you the exact modules and pricing that fit.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="../contact.php">Book a Free Demo</a>
      <a class="btn btn-outline-w btn-lg" href="erp.php">Enterprise ERP</a>
    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
