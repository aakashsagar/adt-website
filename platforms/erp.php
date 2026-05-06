<?php
$root='../';
$page_title='ERP Solutions – Anantadrishti Technologies';
$page_desc='Enterprise Resource Planning solutions tailored for Indian businesses. Custom ERP development, implementation and support by ADT.';
include '../includes/header.php';
$plat=[
  'title'=>'ERP Solutions',
  'tag'=>'Enterprise Resource Planning · Custom ERP · Implementation',
  'icon'=>'📦',
  'grad'=>'linear-gradient(135deg,#f59e0b,#ef4444)',
  'headline'=>'ERP Solutions Designed<br>for <span class="grad-text">Indian Businesses</span>',
  'hero_sub'=>'Custom ERP development and implementation that fits your exact business processes — not generic software that forces you to change how you work.',
  'overview_title'=>'ERP That Works the Way<br><span class="grad-text">Your Business Works</span>',
  'overview_paras'=>[
    'ADT\'s ERP practice delivers tailored Enterprise Resource Planning solutions that integrate all core business functions — finance, inventory, procurement, sales, HR, production and reporting — into a single unified platform. Unlike off-the-shelf ERP, our solutions are configured and customised to match your actual workflows.',
    'We have delivered ERP implementations for manufacturing companies, trading firms, educational institutions, healthcare groups and government departments across Uttar Pradesh and beyond. Our ERP projects range from 30-user SME deployments to 500-user enterprise rollouts.',
    'Every ERP engagement includes gap analysis, process redesign recommendations, data migration, user training, go-live support and a post-implementation hypercare period — ensuring your team is confident and productive from day one.',
  ],
  'specs'=>[
    ['ERP Modules Available','30+'],
    ['ERP Implementations','80+'],
    ['Avg. Implementation Time','8–16 Weeks'],
    ['Concurrent User Support','Unlimited'],
    ['Data Migration Support','Included'],
    ['Post Go-Live Support','90 Days Hypercare'],
  ],
  'status_msg'=>'ERP systems live · All client instances operational',
  'modules_title'=>'Comprehensive ERP<br><span class="grad-text">Module Library</span>',
  'modules_sub'=>'Mix and match modules to build the exact ERP your business needs — nothing more, nothing less.',
  'modules'=>[
    ['💰','Financial Accounting','General ledger, accounts payable/receivable, bank reconciliation, GST filing and MIS reports.'],
    ['📦','Inventory Management','Stock tracking, multi-warehouse, batch/serial numbers, reorder points and stock valuation.'],
    ['🛒','Purchase Management','Supplier management, PO workflow, GRN, quality inspection and supplier performance tracking.'],
    ['📤','Sales Management','Quotation, sales order, dispatch, invoice, collection and customer relationship tracking.'],
    ['🏭','Production & MRP','Bill of materials, production planning, work orders, job costing and capacity planning.'],
    ['👥','HR & Payroll','Employee master, attendance, leave, payroll with PF/ESI/TDS and salary slip generation.'],
    ['🎯','CRM','Lead tracking, follow-up reminders, pipeline management and customer communication history.'],
    ['📊','MIS & Reporting','50+ standard reports, custom report builder and scheduled email report delivery.'],
    ['📱','Mobile Access','Mobile apps for approvals, expense claims, field sales and inventory counts.'],
    ['🔗','Tally Integration','Two-way Tally sync for organisations that want ERP operations with Tally-based accounting.'],
    ['📋','Document Management','Digital document storage, approval workflows and compliance document tracking.'],
    ['🔒','Role-Based Access','Fine-grained permission control ensuring users see and do only what their role requires.'],
  ],
  'for_title'=>'ERP for Every<br><span class="grad-text2">Industry & Size</span>',
  'for_sub'=>'From 10-person businesses to 500-person enterprises — ERP scales with you.',
  'for_cards'=>[
    ['🏭','Manufacturing','Production planning, MRP, job costing and quality control for discrete and process manufacturers.'],
    ['🛒','Trading & Distribution','Multi-branch inventory, scheme management, distributor portal and sales force automation.'],
    ['🏗️','Construction','Project costing, subcontractor billing, material management and progress billing.'],
    ['🎓','Education','Fee management, timetable, exam results, library and hostel management for schools and colleges.'],
    ['🏥','Healthcare','Hospital management, OPD/IPD, pharmacy, lab and billing for clinics and hospitals.'],
    ['🏛️','Government','Grant management, asset tracking, procurement compliance and audit-ready reporting.'],
  ],
  'techs'=>['Python','Django','React','PostgreSQL','Redis','Celery','Docker','Azure','REST API','Tally API','Razorpay','WhatsApp API','Barcode/QR','PDF Generation','Excel Export','Android/iOS'],
];
include '../includes/platform-template.php';
include '../includes/footer.php';
?>
