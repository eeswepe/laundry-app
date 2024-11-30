<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Laundry Service Landing Page
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <header class="bg-blue-500 shadow-md">
   <div class="container mx-auto px-6 py-3 flex justify-between items-center">
    <div class="text-2xl font-bold text-white">
     LaundryService
    </div>
    <div class="block md:hidden">
     <button class="text-white focus:outline-none" id="menu-button">
      <i class="fas fa-bars">
      </i>
     </button>
    </div>
    <nav class="hidden md:flex space-x-4" id="menu">
     <a class="text-white hover:text-gray-200" href="#">
      Home
     </a>
     <a class="text-white hover:text-gray-200" href="#">
      Services
     </a>
     <a class="text-white hover:text-gray-200" href="#">
      Pricing
     </a>
     <a class="text-white hover:text-gray-200" href="#">
      Contact
     </a>
    </nav>
   </div>
   <div class="md:hidden" id="mobile-menu" style="display: none;">
    <nav class="px-6 py-3 space-y-2">
     <a class="block text-white hover:text-gray-200" href="#">
      Home
     </a>
     <a class="block text-white hover:text-gray-200" href="#">
      Services
     </a>
     <a class="block text-white hover:text-gray-200" href="#">
      Pricing
     </a>
     <a class="block text-white hover:text-gray-200" href="#">
      Contact
     </a>
    </nav>
   </div>
  </header>
  <section class="bg-blue-100 h-screen flex items-center">
   <div class="container mx-auto px-6 text-center">
    <h1 class="text-4xl font-bold text-blue-800">
     Professional Laundry Service
    </h1>
    <p class="mt-4 text-blue-700">
     We take care of your clothes with the utmost care and precision.
    </p>
    <button class="mt-6 px-6 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-500">
     Get Started
    </button>
   </div>
  </section>
  <section class="container mx-auto px-6 py-16">
   <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
     <img alt="Icon representing washing machine" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/xgCBRwAlL2olMFgzS9BG59YwY0oQAO7UQVRCM6HjgVZefC2TA.jpg" width="100"/>
     <h2 class="text-xl font-bold text-blue-800">
      Wash &amp; Fold
     </h2>
     <p class="mt-2 text-blue-700">
      We wash, dry, and fold your clothes with care.
     </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
     <img alt="Icon representing dry cleaning" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/c5G9eKamCNS2YaUtyFyEuhSHTaCrzkJCaX3Neif83xw7fLYPB.jpg" width="100"/>
     <h2 class="text-xl font-bold text-blue-800">
      Dry Cleaning
     </h2>
     <p class="mt-2 text-blue-700">
      Professional dry cleaning for your delicate garments.
     </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
     <img alt="Icon representing ironing" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/MYXfCfCYh0p1JETf5drvjeBeipJrkiZYe5VCw6CZxdppffC2TA.jpg" width="100"/>
     <h2 class="text-xl font-bold text-blue-800">
      Ironing
     </h2>
     <p class="mt-2 text-blue-700">
      Expert ironing to keep your clothes wrinkle-free.
     </p>
    </div>
   </div>
  </section>
  <section class="bg-blue-100 py-16">
   <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-blue-800">
     Our Pricing
    </h2>
    <p class="mt-4 text-blue-700">
     Affordable and transparent pricing for all our services.
    </p>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-6 rounded-lg shadow-md">
      <h3 class="text-xl font-bold text-blue-800">
       Basic
      </h3>
      <p class="mt-2 text-blue-700">
       $10 per load
      </p>
      <ul class="mt-4 text-blue-700">
       <li>
        Wash &amp; Fold
       </li>
       <li>
        Next Day Delivery
       </li>
      </ul>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <h3 class="text-xl font-bold text-blue-800">
       Standard
      </h3>
      <p class="mt-2 text-blue-700">
       $20 per load
      </p>
      <ul class="mt-4 text-blue-700">
       <li>
        Wash &amp; Fold
       </li>
       <li>
        Dry Cleaning
       </li>
       <li>
        Next Day Delivery
       </li>
      </ul>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <h3 class="text-xl font-bold text-blue-800">
       Premium
      </h3>
      <p class="mt-2 text-blue-700">
       $30 per load
      </p>
      <ul class="mt-4 text-blue-700">
       <li>
        Wash &amp; Fold
       </li>
       <li>
        Dry Cleaning
       </li>
       <li>
        Ironing
       </li>
       <li>
        Same Day Delivery
       </li>
      </ul>
     </div>
    </div>
   </div>
  </section>
  <section class="container mx-auto px-6 py-16">
   <h2 class="text-3xl font-bold text-blue-800 text-center">
    Customer Testimonials
   </h2>
   <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
     <img alt="Portrait of a satisfied customer" class="mx-auto mb-4 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/KQXAetJUXT1TUqGk2DgUCzH1kaSZh6rRfrWAbGR3yeD0fLYPB.jpg" width="100"/>
     <p class="text-blue-700">
      "Excellent service! My clothes have never been cleaner."
     </p>
     <p class="mt-2 text-blue-800 font-bold">
      - John Doe
     </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
     <img alt="Portrait of a happy customer" class="mx-auto mb-4 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/VpVmN1UKN5qjI5e7HtZaLJfQeuZKjlV9AsEjeW2gcbNvfXweE.jpg" width="100"/>
     <p class="text-blue-700">
      "Fast and reliable. Highly recommend!"
     </p>
     <p class="mt-2 text-blue-800 font-bold">
      - Jane Smith
     </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
     <img alt="Portrait of a pleased customer" class="mx-auto mb-4 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/0JfNriJ3feFJvpBJ89Cc0SyT0tlP1vNYoYSoufhP1uYhfXweE.jpg" width="100"/>
     <p class="text-blue-700">
      "Great prices and excellent quality."
     </p>
     <p class="mt-2 text-blue-800 font-bold">
      - Emily Johnson
     </p>
    </div>
   </div>
  </section>
  <section class="container mx-auto px-6 py-16">
   <h2 class="text-3xl font-bold text-blue-800 text-center">
    Find Us Here
   </h2>
   <div class="mt-8">
    <iframe allowfullscreen="" class="w-full h-96 rounded-lg shadow-md" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=New+York,NY" style="border:0">
    </iframe>
   </div>
  </section>
  <footer class="bg-blue-600 py-6">
   <div class="container mx-auto px-6 text-center text-white">
    <p>
     © 2023 LaundryService. All rights reserved.
    </p>
    <div class="mt-4 space-x-4">
     <a class="text-white hover:text-gray-200" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a class="text-white hover:text-gray-200" href="#">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a class="text-white hover:text-gray-200" href="#">
      <i class="fab fa-instagram">
      </i>
     </a>
     <a class="text-white hover:text-gray-200" href="#">
      <i class="fab fa-linkedin-in">
      </i>
     </a>
    </div>
   </div>
  </footer>
  <script>
   document.getElementById('menu-button').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        if (menu.style.display === 'none' || menu.style.display === '') {
            menu.style.display = 'block';
        } else {
            menu.style.display = 'none';
        }
    });
  </script>
 </body>
</html>