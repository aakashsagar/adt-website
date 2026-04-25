<?php
$root='../';
$page_title='Food & Beverage Technology Solutions – AnantaDrishti';
$page_desc='Restaurant management, POS, kitchen display, inventory, delivery platform integration and cloud kitchen software by AnantaDrishti Technologies.';
include '../includes/header.php';
$ind=[
  'title'=>'Food & Beverage',
  'icon'=>'🍽️',
  'grad'=>'linear-gradient(135deg,#f59e0b,#ef4444)',
  'headline'=>'Technology That Keeps<br>Your Kitchen <span class="grad-text">Running</span>',
  'hero_sub'=>'From smart POS and kitchen display systems to Swiggy/Zomato sync and food cost analytics — ADT builds restaurant technology that cuts waste, speeds service and grows revenue.',
  'overview_title'=>'Full-Stack F&B Technology<br><span class="grad-text">Solutions</span>',
  'overview_sub'=>'Purpose-built technology for restaurants, QSRs, cloud kitchens, bakeries, dhabas, sweet shops, catering companies and hotel F&B operations.',
  'solutions'=>[
    ['🖥️','Restaurant POS & Billing','Table management, KOT printing, split bills, multiple payment modes, daily reports and GST billing.'],
    ['👨‍🍳','Kitchen Display System (KDS)','Digital kitchen screens replacing paper KOTs — faster, clearer and trackable for every order.'],
    ['📦','Inventory & Recipe Management','Ingredient-level inventory with recipe costing, waste tracking and automated reorder alerts.'],
    ['🛵','Delivery Platform Sync','Single dashboard managing orders from Swiggy, Zomato, Magicpin and your own website simultaneously.'],
    ['📱','Online Ordering Website & App','Branded online ordering with contactless table QR code menu, payment and order tracking.'],
    ['📊','F&B Analytics','Food cost %, best-selling items, wastage analysis, peak hour reports and server performance tracking.'],
    ['🏭','Cloud Kitchen Management','Multi-brand, multi-kitchen operations management with brand-wise P&L and aggregator reconciliation.'],
    ['🎁','Loyalty & CRM','Customer loyalty points, birthday offers, repeat visit tracking and WhatsApp-based re-engagement campaigns.'],
  ],
  'challenges'=>[
    ['Order Errors & Kitchen Chaos','Handwritten KOTs misread by kitchen staff causing wrong orders, wastage and customer complaints.'],
    ['No Food Cost Control','No visibility into per-dish ingredient consumption, wastage and actual food cost percentage.'],
    ['Aggregator Commission Pain','Swiggy and Zomato taking 20–30% commission with no visibility into true profitability per channel.'],
    ['Manual Cash Reconciliation','Daily cash, card and UPI reconciliation done manually — time-consuming and error-prone.'],
  ],
  'solutions_to_challenges'=>[
    ['Digital KOT & KDS System','Digital kitchen display eliminates handwriting errors — every order is clear, timestamped and trackable.'],
    ['Recipe-Based Inventory','Real-time food cost calculation per dish based on actual ingredient usage versus recipe standard.'],
    ['Aggregator Profit Dashboard','Channel-wise P&L showing true profit after commission, packaging and delivery costs per platform.'],
    ['Automated Daily Reconciliation','All payment modes reconciled automatically — cash, card, UPI, aggregator payouts — in one report.'],
  ],
  'results'=>[
    ['35%','Reduction in Food Waste','Recipe-level inventory tracking helped a restaurant chain cut ingredient wastage by 35% in 3 months.'],
    ['22%','Improvement in Table Turnover','KDS and order management system reduced service time, turning tables faster during peak hours.'],
    ['50%','Faster Order Processing','Digital KOT system eliminated lost tickets and reduced average order-to-serve time significantly.'],
  ],
];
include '../includes/industry-template.php';
include '../includes/footer.php';
?>