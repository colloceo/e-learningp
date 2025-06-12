<?php include_once("../includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A modern e-learning platform tailored for Kenyan high schools. Learn, quiz, and track academic progress online.">
  <meta name="keywords" content="Kenyan e-learning, high school LMS, online education Kenya, digital learning, student platform, Kenyan schools, quizzes, assignments">
  <meta name="author" content="Kenya High School E-Learning">

  <meta property="og:title" content="Kenya's Premier E-Learning Platform for High Schools" />
  <meta property="og:description" content="Digital courses, quizzes, and assignments for students and teachers in Kenya." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://example.com" />
  <meta property="og:image" content="https://example.com/assets/images/elearning-cover.jpg" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Kenyan High School E-Learning Platform" />
  <meta name="twitter:description" content="Learn anywhere, anytime with our e-learning tools." />
  <meta name="twitter:image" content="https://example.com/assets/images/elearning-cover.jpg" />

  <link rel="stylesheet" href="../css/main.css" />
  <title>Kenya High School E-Learning</title>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "Kenya High School E-Learning",
    "url": "https://example.com",
    "logo": "https://example.com/assets/images/logo.png",
    "sameAs": [
      "https://facebook.com/kenyaelearning",
      "https://twitter.com/kenyaelearning"
    ],
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Nairobi",
      "addressCountry": "KE"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+254-700-123456",
      "contactType": "Customer Support",
      "availableLanguage": ["English", "Swahili"]
    },
    "description": "An interactive e-learning platform for Kenyan high schools offering courses, assignments, quizzes, and academic tracking."
  }
  </script>
</head>
<body>
  <?php include_once("../includes/navbar.php"); ?>

  <main class="hero-section">
    <h1>Welcome to Kenya's Premier High School E-Learning Platform</h1>
    <p>Empowering students and teachers across Kenya with interactive courses, real-time feedback, and personalized learning experiences.</p>
    <a href="register.php" class="cta-button">Get Started</a>
  </main>

  <section class="features">
    <h2>Why Choose Us?</h2>
    <ul>
      <li>✔ Aligned with Kenyan curriculum</li>
      <li>✔ Real-time student-teacher interaction</li>
      <li>✔ Interactive quizzes and assignments</li>
      <li>✔ Mobile-friendly design</li>
    </ul>
  </section>

  <section class="blog-preview">
    <h2>From Our Blog</h2>
    <article>
      <h3><a href="/blog/why-e-learning-dominates-kenya.php">Why E-Learning Dominates Kenya's Education System</a></h3>
      <p>Discover how digital classrooms are reshaping the future of education for students across Kenya.</p>
    </article>
  </section>

  <?php include_once("../includes/footer.php"); ?>
</body>
</html>
