<?php
// industries/education.php
$root='../';
$page_title='Education Technology Solutions – Anantadrishti';
$page_desc='LMS, student management, e-learning and AI-powered personalised learning solutions for schools, colleges and coaching institutes.';
include '../includes/header.php';
$ind=[
  'title'=>'Education',
  'icon'=>'🎓',
  'grad'=>'linear-gradient(135deg,#1a56db,#0ea5e9)',
  'headline'=>'Technology That Transforms<br><span class="grad-text">Education</span>',
  'hero_sub'=>'From LMS platforms and student management to AI-powered personalised learning — ADT builds EdTech solutions that improve outcomes for students, teachers and administrators.',
  'overview_title'=>'Complete EdTech Solutions<br><span class="grad-text">for Modern Institutions</span>',
  'overview_sub'=>'ADT delivers purpose-built technology for schools, colleges, coaching institutes, e-learning platforms and training organisations across India.',
  'solutions'=>[
    ['🖥️','Learning Management System (LMS)','Custom LMS with course creation, video hosting, quizzes, assignments, progress tracking and certificates.'],
    ['👨‍🎓','Student Information System','Admissions, enrolment, attendance, timetable, exam management and parent communication portal.'],
    ['💰','Fee Management','Online fee collection, instalment plans, receipts, defaulter tracking and integration with school ERP.'],
    ['📱','Parent & Student App','Mobile app for parents to track attendance, fees, results, homework and communicate with teachers.'],
    ['🤖','AI Personalised Learning','ML-based adaptive learning that adjusts content difficulty and pace to each student\'s ability.'],
    ['🎥','Virtual Classroom','Live video classes with whiteboard, screen sharing, breakout rooms and recording capabilities.'],
    ['📊','Academic Analytics','Student performance dashboards identifying at-risk students early for targeted intervention.'],
    ['📋','Exam & Result Management','Online exam creation, auto-grading, result processing, report cards and board exam preparation tracking.'],
  ],
  'challenges'=>[
    ['Manual Administrative Burden','Mountains of paperwork for admissions, attendance, fees and result processing consuming staff time.'],
    ['Parent Communication Gaps','Parents unaware of child\'s attendance, homework and performance until report card time.'],
    ['One-Size-Fits-All Teaching','Every student learning the same content at the same pace regardless of individual ability.'],
    ['Data Silos','Academic, financial and operational data in separate systems making holistic reporting impossible.'],
  ],
  'solutions_to_challenges'=>[
    ['Unified ERP Platform','Single platform connecting admissions, attendance, fees, academics and communication — eliminating manual work.'],
    ['Real-Time Parent Portal','Parents get live updates on attendance, fees, homework and results via app and WhatsApp.'],
    ['AI Adaptive Learning Engine','Content and assessments that automatically adjust to each student\'s learning level and pace.'],
    ['Integrated Reporting Dashboard','Single dashboard giving principals and management real-time visibility across all functions.'],
  ],
  'results'=>[
    ['60%','Reduction in Admin Time','A Lucknow school group cut administrative workload by 60% after deploying ADT\'s Student ERP.'],
    ['40%','Improvement in Fee Collection','Online fee portal with automated reminders improved collection rates dramatically.'],
    ['3x','Parent Engagement','Parent portal led to 3x more parent-teacher communication compared to previous systems.'],
  ],
];
include '../includes/industry-template.php';
include '../includes/footer.php';
?>