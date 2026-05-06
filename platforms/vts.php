<?php
$root='../';
$page_title='Vehicle Tracking System (VTS) – Anantadrishti Technologies';
$page_desc='GPS/GSM based Vehicle Tracking System with Accident Detection Alert. Real-time fleet monitoring dashboard built by Anantadrishti Technologies.';
include '../includes/header.php';
$plat=[
  'title'=>'Vehicle Tracking System (VTS)',
  'tag'=>'GPS · GSM · Real-Time Fleet Monitoring',
  'icon'=>'🚗',
  'grad'=>'linear-gradient(135deg,#1a56db,#06d6a0)',
  'headline'=>'Real-Time <span class="grad-text">Vehicle Tracking</span><br>& Fleet Intelligence',
  'hero_sub'=>'ADT\'s proprietary GPS/GSM-based Vehicle Tracking System with Accident Detection Alert. Monitor your entire fleet live, receive instant alerts, and reduce operational costs.',
  'overview_title'=>'Complete Fleet Visibility<br><span class="grad-text">in Real Time</span>',
  'overview_paras'=>[
    'ADT\'s Vehicle Tracking System (VTS) is a proprietary IoT product built on GPS and GSM technology that enables real-time tracking of vehicles through Latitude/Longitude GPS coordinates. The platform provides a comprehensive fleet management dashboard accessible from desktop and mobile devices.',
    'Beyond basic location tracking, VTS includes an Accident Detection Alert System that automatically detects sudden impacts via accelerometer data and immediately notifies fleet managers and designated emergency contacts via SMS and automated calls.',
    'VTS is deployed for logistics companies, school bus fleets, government vehicle pools and personal vehicle monitoring across Uttar Pradesh. The platform scales from 10 to 10,000+ vehicles on a single deployment.',
  ],
  'specs'=>[
    ['Tracking Accuracy','±2–5 metres (GPS)'],
    ['Update Frequency','Every 10–30 seconds'],
    ['Alert Delivery','<5 seconds (SMS)'],
    ['Data Retention','12 months history'],
    ['Platform Access','Web + Mobile App'],
    ['Deployment Model','Cloud SaaS / On-premise'],
  ],
  'status_msg'=>'Live tracking active · All systems operational',
  'modules_title'=>'Everything You Need to<br><span class="grad-text">Manage Your Fleet</span>',
  'modules_sub'=>'A complete suite of fleet management tools built into a single platform.',
  'modules'=>[
    ['📍','Live Map Tracking','Real-time vehicle positions on Google Maps with heading, speed and status indicators.'],
    ['🚨','Accident Detection','Accelerometer-based crash detection with automatic SMS/call alerts to managers and emergency contacts.'],
    ['📊','Trip History & Reports','Complete trip logs, distance travelled, idle time, halt reports and driver behaviour analytics.'],
    ['⚡','Speed Alerts','Configurable speed limit alerts with real-time notifications when vehicles exceed set thresholds.'],
    ['🌍','Geo-Fencing','Create virtual zones — receive alerts when vehicles enter or exit defined geographic boundaries.'],
    ['📱','Mobile App','Driver and manager mobile apps for Android and iOS with offline data caching.'],
    ['🔋','Engine Status','Ignition on/off events, engine hours tracking and fuel consumption estimation.'],
    ['🗓️','Maintenance Scheduler','Mileage-based service reminders, tyre rotation alerts and document expiry notifications.'],
    ['👨‍💼','Driver Management','Driver assignment, licence expiry tracking, score cards and performance analytics.'],
    ['🔒','Anti-Theft Alerts','Unauthorised movement detection with immediate SMS alerts when vehicles move without ignition.'],
    ['📈','Fleet Analytics','Aggregated fleet performance dashboards — utilisation, efficiency and cost per kilometre.'],
    ['🔗','API Access','REST API for integrating VTS data with your ERP, TMS or third-party fleet management software.'],
  ],
  'for_title'=>'Built for Every<br><span class="grad-text2">Fleet Type</span>',
  'for_sub'=>'From school buses to heavy logistics — VTS scales to meet your needs.',
  'for_cards'=>[
    ['🚚','Logistics & Transport','Monitor truck fleets, optimise routes, track delivery ETAs and reduce fuel costs with real-time data.'],
    ['🏫','School Bus Fleets','Give parents real-time bus location updates and ensure student safety with stop-by-stop tracking.'],
    ['🏛️','Government Vehicles','Track government vehicle pools to ensure proper utilisation, prevent misuse and automate reporting.'],
    ['🏗️','Construction Equipment','Monitor earth-movers, cranes and other heavy equipment at remote project sites across multiple cities.'],
    ['🚑','Emergency Services','Track ambulance, police and fire vehicle fleets with priority routing and response time analytics.'],
    ['🛵','Last-Mile Delivery','Track delivery bikes and three-wheelers for e-commerce, food delivery and courier companies.'],
  ],
  'techs'=>['GPS Module (u-blox)','GSM/4G Modem','MQTT','Python','Django','React','PostgreSQL','Redis','Google Maps API','Kafka','Docker','Azure IoT Hub','Android SDK','iOS (Swift)','REST API'],
];
include '../includes/platform-template.php';
include '../includes/footer.php';
?>
