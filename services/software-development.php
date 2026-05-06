<?php
$root = '../';
$page_title = 'Software Development – Anantadrishti Technologies';
$page_desc = 'Custom software development services — from MVPs to enterprise platforms. Python, Django, React, Java, PHP and more.';
include '../includes/header.php';
$svc = [
  'title'   => 'Software Development',
  'tag'     => 'Custom Software · Web · Mobile · Enterprise',
  'icon'    => '💻',
  'grad'    => 'linear-gradient(135deg,#7c3aed,#a855f7)',
  'color'   => '#7c3aed',
  'headline'=> 'Custom <span class="grad-text">Software Development</span><br>That Scales With You',
  'hero_sub'=> 'From product validation to enterprise-grade platforms — we build high-quality, scalable software that meets your exact business requirements.',
  'overview_title' => 'Software Built Around <span class="grad-text">Your Business Needs</span>',
  'overview_paras' => [
    'ADT\'s Software Development practice delivers end-to-end custom software solutions — from initial concept validation through architecture, development, testing, deployment and ongoing maintenance. We follow three core policies in every project: concept validation, development speed and product optimisation.',
    'We specialise in bridging functional gaps with software that connects disconnected systems, automates manual processes and creates new digital capabilities. Whether you need a web application, mobile app, API platform or enterprise management system, our experienced engineers deliver solutions built to last.',
    'Our full-stack teams work across Python/Django, React/Next.js, Java/Spring Boot, PHP/Laravel, Flutter and more — always choosing the right tool for the job, not the most fashionable one.',
  ],
  'key_points' => [
    ['🎯','Concept Validation First','We validate your idea before writing a single line of production code — saving time, money and heartbreak.'],
    ['⚡','Agile & Fast Delivery','Sprint-based delivery with weekly demos so you always know where your project stands.'],
    ['🔧','Full-Stack Capability','Frontend, backend, APIs, databases, DevOps — we handle the full stack in-house.'],
    ['📱','Web & Mobile','Responsive web apps, native iOS/Android and cross-platform solutions with Flutter and React Native.'],
    ['🛠️','Ongoing Maintenance','We don\'t disappear after launch. Long-term support, bug fixes and feature enhancements included.'],
  ],
  'benefits_title' => 'Engineering Excellence<br>Every <span class="grad-text2">Single Sprint</span>',
  'benefits_sub'   => 'Software that\'s built right the first time — performant, secure and maintainable.',
  'benefits' => [
    ['🏗️','Clean Architecture','SOLID principles, proper separation of concerns and modular design for easy future extension.'],
    ['🔒','Security by Design','Security isn\'t bolted on — it\'s built into every layer of the application from day one.'],
    ['📊','Performance Optimised','Load-tested, database-optimised and CDN-ready for high-traffic production environments.'],
    ['🧪','Thorough Testing','Unit, integration and E2E tests with CI pipelines ensuring quality at every stage.'],
    ['📖','Full Documentation','Technical docs, API docs and user manuals delivered alongside every project.'],
    ['☁️','Cloud-Ready','All software built for cloud deployment on Azure, AWS or GCP from the start.'],
  ],
  'use_cases' => [
    ['Custom ERP System','Built a multi-module ERP for a 200-person manufacturing company replacing 4 disconnected legacy systems.'],
    ['Patient Management Portal','Developed a secure clinic management system with appointment booking, billing and EMR integration.'],
    ['E-Commerce Platform','Full-stack e-commerce platform with inventory, payments, analytics and vendor management for 50+ sellers.'],
    ['Mobile Field Service App','React Native app for field engineers to log service calls, capture photos and sync data offline.'],
    ['Government Data Portal','Secure data management portal for a UP state government department handling citizen services.'],
    ['SaaS Subscription Platform','Multi-tenant SaaS platform with role-based access, billing, usage analytics and API access for ISVs.'],
  ],
  'techs' => ['Python','Django','Django REST Framework','React','Next.js','TypeScript','Java','Spring Boot','PHP','Laravel','Flutter','React Native','Node.js','Express','PostgreSQL','MySQL','MongoDB','Redis','Docker','Kubernetes','Git','GitHub Actions'],
  'process' => [
    ['Requirements & Discovery','Detailed requirement workshops, user story creation and technical feasibility analysis.'],
    ['System Architecture','Design the technical architecture, database schema, API contracts and infrastructure plan.'],
    ['UI/UX Design','Wireframes, prototypes and final design handoff — ensuring great user experience before coding starts.'],
    ['Agile Development','2-week sprints with daily standups, weekly demos and continuous integration pipelines.'],
    ['Testing & QA','Automated testing, manual QA, security scanning and performance load testing before release.'],
    ['Deployment & Support','Production deployment, monitoring setup, go-live support and ongoing maintenance SLA.'],
  ],
  'stats' => [['Software Projects Delivered','200+'],['Average Delivery Time','8–16 Weeks'],['Languages & Frameworks','15+'],['Test Coverage Target','>80%'],['Client Retention Rate','95%']],
];
include '../includes/service-template.php';
include '../includes/footer.php';
?>