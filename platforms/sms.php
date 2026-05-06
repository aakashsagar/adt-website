<?php
$root='../';
$page_title='Smart Management System (SMS-ML) – Anantadrishti Technologies';
$page_desc='ML-powered business management for medical stores, pathology labs, retail jewellery, dairy, cold storage, clinics, hotels and more.';
include '../includes/header.php';
$plat=[
  'title'=>'Smart Management System (SMS-ML)',
  'tag'=>'ML-Powered · Multi-Industry · Cloud ERP',
  'icon'=>'🏥',
  'grad'=>'linear-gradient(135deg,#06d6a0,#0ea5e9)',
  'headline'=>'<span class="grad-text2">AI-Powered</span> Business Management<br>for Every Industry',
  'hero_sub'=>'ADT\'s Smart Management System with Machine Learning — a comprehensive, cloud-based business management platform serving medical stores, pathology labs, retail jewellery, dairies, cold storage, clinics, hotels, restaurants and more.',
  'overview_title'=>'One Platform,<br><span class="grad-text">Unlimited Industries</span>',
  'overview_paras'=>[
    'SMS-ML is ADT\'s flagship multi-industry business management platform that combines the power of traditional ERP with Machine Learning intelligence. Unlike generic ERP software, SMS-ML is purpose-built for the Indian SME market with modules specifically designed for the unique workflows of each industry it serves.',
    'The ML layer continuously learns from your business data to deliver intelligent features: automatic stock reorder suggestions, demand forecasting, anomaly detection in billing, customer churn prediction and automated report generation in plain language. Business owners get the insights of a data scientist without needing one on staff.',
    'SMS-ML runs on the cloud (or on-premise for regulated industries) and is accessible from any device — desktop, tablet or mobile. Setup takes 2–5 days, not months, and our team provides on-site training and ongoing support.',
  ],
  'specs'=>[
    ['Industries Supported','12+'],
    ['Deployment Time','2–5 Days'],
    ['Platform','Cloud + On-Premise'],
    ['Concurrent Users','Unlimited'],
    ['Data Backup','Daily Automated'],
    ['ML Model Updates','Monthly'],
  ],
  'status_msg'=>'SMS-ML deployed · All industry modules active',
  'modules_title'=>'Industry-Specific<br><span class="grad-text">Module Suite</span>',
  'modules_sub'=>'Each module is purpose-built for the specific workflows, regulations and reporting needs of its industry.',
  'modules'=>[
    ['💊','Medical Store Management','Inventory, billing, expiry tracking, GST, supplier management and drug licence compliance.'],
    ['🔬','Pathology Lab System','Sample management, test result entry, report generation, patient portal and equipment calibration logs.'],
    ['💍','Retail Jewellery Management','Gold/silver rate integration, ornament catalogue, making charges, hallmarking and customer layaway.'],
    ['🥛','Dairy Management','Milk collection, fat/SNF testing, procurement payment, society management and government reporting.'],
    ['❄️','Cold Storage Management','Chamber management, consignment tracking, temperature logs, billing and gate pass automation.'],
    ['🏨','Hotel Management System','Reservation, check-in/out, room service, billing, housekeeping and OTA channel integration.'],
    ['🍽️','Restaurant Management','Table orders, KOT printing, inventory, recipe costing, Swiggy/Zomato sync and daily sales reports.'],
    ['🏪','Grocery & FMCG','Barcode POS, multi-branch inventory, scheme management, credit party ledger and GST filing export.'],
    ['🚗','Automobile Dealer','Vehicle inventory, loan management, insurance tracking, service scheduling and RC transfer.'],
    ['🛒','General Retail POS','Billing, inventory, customer loyalty, supplier management and branch consolidation.'],
    ['🤖','ML Demand Forecasting','AI-powered stock reorder suggestions, seasonal demand prediction and slow-moving item alerts.'],
    ['📊','Smart Analytics','Auto-generated daily/weekly/monthly reports with natural language insights delivered to WhatsApp.'],
  ],
  'for_title'=>'Designed for<br><span class="grad-text2">Indian SMEs</span>',
  'for_sub'=>'Built ground-up for the Indian market — GST-compliant, Hindi language support, WhatsApp integration.',
  'for_cards'=>[
    ['🏥','Healthcare & Pharma','Medical stores, pathology labs, clinics and diagnostic centres with CDSCO/Drug licence compliance.'],
    ['🛒','Retail & Trading','Grocery, FMCG, jewellery, furniture, optical and electronics retailers across India.'],
    ['🍴','Hospitality & Food','Hotels, restaurants, dhabas, bakeries, sweet shops and cloud kitchens.'],
    ['🥛','Agriculture & Dairy','Dairy cooperatives, cold storage units, Sabzi Mandis and agri-input dealers.'],
  ],
  'techs'=>['Python','Django','React','React Native','PostgreSQL','Redis','ML (Scikit-learn)','TensorFlow Lite','WhatsApp Business API','Tally Integration','GST APIs','Razorpay','Barcode/QR','Docker','Azure','Android/iOS'],
];
include '../includes/platform-template.php';
include '../includes/footer.php';
?>
