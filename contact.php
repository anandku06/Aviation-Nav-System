
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - AviationNav</title>
    <!-- <script>
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script> -->
   
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col">
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gray-100/30 backdrop-blur-md py-2">
    <div class="container mx-auto px-4 py-3 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2 transition-opacity hover:opacity-80">
                <img width="30px" src="./Assets/plane.png">
                <span class="font-display text-l font-semibold text-navy-950">AviationNav</span>
            </a>

            <nav class="hidden md:flex space-x-6 ">
                <a href="./index.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Home</a>
                <a href="./about.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">About</a>
                <a href="./Features.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Features</a>
                <a href="./how-to-use.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">How to Use</a>
                <a href="./data-sources.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Data Sources</a>
                <a href="./case-studies.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Case Studies</a>
                <a href="./contact.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700 underline decoration-blue-600 decoration-[3px] underline-offset-4">Contact</a>
            </nav>

            <div class="flex items-center space-x-4">
                <a href="./Login" class="hidden md:inline-flex button-primary px-3 py-2 bg-sky-600 text-white rounded-md hover:bg-sky-700 transition-colors text-sm font-semibold">Log In</a>

                <button type="button" class="md:hidden p-2 text-gray-600 hover:text-sky-600 focus:outline-none">
                    <span class="sr-only">Open main menu</span>
                    <div class="relative h-6 w-6">
                        <span class="absolute block h-0.5 w-6 bg-current transform transition duration-300 ease-in-out"></span>
                        <span class="absolute block h-0.5 w-6 bg-current transform transition duration-300 ease-in-out"></span>
                        <span class="absolute block h-0.5 w-6 bg-current transform transition duration-300 ease-in-out"></span>
                    </div>
                </button>
            </div>
        </div>

        <div class="md:hidden overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
            <div class="py-2 space-y-1 bg-white rounded-lg shadow-lg">
                <a href="./index.html" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Home</a>
                <a href="./about.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">About</a>
                <a href="./Features.html" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Features</a>
                <a href="./how-to-use.html" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">How to Use</a>
                <a href="./data-sources.html" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Data Sources</a>
                <a href="./case-studies.html" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Case Studies</a>
                <a href="./contact.html" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Contact</a>
                <a href="./Login" class="hidden md:inline-flex button-primary px-3 py-2 bg-sky-600 text-white rounded-md hover:bg-sky-700 transition-colors text-sm font-semibold">Log In</a>
            </div>
        </div>
    </div>
</header>
<main class="flex-grow pt-20">
    <div class="text-center py-10">
        <h1 class="text-3xl font-bold">Contact Us</h1>
        <p class="text-gray-600 mt-5">Have questions about AviationNav? Our team is here to help you.</p>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-xl font-semibold mb-6">Get in Touch</h2>
                <p class="text-gray-600 mb-8 text-sm">We'd love to hear from you. Whether you have a question about our platform, pricing, or anything else, our team is ready to answer all your questions.</p>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <span class="bg-blue-100 p-3 rounded-full mr-4">
                            <img src="Assets/email.png" width="25" alt="">
                        </span>
                        <a href="mailto:info@aviationnav.com" class="text-blue-600 hover:underline">info@aviationnav.com</a>
                    </li>
                    <li class="flex items-center">
                        <span class="bg-blue-100 p-3 rounded-full mr-4">
                            <img src="Assets/phone.png" width="25" alt="">
                        </span>
                        <a href="tel:+91 81306 10431" class="text-blue-600 hover:underline">+</a>
                    </li>
                    <li class="flex items-center">
                        <span class="bg-blue-100 p-3 rounded-full mr-4">
                            <img src="Assets/address.png" width="25" alt="">
                        </span>
                        <p>Lovely Professional University, Phagwara, Punjab</p>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-semibold mb-6">Send Us a Message</h2>

                <!-- Success Message after form submission -->
              

                <!-- Form -->
                <form method="POST" action="" class="mt-4 space-y-4">
                    <input type="text" name="name" placeholder="Full Name" class="w-full px-4 py-2 border rounded-md" required>
                    <input type="email" name="email" placeholder="Email Address" class="w-full px-4 py-2 border rounded-md" required>
                    <input type="text" name="subject" placeholder="Subject" class="w-full px-4 py-2 border rounded-md" required>
                    <textarea name="message" placeholder="Message" class="w-full px-4 py-2 border rounded-md" rows="5" required></textarea>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</main>
    <footer class="bg-blue-950 text-white pt-16 pb-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div>
                <a href="/" class="flex items-center space-x-2 mb-4">
                    <img src="./Assets/plane.png" alt="Plane" width="24" height="24" class="text-sky-400">
                    <span class="font-display text-l font-semibold text-white">
                        AviationNav
                    </span>
                </a>
                <p class="text-gray-400 text-sm mb-4">
                    Revolutionizing aviation navigation with precision mapping and intuitive tools.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-9 h-9 rounded-full  flex items-center justify-center bg-gray-700 hover:bg-sky-600 transition-colors">
                        <img src="./Assets/X.png" alt="Twitter" style="filter: invert();" width="25" height="25" class="text-white">
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full flex items-center justify-center bg-gray-700  hover:bg-sky-600 transition-colors">
                        <img src="./Assets/github.png" alt="Github" width="25" height="25" class="text-white">
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full flex items-center justify-center bg-gray-700  hover:bg-sky-600 transition-colors">
                        <img src="./Assets/linkedin.png" alt="Linkedin"  style="filter: invert();" width="25" height="16" class="text-white">
                    </a>
                </div>
            </div>

            <div>
                <h3 class="font-semibold text-l mb-4">Navigation</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="/" class="text-gray-400 text-sm hover:text-sky-400 transition-colors">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/about" class="text-gray-400 text-sm hover:text-sky-400 transition-colors">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="/explore" class="text-gray-400 text-sm hover:text-sky-400 transition-colors">
                            Explore Map
                        </a>
                    </li>
                    <li>
                        <a href="/features" class="text-gray-400 text-sm hover:text-sky-400 transition-colors">
                            Features
                        </a>
                    </li>
                    <li>
                        <a href="/how-to-use" class="text-gray-400 text-sm hover:text-sky-400 transition-colors">
                            How to Use
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-4">Resources</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="text-gray-400 text-sm hover:text-sky-400 transition-colors">
                            Data Sources
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 text-sm hover:text-sky-400 transition-colors">
                            Case Studies
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 text-sm hover:text-sky-400 transition-colors">
                            Terms of Service
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 text-sm hover:text-sky-400 transition-colors">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-4">Contact</h3>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li>
                        <a href="/contact" class="hover:text-sky-400 text-sm transition-colors">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@aviationnav.com" class="hover:text-sky-400 text-sm transition-colors">
                            info@aviationnav.com
                        </a>
                    </li>
                    <li>Lovely Professional University</li>
                    <li>Phagwara Jalandhar</li>
                </ul>
            </div>
        </div>

        <div class="border-t border-navy-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm mb-4 md:mb-0">
                    © 2025 AviationNav. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-500 hover:text-sky-400 text-sm transition-colors">
                        Privacy
                    </a>
                    <a href="#" class="text-gray-500 hover:text-sky-400 text-sm transition-colors">
                        Terms
                    </a>
                    <a href="#" class="text-gray-500 hover:text-sky-400 text-sm transition-colors">
                        Sitemap
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
