<?php
$root='../';
$page_title='Events – AnantaDrishti Technologies';
$page_desc='Upcoming and past events, conferences, workshops and exhibitions where AnantaDrishti Technologies participates.';
include '../includes/header.php';
?>
<style>
.event-card{background:#fff;border-radius:20px;border:1px solid rgba(26,86,219,.08);overflow:hidden;transition:all .3s;display:grid;grid-template-columns:auto 1fr;gap:0}
.event-card:hover{box-shadow:var(--sh);transform:translateY(-4px)}
.event-date-col{background:var(--grad);padding:1.5rem 1.25rem;display:flex;flex-direction:column;align-items:center;justify-content:center;min-width:90px;text-align:center}
.event-day{font-family:'Sora',sans-serif;font-size:2.2rem;font-weight:800;color:#fff;line-height:1}
.event-month{font-size:.72rem;color:rgba(255,255,255,.8);font-weight:700;text-transform:uppercase;letter-spacing:1px;margin-top:.2rem}
.event-year{font-size:.68rem;color:rgba(255,255,255,.6);margin-top:.1rem}
.event-body{padding:1.5rem}
.event-type{font-size:.72rem;font-weight:700;padding:3px 12px;border-radius:20px;background:rgba(26,86,219,.08);color:var(--p);display:inline-block;margin-bottom:.6rem}
.event-title{font-size:.98rem;font-weight:800;color:var(--dark);margin-bottom:.45rem}
.event-details{display:flex;flex-wrap:wrap;gap:.75rem;margin-bottom:.75rem}
.event-detail{font-size:.78rem;color:var(--gray);display:flex;align-items:center;gap:4px}
.event-desc{font-size:.82rem;color:var(--gray);line-height:1.7}
.event-cta{display:inline-flex;align-items:center;gap:6px;background:var(--grad);color:#fff;padding:7px 18px;border-radius:50px;font-size:.78rem;font-weight:700;text-decoration:none;margin-top:.85rem;transition:all .25s}
.event-cta:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(26,86,219,.3)}
@media(max-width:500px){.event-card{grid-template-columns:1fr}.event-date-col{flex-direction:row;gap:1rem;padding:1rem 1.5rem;min-width:unset}}
</style>

<div class="page-hero">
  <div class="page-hero-grid"></div>
  <div class="page-hero-content">
    <div class="breadcrumb"><a href="../index.php">Home</a><span>/</span><span style="color:#fff">Events</span></div>
    <div class="page-tag">ADT EVENTS & CONFERENCES</div>
    <h1>Events &<br><span class="grad-text">Conferences</span></h1>
    <p>Meet the ADT team at technology conferences, exhibitions, hackathons and industry events across India. Collaborate, learn and connect with the ADT community.</p>
    <a class="btn btn-grad" href="../contact.php">Invite ADT to Your Event</a>
  </div>
</div>

<section class="bg-light">
  <div class="container">
    <div class="tc sr">
      <span class="tag">Event Calendar</span>
      <h2 class="sec-title">Where You'll Find <span class="grad-text">ADT</span></h2>
      <p class="sec-sub">From technology summits to industry exhibitions — ADT actively participates in events that matter to Indian businesses and the IT community.</p>
    </div>

    <!-- Upcoming Events -->
    <h3 style="font-family:'Sora',sans-serif;font-size:1rem;font-weight:700;color:var(--dark);margin:3rem 0 1.5rem;display:flex;align-items:center;gap:10px"><span style="width:8px;height:8px;border-radius:50%;background:var(--acc);display:inline-block;animation:pulsate 1.5s infinite"></span>Upcoming Events</h3>
    <div style="display:flex;flex-direction:column;gap:1.25rem">
      <?php $upcoming=[
        ['TBD','2025','Conference','UP Tech Summit 2025','Lucknow Convention Centre, Lucknow UP','Full Day','ADT will be presenting a session on AI adoption for UP businesses and showcasing our IoT and ERP product portfolio at this state-level technology summit for industry and government.'],
        ['TBD','2025','Exhibition','IT Expo Lucknow','Lucknow Trade Fair Ground','2 Days','ADT will have a dedicated stall showcasing VTS, SMS-ML, Business ERP and our full service portfolio. Live demos of AI/ML, IoT and cloud solutions throughout both days.'],
        ['TBD','2025','Workshop','Digital India Workshop — Lucknow','ADT Office, Indira Nagar, Lucknow','Half Day','A free hands-on workshop for local businesses on leveraging Digital India initiatives — UPI integrations, DigiLocker, ONDC and government API services for their operations.'],
        ['TBD','2025','Hackathon','ADT Innovation Hackathon','ADT HQ + Online (Hybrid)','48 Hours','ADT\'s annual student and professional hackathon focused on solving real problems faced by UP businesses using AI, IoT and cloud technologies. Prizes worth ₹2 Lakh.'],
      ];
      foreach($upcoming as $i=>$e): ?>
      <div class="event-card sr d<?= $i+1 ?>">
        <div class="event-date-col">
          <div class="event-day"><?= $e[0] ?></div>
          <div class="event-month">Coming</div>
          <div class="event-year"><?= $e[1] ?></div>
        </div>
        <div class="event-body">
          <span class="event-type"><?= $e[2] ?></span>
          <div class="event-title"><?= $e[3] ?></div>
          <div class="event-details">
            <span class="event-detail">📍 <?= $e[4] ?></span>
            <span class="event-detail">⏱ <?= $e[5] ?></span>
          </div>
          <div class="event-desc"><?= $e[6] ?></div>
          <a class="event-cta" href="../contact.php">Register Interest →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Past Events -->
    <h3 style="font-family:'Sora',sans-serif;font-size:1rem;font-weight:700;color:var(--dark);margin:3rem 0 1.5rem;display:flex;align-items:center;gap:10px"><span style="width:8px;height:8px;border-radius:50%;background:var(--gray);display:inline-block"></span>Past Events</h3>
    <div style="display:flex;flex-direction:column;gap:1.25rem">
      <?php $past=[
        ['2024','Technology','Corporate Training — Digital Transformation','Lucknow Corporate Client','Half Day','Conducted a tailored digital transformation seminar for the senior management team of a Lucknow-based manufacturing company.'],
        ['2024','Seminar','AI in Healthcare — Technology Seminar','Medical Association, UP','Full Day','Presented AI diagnostic support tools and electronic health record solutions to healthcare professionals from across UP.'],
        ['2023','Exhibition','Startup India Event — Lucknow Chapter','Lucknow Start-up Hub','2 Days','Exhibited ADT\'s product portfolio at the Startup India chapter event, connecting with 200+ entrepreneurs and investors.'],
      ];
      foreach($past as $i=>$e): ?>
      <div class="event-card sr d<?= $i+1 ?>" style="opacity:.85">
        <div class="event-date-col" style="background:linear-gradient(135deg,#64748b,#475569)">
          <div class="event-day">✓</div>
          <div class="event-month">Done</div>
          <div class="event-year"><?= $e[0] ?></div>
        </div>
        <div class="event-body">
          <span class="event-type" style="background:rgba(100,116,139,.1);color:#64748b"><?= $e[1] ?></span>
          <div class="event-title"><?= $e[2] ?></div>
          <div class="event-details">
            <span class="event-detail">📍 <?= $e[3] ?></span>
            <span class="event-detail">⏱ <?= $e[4] ?></span>
          </div>
          <div class="event-desc"><?= $e[5] ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="cta-band">
  <div class="container sr">
    <h2>Invite ADT to Speak at Your Event</h2>
    <p>Our experts speak on AI, Cloud, Cyber Security, IoT, Digital Transformation and UP's technology ecosystem.</p>
    <div class="cta-btns">
      <a class="btn btn-white btn-lg" href="../contact.php">Send Invitation</a>
      <a class="btn btn-outline-w btn-lg" href="seminar.php">Our Seminars</a>
    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
