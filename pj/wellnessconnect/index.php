<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to WellnessConnect</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom animation for fade-in */
    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(-40px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeIn 2s ease-out;
    }

    .button-hover:hover {
      background-color: #00796b;
      transform: scale(1.1);
      transition: transform 0.3s, background-color 0.3s ease-out;
    }

    .scroll-animation {
      animation: fadeIn 2.5s ease-out;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-teal-100 to-yellow-50 min-h-screen flex items-center justify-center text-center">

  <!-- Hero Section with background image -->
  <div class="relative bg-cover bg-center h-screen" style="background-image: url('https://via.placeholder.com/1500');">
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <div class="relative z-10 text-white pt-24 px-6 md:px-16">
      <h1 class="text-5xl font-extrabold tracking-wide text-teal-50 mb-6 fade-in">Welcome to WellnessConnect</h1>
      <p class="text-lg mb-8 text-teal-100">A community for wellness, health, and positive growth. Join us on a journey to better living!</p>

      <div class="flex justify-center gap-12">
        <a href="auth/register.php" class="px-8 py-3 text-lg text-white bg-teal-600 rounded-full font-semibold hover:bg-teal-700 transition button-hover">Register</a>
        <a href="auth/login.php" class="px-8 py-3 text-lg text-white bg-teal-600 rounded-full font-semibold hover:bg-teal-700 transition button-hover">Login</a>
      </div>
    </div>
  </div>

  <!-- Scroll Animation Section -->
  <div class="mt-24 mb-8 text-center">
    <h2 class="text-3xl font-bold text-teal-700 mb-4 scroll-animation">Why Join WellnessConnect?</h2>
    <p class="text-lg text-gray-700 mb-6 scroll-animation">WellnessConnect offers support, inspiration, and community for individuals passionate about mental, emotional, and physical health. Come thrive with us!</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 px-6 md:px-20">
      <div class="bg-white p-6 rounded-xl shadow-xl transition transform hover:scale-105 hover:shadow-lg">
        <h3 class="text-xl font-semibold text-teal-700 mb-4">Supportive Community</h3>
        <p class="text-gray-600">Connect with like-minded individuals who are here to motivate and support each other.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-xl transition transform hover:scale-105 hover:shadow-lg">
        <h3 class="text-xl font-semibold text-teal-700 mb-4">Holistic Wellness</h3>
        <p class="text-gray-600">From mental health to fitness, we cover all aspects of your well-being.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-xl transition transform hover:scale-105 hover:shadow-lg">
        <h3 class="text-xl font-semibold text-teal-700 mb-4">Inspiring Content</h3>
        <p class="text-gray-600">Gain access to valuable articles, tips, and resources for personal growth.</p>
      </div>
    </div>
  </div>

</body>
</html>
