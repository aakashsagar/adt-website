<?php
$root = '../';
$page_title = 'Cloud Services – AnantaDrishti Technologies';
$page_desc = 'Azure, AWS, Google Cloud, IBM Blue Mix cloud services. Infrastructure-on-demand, cloud migration, DevOps and managed cloud for Indian businesses.';
include '../includes/header.php';
$svc = [
  'title'   => 'Cloud Services',
  'tag'     => 'Azure · AWS · GCP · IBM Cloud · DevOps',
  'icon'    => '☁️',
  'grad'    => 'linear-gradient(135deg,#1a56db,#7c3aed)',
  'color'   => '#1a56db',
  'headline'=> 'Cloud Solutions That<br><span class="grad-text">Scale Without Limits</span>',
  'hero_sub'=> 'Azure, AWS, Google Cloud, IBM Blue Mix and more. ADT helps you get the most out of cloud technology with infrastructure-on-demand, seamless migration and ongoing managed services.',
  'overview_title' => 'Enterprise Cloud — Made<br><span class="grad-text">Accessible for Every Business</span>',
  'overview_paras' => [
    'ADT\'s Cloud Services practice helps organisations design, migrate to and manage cloud infrastructure across all major providers — Microsoft Azure, Amazon AWS, Google Cloud Platform and IBM Blue Mix. We are an Azure specialist partner with deep experience in Azure AI services, DevOps pipelines, managed databases and enterprise security.',
    'Our infrastructure-on-demand approach means clients pay only for what they use, with the flexibility to scale up instantly during peak loads and scale down during quiet periods. This transforms IT from a capital expense into a predictable operational expense.',
    'Beyond migration, ADT provides ongoing managed cloud services — monitoring, cost optimisation, security patching, backup management and 24/7 incident response — so your team can focus on building products, not managing servers.',
  ],
  'key_points' => [
    ['☁️','Multi-Cloud Strategy','Design multi-cloud architectures that avoid vendor lock-in and leverage the best of each platform.'],
    ['🚀','Cloud Migration','Lift-and-shift, re-platform or re-architect — we migrate workloads with zero business disruption.'],
    ['⚙️','DevOps & CI/CD','Build automated deployment pipelines with GitHub Actions, Azure DevOps, Jenkins and Terraform.'],
    ['💰','Cost Optimisation','Right-size resources, implement auto-scaling and Reserved Instances to cut cloud bills by 30–50%.'],
    ['🛡️','Cloud Security','IAM design, network segmentation, encryption, compliance and security posture management.'],
  ],
  'benefits_title' => 'Cloud Done Right —<br>Not Just <span class="grad-text2">Moved to the Cloud</span>',
  'benefits_sub'   => 'We ensure your cloud journey creates real business value, not just infrastructure complexity.',
  'benefits' => [
    ['🔵','Azure Specialist','Deep expertise in Microsoft Azure — AI services, Cosmos DB, AKS, Azure Functions and more.'],
    ['📈','99.9% Uptime SLA','Multi-region architecture and auto-failover ensure your applications stay up when it matters.'],
    ['💡','FinOps Practice','Continuous cost monitoring and optimisation keeping your cloud spend under control.'],
    ['🔄','IaC & Automation','All infrastructure defined as code using Terraform or Bicep for reproducible, auditable environments.'],
    ['🔒','Compliance Ready','SOC2, ISO 27001, HIPAA and RBI compliance architectures available from day one.'],
    ['🤝','Managed Services','Optional 24/7 managed cloud operations so your team never has to be on-call for infrastructure.'],
  ],
  'use_cases' => [
    ['Azure Migration for ERP','Migrated a 300-user on-premise ERP to Azure with zero downtime, cutting infrastructure costs by 40%.'],
    ['Multi-Region Disaster Recovery','Designed an active-passive DR architecture on AWS for a fintech startup with 4-hour RTO requirement.'],
    ['Kubernetes Platform','Built a production Kubernetes platform on AKS hosting 12 microservices for an enterprise client.'],
    ['Serverless Data Pipeline','Designed a serverless ETL pipeline using Azure Functions processing 50GB of data nightly.'],
    ['CI/CD for Mobile App','Implemented full CI/CD pipeline reducing deployment time from 2 days to 15 minutes for a mobile app team.'],
    ['Cloud Cost Reduction','Rightsizing and Reserved Instance analysis that cut a startup\'s AWS bill from ₹8L/month to ₹4.5L/month.'],
  ],
  'techs' => ['Microsoft Azure','Amazon AWS','Google Cloud Platform','IBM Blue Mix','Terraform','Ansible','Docker','Kubernetes','Helm','Azure DevOps','GitHub Actions','Jenkins','Prometheus','Grafana','ELK Stack','Vault','Istio','Pulumi','CloudFormation','Bicep'],
  'process' => [
    ['Cloud Assessment','Assess current infrastructure, application dependencies and cloud-readiness of all workloads.'],
    ['Architecture Design','Design target cloud architecture with security, compliance, cost and performance requirements in mind.'],
    ['Migration Planning','Create a detailed migration runbook with rollback plans for each workload in priority order.'],
    ['Migration Execution','Execute migrations in waves, testing each wave before proceeding to the next.'],
    ['Optimisation','Right-size resources, implement auto-scaling policies and set up cost monitoring dashboards.'],
    ['Managed Operations','Ongoing monitoring, patching, backup verification and 24/7 incident response as required.'],
  ],
  'stats' => [['Cloud Providers Supported','4+'],['Workloads Migrated','150+'],['Avg. Cost Reduction','35%'],['Uptime Achieved','99.96%'],['Certified Engineers','8+']],
];
include '../includes/service-template.php';
include '../includes/footer.php';
?>