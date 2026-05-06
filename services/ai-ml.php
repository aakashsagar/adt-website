<?php
$root = '../';
$page_title = 'AI & Machine Learning – Anantadrishti Technologies';
$page_desc = 'End-to-end AI and ML solutions — NLP, Computer Vision, Deep Learning, Predictive Analytics. Built by experts with 12+ years in AI.';
include '../includes/header.php';
$svc = [
  'title'   => 'AI & Machine Learning',
  'tag'     => 'Deep Learning · NLP · Computer Vision · MLOps',
  'icon'    => '🤖',
  'grad'    => 'linear-gradient(135deg,#7c3aed,#06d6a0)',
  'color'   => '#7c3aed',
  'headline'=> 'Intelligent <span class="grad-text">AI & ML Solutions</span><br>Built to Deliver Results',
  'hero_sub'=> 'ADT\'s AI/ML team — led by experts with 12+ years in Machine Learning, Deep Learning, NLP and Computer Vision — delivers production-grade AI that creates measurable business impact.',
  'overview_title' => 'From Research to Production:<br><span class="grad-text">Real AI That Works</span>',
  'overview_paras' => [
    'Anantadrishti\'s AI & Machine Learning practice provides end-to-end delivery of machine learning solutions — from problem framing and data engineering through model development, evaluation and production deployment. Our Managing Director brings over 12 years of hands-on expertise in ML, AI, Deep Learning, Neural Networks, NLP and Computer Vision.',
    'We do not build demos — we build AI systems that run in production, handling real data at scale. Our models are deployed on cloud infrastructure with monitoring, retraining pipelines and version control so they improve over time.',
    'Whether you need a recommendation engine, a computer vision quality inspection system, a natural language chatbot or a predictive analytics platform, ADT has the expertise to deliver it — and the experience to know when AI is the right solution and when it is not.',
  ],
  'key_points' => [
    ['🧠','Deep Learning Models','Custom neural networks for classification, detection, segmentation and generation tasks.'],
    ['💬','Natural Language Processing','Text classification, sentiment analysis, named entity recognition, summarisation and RAG systems.'],
    ['👁️','Computer Vision','Object detection, face recognition, OCR, defect detection and video analytics pipelines.'],
    ['📊','Predictive Analytics','Time-series forecasting, demand prediction, churn modelling and anomaly detection.'],
    ['⚙️','MLOps & Deployment','Model versioning, CI/CD for ML, monitoring, drift detection and automated retraining pipelines.'],
  ],
  'benefits_title' => 'AI Built by Practitioners,<br>Not <span class="grad-text2">Just Researchers</span>',
  'benefits_sub'   => '12+ years of hands-on AI experience means we know what works in production.',
  'benefits' => [
    ['🎯','Business-Problem First','We start with your business problem, not with a model architecture. AI is a means, not the end.'],
    ['📦','End-to-End Delivery','Data pipeline → feature engineering → model training → evaluation → deployment → monitoring. We own it all.'],
    ['🔬','State-of-the-Art Models','Access to the latest architectures — transformers, diffusion models, LLMs, vision models and more.'],
    ['☁️','Cloud-Native Deployment','Models deployed on Azure ML, AWS SageMaker or GCP Vertex AI with auto-scaling and cost control.'],
    ['🔒','Explainable AI','SHAP, LIME and model cards so you understand what your AI is doing and why.'],
    ['🔄','Continuous Improvement','Automated monitoring for data drift, performance degradation and retraining triggers.'],
  ],
  'use_cases' => [
    ['Quality Control Vision','Computer vision system detecting manufacturing defects on a production line — reducing QC costs by 60%.'],
    ['Customer Churn Prediction','ML model predicting customer churn 30 days in advance for a telecom company, enabling proactive retention.'],
    ['Document Intelligent Extraction','NLP pipeline extracting structured data from scanned invoices, contracts and government forms at 95% accuracy.'],
    ['Demand Forecasting','Time-series ML model predicting product demand for a retail chain across 50+ SKUs and 20 locations.'],
    ['AI Chatbot for Healthcare','NLP-powered patient query chatbot for a hospital group handling 5,000+ queries per day in Hindi and English.'],
    ['Anomaly Detection in IoT','Unsupervised anomaly detection on industrial sensor streams detecting equipment failure 48 hours in advance.'],
  ],
  'techs' => ['Python','PyTorch','TensorFlow','Keras','Scikit-learn','Hugging Face Transformers','LangChain','OpenAI API','OpenCV','YOLOv8','FAISS','Pandas','NumPy','MLflow','DVC','FastAPI','Docker','Azure ML','AWS SageMaker','Weights & Biases'],
  'process' => [
    ['Problem Framing','Define the ML problem, success metrics, data requirements and business value clearly.'],
    ['Data Assessment & Pipeline','Audit available data, design collection/labelling pipelines and build reproducible data workflows.'],
    ['Exploratory Analysis','EDA, feature engineering, baseline models and hypothesis testing to validate the approach.'],
    ['Model Development','Train, tune and evaluate models using rigorous cross-validation and held-out test sets.'],
    ['Productionisation','Build APIs, containerise models and deploy to cloud with monitoring and logging infrastructure.'],
    ['Monitor & Retrain','Track production performance, detect drift and run automated retraining pipelines on schedule.'],
  ],
  'stats' => [['AI Projects Delivered','50+'],['Avg. Accuracy Improvement','35%'],['Model Serving Latency','<200ms'],['AI Experience (MD)','12+ Years'],['Production Models Running','30+']],
];
include '../includes/service-template.php';
include '../includes/footer.php';
?>