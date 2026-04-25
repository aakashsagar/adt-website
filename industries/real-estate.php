<?php
$root='../';
$page_title='Real Estate Technology Solutions – AnantaDrishti';
$page_desc='Property management software, CRM for real estate agents, virtual tours and smart building IoT solutions by AnantaDrishti Technologies.';
include '../includes/header.php';
$ind=[
  'title'=>'Real Estate',
  'icon'=>'🏠',
  'grad'=>'linear-gradient(135deg,#7c3aed,#1a56db)',
  'headline'=>'Smart Technology for<br><span class="grad-text">Smarter Real Estate</span>',
  'hero_sub'=>'From property management portals and agent CRMs to virtual tour platforms and smart building IoT — ADT delivers technology that streamlines every stage of the real estate lifecycle.',
  'overview_title'=>'Technology Across the<br><span class="grad-text">Real Estate Lifecycle</span>',
  'overview_sub'=>'Purpose-built real estate technology for builders, developers, brokers, property managers and housing societies across India.',
  'solutions'=>[
    ['🏗️','Developer Project Management','Construction progress tracking, unit booking, payment milestones, RERA compliance and buyer portal.'],
    ['🤝','Agent CRM','Lead management, property matching, follow-up automation, site visit scheduling and deal pipeline tracking.'],
    ['🌐','Property Listing Portal','Custom real estate website with advanced search, map view, EMI calculator and lead capture forms.'],
    ['🎥','Virtual Tour Platform','360° virtual property tours with hotspots, floor plans and video walkthrough integration.'],
    ['🏢','Society Management App','Maintenance billing, visitor management, complaint tracking, facility booking and resident communication.'],
    ['📊','Real Estate Analytics','Market trend analysis, price benchmarking, inventory aging and investment ROI calculators.'],
    ['📡','Smart Building IoT','Access control, energy management, HVAC automation, CCTV integration and occupancy tracking.'],
    ['📋','RERA Compliance Tools','RERA project registration, quarterly update automation and buyer disclosure document management.'],
  ],
  'challenges'=>[
    ['Lead Leakage','Enquiries coming via phone, website, portals and walk-ins — falling through the cracks with no tracking.'],
    ['Manual Collection & Reminders','Maintenance dues, EMI reminders and demand letters sent manually causing delays and disputes.'],
    ['Compliance Documentation','RERA, FICO and local authority compliance requiring extensive documentation and regular updates.'],
    ['Post-Sale Communication Gap','Buyers have no visibility into construction progress, leading to anxiety and complaints.'],
  ],
  'solutions_to_challenges'=>[
    ['Unified Lead Management CRM','All leads from every channel captured, assigned and tracked automatically with SLA alerts for follow-up.'],
    ['Automated Collection System','Scheduled payment reminders via SMS and WhatsApp with online payment links and auto-receipts.'],
    ['RERA Compliance Dashboard','Automated quarterly update generation and one-click submission support for registered projects.'],
    ['Buyer Progress Portal','Self-service portal where buyers can track construction milestones, payments and documents in real time.'],
  ],
  'results'=>[
    ['40%','More Leads Converted','CRM with automated follow-up sequences increased lead-to-booking conversion for a Lucknow builder.'],
    ['65%','Reduction in Payment Defaults','Automated WhatsApp reminders with payment links cut maintenance fee defaults significantly.'],
    ['80%','Fewer Buyer Complaints','Real-time construction progress portal eliminated most buyer enquiries about project status.'],
  ],
];
include '../includes/industry-template.php';
include '../includes/footer.php';
?>