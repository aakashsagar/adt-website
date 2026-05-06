<?php
$root = '../';
$page_title = 'Digital Transformation – Anantadrishti Technologies';
$page_desc = 'Digital transformation services helping businesses modernise operations, culture and customer experiences using cutting-edge technology.';
include '../includes/header.php';
$svc = [
  'title'   => 'Digital Transformation',
  'tag'     => 'Business Modernisation · Process Automation · Culture Change',
  'icon'    => '⚡',
  'grad'    => 'linear-gradient(135deg,#f59e0b,#ef4444)',
  'color'   => '#f59e0b',
  'headline'=> '<span class="grad-text">Transform</span> Your Business<br>for the Digital Era',
  'hero_sub'=> 'Using digital technologies to create or modify business processes, culture and customer experiences. ADT guides organisations through every stage of their digital transformation journey.',
  'overview_title' => 'Reimagining How Your<br><span class="grad-text">Business Operates</span>',
  'overview_paras' => [
    'Digital transformation is about fundamentally changing how your organisation creates and delivers value — not just adding new software on top of old processes. ADT\'s Digital Transformation practice helps businesses across India adapt to the rapidly changing digital landscape by reimagining operations, customer journeys and business models.',
    'Our approach focuses on three dimensions: process transformation (automating and optimising workflows), technology transformation (adopting cloud, AI and modern platforms) and cultural transformation (building the skills, mindset and ways of working that sustain digital change).',
    'We have helped government departments, retail chains, healthcare organisations and manufacturing companies successfully navigate complex transformation programmes — delivering measurable outcomes, not just technology deployments.',
  ],
  'key_points' => [
    ['🗺️','Transformation Roadmapping','Create a prioritised, phased transformation roadmap tied to clear business outcomes and ROI.'],
    ['⚙️','Process Automation','Identify and automate manual, repetitive processes using RPA, workflow tools and custom software.'],
    ['🤝','Change Management','Build the organisational readiness, training and adoption programmes that make transformation stick.'],
    ['📱','Digital Customer Experience','Redesign customer journeys with digital-first touchpoints — apps, portals, chatbots and self-service.'],
    ['📊','KPI & Metrics Framework','Define and instrument the right metrics to measure transformation progress and business impact.'],
  ],
  'benefits_title' => 'Transformation That Delivers<br><span class="grad-text2">Lasting Value</span>',
  'benefits_sub'   => 'We focus on sustainable change — not just technology adoption.',
  'benefits' => [
    ['🎯','Outcome-Focused','Every transformation initiative is tied to a measurable business outcome — revenue, cost, speed or quality.'],
    ['🔄','Iterative Approach','Quick wins early, long-term gains throughout. We build momentum before tackling complex change.'],
    ['👥','People-First','Technology alone doesn\'t transform organisations — we invest in training, adoption and culture.'],
    ['🏛️','Industry Experience','Healthcare, retail, government, manufacturing — we bring relevant sector experience to every engagement.'],
    ['⚡','Agile Delivery','Transformation delivered in 90-day sprints so you see progress and can adjust course quickly.'],
    ['🔒','Risk Management','Structured risk management keeping your core operations running while you transform around them.'],
  ],
  'use_cases' => [
    ['Government e-Services Transformation','Digitised 12 citizen services for a UP government department, reducing processing time from 15 days to 24 hours.'],
    ['Retail Omnichannel Transformation','Transformed a traditional retailer into an omnichannel business with online, app and in-store integration.'],
    ['Hospital Digital Journey','End-to-end digital transformation of a 300-bed hospital — from paper records to digital patient management.'],
    ['Manufacturing Paperless Factory','Eliminated paper-based production tracking for a factory floor, reducing errors by 45% and improving throughput.'],
    ['NBFC Digital Lending','Transformed a manual loan processing workflow into a fully digital 4-hour approval process.'],
    ['School Digital Ecosystem','Complete digital transformation of a 5-school group including LMS, fee management and parent communication.'],
  ],
  'techs' => ['Microsoft Power Platform','Power Automate','UiPath','Automation Anywhere','Salesforce','SAP','Microsoft 365','Azure','AWS','React','Node.js','Twilio','WhatsApp Business API','Zoom API','Stripe','Razorpay','DocuSign'],
  'process' => [
    ['Digital Maturity Assessment','Evaluate current digital capabilities, identify gaps and benchmark against industry peers.'],
    ['Vision & Strategy','Co-create a compelling digital vision and transformation strategy with leadership buy-in.'],
    ['Roadmap & Prioritisation','Build a phased roadmap prioritising initiatives by impact, feasibility and business value.'],
    ['Quick Wins Delivery','Execute high-impact, low-complexity initiatives first to build momentum and demonstrate value.'],
    ['Core Transformation','Tackle the larger, complex process and technology transformations with full change management support.'],
    ['Embed & Sustain','Build internal capability, governance and continuous improvement mechanisms to sustain transformation.'],
  ],
  'stats' => [['Transformation Programmes Led','30+'],['Avg. Process Time Reduction','55%'],['Digital Adoption Rate','85%+'],['Typical Engagement Duration','6–18 Months'],['ROI Achieved','3–8x']],
];
include '../includes/service-template.php';
include '../includes/footer.php';
?>