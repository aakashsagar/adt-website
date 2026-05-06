<?php
$root='../';
$page_title='MS Azure Integration – Anantadrishti Technologies';
$page_desc='Microsoft Azure deployment, integration and managed services. ADT is an Azure specialist delivering AI services, DevOps, AKS and enterprise cloud.';
include '../includes/header.php';
$plat=[
  'title'=>'MS Azure Integration',
  'tag'=>'Azure · AI Services · DevOps · AKS · Enterprise Cloud',
  'icon'=>'☁️',
  'grad'=>'linear-gradient(135deg,#0078d4,#0ea5e9)',
  'headline'=>'Microsoft Azure —<br><span class="grad-text">Expert Implementation</span> & Management',
  'hero_sub'=>'ADT\'s Azure practice delivers seamless Microsoft Azure deployment, integration and managed services — from initial architecture through AI services, DevOps pipelines and enterprise-grade infrastructure management.',
  'overview_title'=>'Get the Most from<br><span class="grad-text">Microsoft Azure</span>',
  'overview_paras'=>[
    'Anantadrishti Technologies is a specialist Microsoft Azure implementation and managed services partner for Indian businesses and government organisations. Our Azure-certified engineers have hands-on experience with the full Azure service catalogue — from IaaS and PaaS to Azure AI, Azure DevOps, Azure Kubernetes Service and Azure Integration Services.',
    'We help organisations at every stage of their Azure journey: greenfield deployments building cloud-native from scratch, migration projects moving from on-premise or other clouds, and optimisation engagements for organisations already on Azure but not getting maximum value.',
    'Our managed Azure services include 24/7 monitoring, cost optimisation, security management, patch management and incident response — so your team can focus on innovation while we keep the infrastructure running.',
  ],
  'specs'=>[
    ['Azure Certified Engineers','8+'],
    ['Azure Services Deployed','40+'],
    ['Workloads Managed','150+'],
    ['Avg. Cost Saving Achieved','35%'],
    ['Support Coverage','24/7 Monitoring'],
    ['Uptime Achieved','99.96%'],
  ],
  'status_msg'=>'Azure infrastructure healthy · All services operational',
  'modules_title'=>'Azure Services We<br><span class="grad-text">Specialise In</span>',
  'modules_sub'=>'From compute and storage to AI and DevOps — we cover the Azure services that matter most.',
  'modules'=>[
    ['🖥️','Azure Virtual Machines','IaaS deployment, sizing, availability sets, scale sets and reserved instance optimisation.'],
    ['🐋','Azure Kubernetes Service','AKS cluster design, deployment, autoscaling, Helm chart management and GitOps workflows.'],
    ['🔧','Azure DevOps','CI/CD pipelines, Azure Boards, Artifacts and test automation for your development teams.'],
    ['🤖','Azure AI Services','Cognitive Services, Azure OpenAI, Form Recognizer, Speech-to-Text and Custom Vision integration.'],
    ['🌐','Azure App Service','Web app deployment, custom domains, SSL, autoscaling and slot-based blue/green deployments.'],
    ['🗄️','Azure SQL & Cosmos DB','Managed database deployment, high availability, geo-replication and performance tuning.'],
    ['🔗','Azure Integration Services','Logic Apps, API Management, Service Bus and Event Grid for enterprise integration.'],
    ['🛡️','Azure Security Center','Defender for Cloud, RBAC, Key Vault, Private Endpoints and compliance policy management.'],
    ['📊','Azure Monitor & Log Analytics','Full-stack observability with custom dashboards, alert rules and log query workbooks.'],
    ['💾','Azure Storage & CDN','Blob, Queue, Table, Files, Data Lake and Azure CDN configuration and management.'],
    ['🔄','Azure Backup & DR','Automated backup policies, site recovery and disaster recovery orchestration for business continuity.'],
    ['💰','Azure Cost Management','FinOps practice — budgets, cost alerts, reserved instances and rightsizing recommendations.'],
  ],
  'for_title'=>'Azure for Every<br><span class="grad-text2">Organisation Size</span>',
  'for_sub'=>'Whether you\'re a startup or an enterprise, we right-size Azure for your needs and budget.',
  'for_cards'=>[
    ['🚀','Startups & SMEs','Cost-effective Azure architectures that scale with growth, starting from ₹5,000/month.'],
    ['🏢','Enterprises','Complex, multi-region Azure deployments with full governance, compliance and SLA management.'],
    ['🏛️','Government','Azure Government Cloud and compliance configurations for Indian government data residency requirements.'],
  ],
  'techs'=>['Azure Virtual Machines','AKS','Azure DevOps','Azure OpenAI','Azure Functions','Logic Apps','Azure API Management','Service Bus','Cosmos DB','Azure SQL','Azure Monitor','Defender for Cloud','Terraform','Bicep','Helm','GitHub Actions'],
];
include '../includes/platform-template.php';
include '../includes/footer.php';
?>
