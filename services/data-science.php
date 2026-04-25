<?php
$root = '../';
$page_title = 'Data Science & Analytics – AnantaDrishti Technologies';
$page_desc = 'Data Science, Big Data analytics, business intelligence and AI-powered insights. Turn raw data into actionable intelligence with ADT.';
include '../includes/header.php';
$svc = [
  'title'   => 'Data Science & Analytics',
  'tag'     => 'Big Data · BI · Predictive Analytics · AI Insights',
  'icon'    => '📊',
  'grad'    => 'linear-gradient(135deg,#0ea5e9,#7c3aed)',
  'color'   => '#0ea5e9',
  'headline'=> 'Turn Your Data into<br><span class="grad-text">Competitive Advantage</span>',
  'hero_sub'=> 'Enabling businesses to store, analyze, manage and process data using AI, ML and Big Data technologies. ADT transforms raw data into actionable intelligence that drives better decisions.',
  'overview_title' => 'Data-Driven Decisions<br><span class="grad-text">at Every Level</span>',
  'overview_paras' => [
    'ADT\'s Data Science & Analytics practice helps organisations harness the full value of their data assets. We build end-to-end data platforms — from ingestion and storage through transformation, analysis and visualisation — enabling every level of your organisation to make smarter, faster decisions.',
    'Our data engineers and scientists work with structured and unstructured data at any scale. Whether you have gigabytes or petabytes, on-premise databases or cloud data lakes, we design architectures that make your data accessible, reliable and analysis-ready.',
    'Beyond dashboards, ADT builds predictive analytics models, recommendation systems and AI-powered insights engines that turn historical data into forward-looking intelligence for your business.',
  ],
  'key_points' => [
    ['🏗️','Data Platform Architecture','Design and build scalable data warehouses, data lakes and data lakehouses on cloud infrastructure.'],
    ['🔄','ETL & Data Pipelines','Build reliable, monitored data pipelines that move, transform and load data from any source to any destination.'],
    ['📈','Business Intelligence','Power BI, Tableau and custom dashboard development giving every stakeholder real-time visibility.'],
    ['🔮','Predictive Analytics','ML-powered forecasting models predicting sales, demand, churn, risk and operational outcomes.'],
    ['🔍','Data Quality & Governance','Data cataloguing, lineage tracking, quality monitoring and governance frameworks.'],
  ],
  'benefits_title' => 'From Raw Data to<br><span class="grad-text2">Real Intelligence</span>',
  'benefits_sub'   => 'We make data work for your business — not the other way around.',
  'benefits' => [
    ['⚡','Fast Time-to-Insight','Rapid BI dashboard delivery so stakeholders get answers within weeks, not quarters.'],
    ['🔗','Any Data Source','We connect to ERP systems, IoT streams, APIs, flat files, databases and SaaS tools.'],
    ['🎯','Business-Aligned Metrics','KPIs and metrics designed around what your business actually needs to measure and improve.'],
    ['🔒','Data Security','Encryption, access control, audit logs and compliance built into every data platform we build.'],
    ['📱','Mobile-Ready Dashboards','Responsive dashboards accessible from desktop, tablet and mobile for field and executive users.'],
    ['🤖','AI-Augmented Analytics','Natural language queries, automated insight generation and anomaly alerting built into dashboards.'],
  ],
  'use_cases' => [
    ['Retail Sales Analytics','Built a Power BI platform consolidating POS data from 25 stores, enabling daily sales performance tracking and margin analysis.'],
    ['Supply Chain Intelligence','End-to-end supply chain analytics for a manufacturing company reducing stockouts by 28% through demand forecasting.'],
    ['HR People Analytics','People analytics platform tracking attrition risk, performance trends and hiring funnel metrics for an IT company.'],
    ['Financial Reporting Automation','Automated financial consolidation and reporting for a group of 8 companies, reducing month-end close from 10 days to 2.'],
    ['Patient Health Analytics','Clinical data analytics for a hospital network identifying high-risk patients and optimising treatment pathways.'],
    ['Customer 360 Platform','Unified customer data platform aggregating CRM, web, app and transaction data for personalised marketing.'],
  ],
  'techs' => ['Python','Pandas','NumPy','Apache Spark','dbt','Apache Airflow','Power BI','Tableau','Metabase','Azure Synapse','AWS Redshift','Google BigQuery','Snowflake','PostgreSQL','MongoDB','Kafka','Delta Lake','MLflow','Scikit-learn','LightGBM'],
  'process' => [
    ['Data Discovery','Audit existing data sources, assess data quality and define the business questions to be answered.'],
    ['Architecture Design','Design the data platform architecture — ingestion, storage, transformation and serving layers.'],
    ['Pipeline Development','Build and test ETL/ELT pipelines with monitoring, alerting and data quality checks.'],
    ['Analytics & Modelling','Develop dashboards, reports and predictive models aligned to business requirements.'],
    ['Deployment & Training','Deploy to production, train business users and set up automated refresh schedules.'],
    ['Ongoing Support','Monitor pipeline health, add new data sources and build additional analytics as needs evolve.'],
  ],
  'stats' => [['Data Projects Delivered','60+'],['Data Sources Integrated','30+'],['Dashboard Users Enabled','2,000+'],['Avg. Insight Delivery','3–6 Weeks'],['Data Volume Handled','Terabyte-scale']],
];
include '../includes/service-template.php';
include '../includes/footer.php';
?>