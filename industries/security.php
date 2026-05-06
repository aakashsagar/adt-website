<?php
$root='../';
$page_title='Security Industry Technology Solutions – Anantadrishti';
$page_desc='AI CCTV analytics, access control, surveillance management, cybersecurity and smart security platform solutions by Anantadrishti Technologies.';
include '../includes/header.php';
$ind=[
  'title'=>'Security',
  'icon'=>'🛡️',
  'grad'=>'linear-gradient(135deg,#ef4444,#7c3aed)',
  'headline'=>'Intelligent Technology for<br><span class="grad-text">Total Security</span>',
  'hero_sub'=>'From AI-powered CCTV analytics and smart access control to cybersecurity platforms and incident management — ADT delivers technology that protects people, assets and data.',
  'overview_title'=>'Smart Security Solutions<br>for the <span class="grad-text">Physical & Digital World</span>',
  'overview_sub'=>'Advanced security technology for security agencies, corporate campuses, housing societies, banks, government facilities and critical infrastructure.',
  'solutions'=>[
    ['📷','AI CCTV Analytics','Computer vision-powered CCTV with real-time alerts for intrusion, crowd density, abandoned objects and face recognition.'],
    ['🚪','Smart Access Control','Biometric, RFID and mobile-based access control with real-time logs, visitor management and integration with HR systems.'],
    ['🏢','Security Operations Centre (SOC)','Centralised monitoring dashboard aggregating feeds from CCTV, access control, sensors and cyber threat feeds.'],
    ['🛡️','Cybersecurity Platform','VAPT, SIEM deployment, vulnerability management and real-time threat detection for digital infrastructure.'],
    ['📱','Guard Tour Management','Mobile app for security guards with GPS-verified patrol routes, checkpoint scanning and incident reporting.'],
    ['🚨','Incident Management System','Digital incident logging, escalation workflow, investigation tracking and regulatory reporting for security events.'],
    ['🔍','Vehicle & Visitor Management','ANPR (number plate recognition), visitor pre-registration, gate pass automation and vehicle entry/exit logs.'],
    ['📊','Security Analytics Dashboard','Incident trends, response time analysis, guard performance and risk hotspot mapping for management reporting.'],
  ],
  'challenges'=>[
    ['Reactive Security Posture','Security teams responding to incidents after they happen instead of detecting threats in advance.'],
    ['Manual Guard Monitoring','No way to verify that guards are actually patrolling assigned routes and checkpoints.'],
    ['Isolated Security Systems','CCTV, access control and cybersecurity running on separate systems with no unified visibility.'],
    ['Slow Incident Response','Incidents reported verbally or via paper, causing delays in escalation and evidence preservation.'],
  ],
  'solutions_to_challenges'=>[
    ['AI Proactive Threat Detection','Computer vision and anomaly detection algorithms alert before incidents escalate — not after.'],
    ['GPS Guard Tour Verification','Mobile app with checkpoint QR scans and GPS tracking proves guard presence at each location in real time.'],
    ['Unified Security Dashboard','Single pane of glass combining physical security, cyber threat feeds and operational metrics.'],
    ['Digital Incident Workflow','Mobile incident reporting with photo/video evidence, automatic escalation and audit trail preservation.'],
  ],
  'results'=>[
    ['60%','Faster Incident Response','Unified SOC dashboard and digital incident workflow cut average response time from 18 minutes to 7 minutes.'],
    ['85%','Guard Tour Compliance','GPS-verified patrol system increased checkpoint compliance from 55% to 95% within the first month.'],
    ['40%','Reduction in False Alarms','AI CCTV analytics reduced nuisance alarm activations by filtering out non-threatening motion events.'],
  ],
];
include '../includes/industry-template.php';
include '../includes/footer.php';
?>