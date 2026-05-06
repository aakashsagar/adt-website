<?php
$root = '../';
$page_title = 'Cyber Security – Anantadrishti Technologies';
$page_desc = 'Comprehensive cyber security services — VAPT, penetration testing, SIEM, compliance, security audits and strategy. 16 years expertise.';
include '../includes/header.php';
$svc = [
  'title'   => 'Cyber Security',
  'tag'     => 'VAPT · Compliance · SIEM · Security Audits',
  'icon'    => '🛡️',
  'grad'    => 'linear-gradient(135deg,#ef4444,#dc2626)',
  'color'   => '#ef4444',
  'headline'=> 'Protect Your Business with<br><span class="grad-text">Expert Cyber Security</span>',
  'hero_sub'=> 'Detecting, managing, analyzing and responding to cyberattacks — ADT\'s cyber security team with 16 years of expertise creates robust security strategies for Indian businesses and government organisations.',
  'overview_title' => 'Security That Protects<br><span class="grad-text">What Matters Most</span>',
  'overview_paras' => [
    'ADT\'s Cyber Security practice is led by a specialist with 16 years of experience in IT security, specialising in AEM (Adobe Experience Manager security), Cyber Security and Streaming Data Security. We help organisations detect vulnerabilities before attackers do, respond effectively to incidents and build lasting security postures.',
    'We create comprehensive cyber security strategies ensuring confidentiality, data integrity, and availability of information for your organisation. Our approach covers people, process and technology — because security is not just a technical problem.',
    'From VAPT assessments for startups to enterprise SIEM deployments and government compliance engagements, ADT delivers security services that are practical, thorough and aligned to Indian regulations including IT Act 2000, SEBI guidelines, RBI mandates and DPDP Act 2023.',
  ],
  'key_points' => [
    ['🔍','Vulnerability Assessment & Pen Test','Comprehensive VAPT across web, mobile, network and cloud infrastructure to find real vulnerabilities.'],
    ['📋','Security Audit & Compliance','Gap analysis against ISO 27001, NIST, PCI-DSS, HIPAA, RBI guidelines and DPDP Act 2023.'],
    ['🚨','Incident Response','Rapid incident response planning, containment and forensic investigation when breaches occur.'],
    ['📡','SIEM Implementation','Deploy and manage Security Information & Event Management systems for real-time threat detection.'],
    ['🔐','Application Security','Secure code review, OWASP Top 10 assessment and DevSecOps integration for development teams.'],
  ],
  'benefits_title' => 'Why Organisations Trust ADT<br>with Their <span class="grad-text2">Security</span>',
  'benefits_sub'   => '16 years of security expertise protecting businesses, data and reputations.',
  'benefits' => [
    ['🏆','16 Years Domain Expertise','Our security head has 16 years protecting enterprise environments across banking, healthcare and government.'],
    ['📜','Compliance-Ready Reports','Audit-grade reports accepted by regulators, auditors and insurance providers without rework.'],
    ['🔴','Attacker Mindset','We think like attackers — not just checklist-auditors — to find real, exploitable vulnerabilities.'],
    ['⚡','Fast Turnaround','VAPT reports delivered within 5–10 business days with clear, prioritised remediation guidance.'],
    ['🤝','Remediation Support','We don\'t just find problems — we work with your team to fix them and verify the fixes.'],
    ['🌐','Streaming Data Security','Specialist expertise in securing real-time data pipelines — rare and critical for IoT and fintech.'],
  ],
  'use_cases' => [
    ['NBFC Pre-Audit VAPT','Full vulnerability assessment for a Non-Banking Financial Company before their annual RBI compliance review.'],
    ['Hospital Network Security','Network security audit and SIEM deployment for a multi-city hospital chain protecting patient health records.'],
    ['E-Commerce Application Pentest','Web application penetration test for an e-commerce platform handling ₹50Cr+ in annual transactions.'],
    ['Government Portal Security','Security review and hardening for a state government citizen services portal with 500,000+ registered users.'],
    ['IoT Device Security','Security assessment of a fleet management IoT device\'s firmware, communication protocols and cloud backend.'],
    ['DPDP Act Compliance','Gap assessment and remediation roadmap for a tech company preparing for India\'s new data protection law.'],
  ],
  'techs' => ['Kali Linux','Metasploit','Burp Suite','Nmap','Wireshark','OWASP ZAP','Nessus','Qualys','Splunk','IBM QRadar','ELK Stack','Snort','Suricata','HashiCorp Vault','CrowdStrike','SentinelOne','Microsoft Sentinel','OSSEC'],
  'process' => [
    ['Scoping & Planning','Define scope, rules of engagement, testing methodology and legal authorisations.'],
    ['Reconnaissance','Passive and active information gathering about the target infrastructure and attack surface.'],
    ['Vulnerability Scanning','Automated and manual scanning to identify known vulnerabilities across all in-scope assets.'],
    ['Exploitation & Proof-of-Concept','Safe exploitation to demonstrate real impact — not just theoretical vulnerabilities.'],
    ['Reporting','Detailed report with executive summary, technical findings, risk ratings and remediation steps.'],
    ['Remediation & Retest','Support fixing vulnerabilities and retest to verify remediation was effective.'],
  ],
  'stats' => [['Security Years Experience','16'],['VAPT Reports Delivered','80+'],['Compliance Frameworks','8+'],['Avg. Critical Findings','12 per audit'],['Re-breach Rate','0%']],
];
include '../includes/service-template.php';
include '../includes/footer.php';
?>