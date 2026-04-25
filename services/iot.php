<?php // services/iot.php
$root = '../';
$page_title = 'IoT Solutions – AnantaDrishti Technologies';
$page_desc = 'Industrial IoT data processing, GPS vehicle tracking, smart sensor networks and real-time analytics. ADT delivers scalable IoT solutions.';
include '../includes/header.php';
$svc = [
  'title'   => 'IoT Solutions',
  'tag'     => 'Industrial IoT · Smart Sensors · Real-time Analytics',
  'icon'    => '📡',
  'grad'    => 'linear-gradient(135deg,#06d6a0,#0ea5e9)',
  'color'   => '#06d6a0',
  'headline'=> 'Scalable <span class="grad-text2">IoT Solutions</span><br>for the Connected World',
  'hero_sub'=> 'From GPS vehicle tracking to industrial machine monitoring — ADT builds IoT data pipelines that process millions of events daily with near real-time analytics.',
  'overview_title' => 'Connecting the Physical and<br><span class="grad-text">Digital Worlds</span>',
  'overview_paras' => [
    'ADT\'s IoT practice delivers scalable and extensible IoT data processing pipelines for industrial IoT-enabled machineries, vehicles, smart buildings and consumer devices. We specialise in high-volume data ingestion, real-time processing and actionable analytics at the edge and in the cloud.',
    'Our IoT team has deep expertise in GPS/GSM integration, MQTT protocols, embedded firmware, Raspberry Pi / Arduino platforms and cloud IoT services including AWS IoT Core and Azure IoT Hub. We have built and deployed our own Vehicle Tracking System (VTS) product serving clients across Uttar Pradesh.',
    'Whether you need a complete IoT product built from scratch or want to add intelligence to existing machinery, ADT\'s IoT engineers bring both hardware-level and cloud-level expertise to every engagement.',
  ],
  'key_points' => [
    ['📡','High-Volume Data Ingestion','MQTT-based pipelines handling millions of sensor events per day with reliable delivery guarantees.'],
    ['⚡','Near Real-Time Processing','Stream processing with sub-second latency for time-sensitive industrial and logistics applications.'],
    ['🚗','GPS/GSM Integration','Full GPS vehicle tracking with Accident Detection Alert System — as deployed in ADT\'s own VTS product.'],
    ['🌐','Cloud IoT Integration','Azure IoT Hub, AWS IoT Core and Google Cloud IoT integration for enterprise-grade deployments.'],
    ['📊','Edge Analytics','On-device processing and analytics for low-latency decisions without cloud round-trips.'],
  ],
  'benefits_title' => 'Why Businesses Choose ADT<br>for <span class="grad-text2">IoT Projects</span>',
  'benefits_sub'   => 'We\'ve built our own IoT products — so we understand the challenges from the inside out.',
  'benefits' => [
    ['🔧','Hardware + Software','We handle both — embedded firmware and cloud backend — so there are no integration gaps.'],
    ['📈','Proven Scale','Our VTS platform handles real-time tracking for hundreds of vehicles simultaneously.'],
    ['🛡️','Secure by Design','TLS encryption, device authentication and secure OTA updates built into every deployment.'],
    ['⚙️','Protocol Expertise','MQTT, CoAP, HTTP, Modbus, OPC-UA — we work across all major IoT protocols.'],
    ['📱','Dashboard & Alerts','Custom dashboards, threshold-based alerts and mobile notifications for field teams.'],
    ['🔄','OTA Updates','Over-the-air firmware updates for remote device management without physical access.'],
  ],
  'use_cases' => [
    ['Fleet Vehicle Tracking','Real-time GPS tracking for a logistics company\'s 300-vehicle fleet with route optimisation and driver behaviour analytics.'],
    ['Industrial Machine Monitoring','IoT sensors on CNC machines tracking vibration, temperature and cycle counts to predict maintenance needs.'],
    ['Cold Chain Monitoring','Temperature and humidity monitoring for pharmaceutical cold storage with automated CPCB compliance reporting.'],
    ['Smart Agriculture','Soil moisture, weather and crop health sensors with automated irrigation control for a UP farming cooperative.'],
    ['Energy Management','Smart metering and energy consumption analytics for a commercial building complex in Lucknow.'],
    ['Accident Detection System','GPS + accelerometer-based accident detection with instant SMS/call alerts to fleet managers and emergency contacts.'],
  ],
  'techs' => ['MQTT','Python','C/C++','Raspberry Pi','Arduino','ESP32','GPS/GSM Modules','AWS IoT Core','Azure IoT Hub','Node-RED','InfluxDB','Grafana','Docker','PostgreSQL','React','FastAPI','Kafka','Modbus','OPC-UA'],
  'process' => [
    ['Use-Case Definition','Define the IoT use case, data requirements, latency targets and business KPIs.'],
    ['Hardware Selection','Select the right sensors, microcontrollers and communication modules for the environment.'],
    ['Firmware Development','Write and test embedded firmware for data capture, local processing and secure transmission.'],
    ['Cloud Pipeline Build','Build MQTT ingestion pipeline, stream processor and time-series database on cloud infrastructure.'],
    ['Dashboard & Alerts','Develop real-time monitoring dashboards and configurable alert rules for field teams.'],
    ['Deployment & Monitoring','Deploy devices, onboard to cloud platform and set up 24/7 monitoring and alerting.'],
  ],
  'stats' => [['IoT Devices Managed','1,000+'],['Data Points Processed Daily','10M+'],['Latency Target','<500ms'],['IoT Products Built','3'],['Uptime SLA','99.9%']],
];
include '../includes/service-template.php';
include '../includes/footer.php';
?>