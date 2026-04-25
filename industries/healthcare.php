<?php
$root='../';
$page_title='Healthcare Technology Solutions – AnantaDrishti';
$page_desc='Hospital management, clinic software, pathology lab systems, telemedicine and patient data management by AnantaDrishti Technologies.';
include '../includes/header.php';
$ind=[
  'title'=>'Health Care',
  'icon'=>'🏥',
  'grad'=>'linear-gradient(135deg,#059669,#06d6a0)',
  'headline'=>'Smarter Technology for<br><span class="grad-text">Better Healthcare</span>',
  'hero_sub'=>'From clinic management and pathology lab systems to AI diagnostic tools and telemedicine — ADT builds healthcare technology that improves patient outcomes and operational efficiency.',
  'overview_title'=>'End-to-End Healthcare<br><span class="grad-text">Technology Solutions</span>',
  'overview_sub'=>'Purpose-built healthcare software for hospitals, clinics, diagnostic centres, pharmacies, nursing homes and telemedicine providers across India.',
  'solutions'=>[
    ['🏥','Hospital Management System','OPD/IPD management, bed allocation, ward management, billing, pharmacy and insurance claim processing.'],
    ['👨‍⚕️','Clinic Management Software','Appointment booking, patient records, prescription generation, billing and follow-up reminders.'],
    ['🔬','Pathology Lab System','Sample registration, test workflow, result entry, auto-calculated reference ranges and digital report delivery.'],
    ['💊','Pharmacy Management','Inventory, expiry tracking, drug interactions, GST billing, supplier management and CDSCO compliance.'],
    ['📱','Telemedicine Platform','Video consultations, digital prescriptions, patient history access and online appointment booking.'],
    ['🤖','AI Diagnostic Support','ML-assisted diagnosis suggestions, medical image analysis and clinical decision support tools.'],
    ['📊','Clinical Analytics','Patient outcome tracking, disease surveillance, readmission risk scoring and operational KPI dashboards.'],
    ['🔗','Health Records Integration','HL7/FHIR-compliant electronic health records with ABHA (Ayushman Bharat) integration support.'],
  ],
  'challenges'=>[
    ['Paper-Based Records','Patient records stored in physical files — impossible to retrieve quickly and easy to lose.'],
    ['Billing & Insurance Complexity','Manual billing errors, insurance claim rejections and long patient wait times at discharge.'],
    ['Lab Result Delays','Manual pathology reporting causing delays in diagnosis and treatment decisions.'],
    ['Regulatory Compliance','CDSCO, NABH, PCPNDT and drug licence compliance requiring extensive manual documentation.'],
  ],
  'solutions_to_challenges'=>[
    ['Digital Patient Records (EMR/EHR)','Complete electronic patient records accessible instantly by authorised clinicians across departments.'],
    ['Automated Billing & Claims','Error-free billing with insurance pre-authorisation workflow and TPA integration.'],
    ['Digital Lab Reporting','Auto-calculated results with instant digital delivery via SMS, WhatsApp and patient portal.'],
    ['Built-In Compliance Tools','CDSCO drug tracking, NABH-aligned audit trails and automated regulatory report generation.'],
  ],
  'results'=>[
    ['70%','Faster Patient Discharge','Automated billing and discharge summary generation cut average discharge time from 4 hours to 75 minutes.'],
    ['95%','Lab Report Accuracy','Auto-calculation of reference ranges eliminated manual entry errors in pathology reporting.'],
    ['45%','Revenue Increase','Insurance claim optimisation and billing accuracy recovery increased net revenue significantly.'],
  ],
];
include '../includes/industry-template.php';
include '../includes/footer.php';
?>