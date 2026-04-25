<?php
$root = '../';
$page_title = 'Technology Consulting – AnantaDrishti Technologies';
$page_desc = 'World-class technology consultants to facilitate your digital journey — design, development, implementation and management of new technology.';
include '../includes/header.php';

$svc = [
  'title'   => 'Technology Consulting',
  'tag'     => 'Advisory · Strategy · Architecture',
  'icon'    => '💡',
  'grad'    => 'linear-gradient(135deg,#1a56db,#3b82f6)',
  'color'   => '#1a56db',
  'headline'=> 'Expert Technology <span class="grad-text">Consulting</span><br>for Your Digital Journey',
  'hero_sub'=> 'We\'ve built a world-class team of technology consultants ready to advise and guide your organization through every phase of digital adoption and innovation.',
  'overview_title' => 'Bridging the Gap Between <span class="grad-text">Business & Technology</span>',
  'overview_paras' => [
    'AnantaDrishti\'s Technology Consulting practice helps organisations make smarter decisions about adopting, implementing and scaling new technologies. Whether you\'re a startup building your first product or an enterprise planning a large-scale digital transformation, our consultants bring deep, hands-on expertise across all major technology domains.',
    'Our consultants don\'t just advise — they work side by side with your internal teams to translate strategy into working systems. We cover technology assessment, vendor selection, architecture review, system design, security posture analysis and implementation roadmapping.',
    'With key staff averaging 15–20 years of experience across multiple geographies and multinational clients, ADT\'s consulting engagements are grounded in real-world delivery — not just theory.',
  ],
  'key_points' => [
    ['🔍','Digital Readiness Assessment','Evaluate your current technology landscape, identify gaps and create a prioritised roadmap for transformation.'],
    ['🏗️','Architecture & Design Review','Independent review of your system architecture with actionable recommendations for scalability, security and performance.'],
    ['🤝','Vendor Selection & Management','Unbiased guidance on choosing the right technology vendors, platforms and integration partners for your needs.'],
    ['📋','Implementation Roadmapping','Translate strategic goals into detailed, phased implementation plans with clear milestones and success metrics.'],
    ['📈','Technology Strategy','Align IT investments with business objectives to maximise ROI and build competitive advantage.'],
  ],
  'benefits_title' => 'Why ADT\'s Consulting<br>Delivers Real Results',
  'benefits_sub'   => 'Our consultants bring experience from real delivery — not just frameworks and slides.',
  'benefits' => [
    ['🧠','15–20 Years Experience','Not junior consultants — our team has seen what works and what fails across hundreds of real projects.'],
    ['🎯','Outcome-Focused','Every engagement is tied to measurable business outcomes, not just deliverable documents.'],
    ['🔒','Vendor-Neutral','We recommend what\'s best for you, not what earns us commissions. Our advice is always independent.'],
    ['⚡','Fast Time-to-Value','We focus on quick wins alongside long-term strategy so you see ROI from day one.'],
    ['🌐','Cross-Domain Expertise','AI, cloud, IoT, security, ERP — our consultants span the full technology spectrum.'],
    ['🤝','Embedded Partnership','We work as an extension of your team, not as outsiders delivering a report and leaving.'],
  ],
  'use_cases' => [
    ['Government Digital Modernisation','Helping state government departments migrate legacy systems to cloud-native architecture with zero service disruption.'],
    ['Startup Technology Stack Selection','Advising early-stage startups on choosing the right technology stack, vendors and architecture for their MVP and beyond.'],
    ['Enterprise ERP Evaluation','Conducting a full ERP suitability assessment for a 500-person manufacturing company before a ₹2Cr system investment.'],
    ['Digital Transformation Roadmap','Creating a 3-year digital transformation roadmap for a retail chain including e-commerce, IoT and analytics integration.'],
    ['Security Architecture Review','Independent security architecture review for an NBFC prior to their RBI compliance audit.'],
    ['Cloud Migration Strategy','Designing a phased cloud migration strategy for a healthcare company moving from on-premise to Azure.'],
  ],
  'techs' => ['Microsoft Azure','AWS','Google Cloud','Power BI','Microsoft 365','SAP','Jira','Confluence','Figma','Draw.io','Lucidchart','Terraform','Ansible','Python','SQL','REST APIs'],
  'process' => [
    ['Discovery Workshop','Deep-dive sessions with your stakeholders to understand goals, constraints, current state and desired outcomes.'],
    ['Technology Assessment','Evaluate existing systems, architecture, security posture, team capabilities and technical debt.'],
    ['Strategy & Roadmap','Develop a prioritised, phased technology strategy with clear milestones, KPIs and investment requirements.'],
    ['Architecture Design','Design scalable, secure and future-proof architecture blueprints aligned to your business strategy.'],
    ['Implementation Support','Hands-on support during implementation — code reviews, vendor management, quality assurance.'],
    ['Review & Optimise','Post-implementation review to measure outcomes, resolve issues and plan the next phase of growth.'],
  ],
  'stats' => [
    ['Consulting Engagements Delivered','100+'],
    ['Average Client Experience Saved','₹15–40L'],
    ['Technology Domains Covered','12+'],
    ['Average Engagement Duration','3–6 Months'],
    ['Client Satisfaction Rate','99%'],
  ],
];
include '../includes/service-template.php';
include '../includes/footer.php';
?>