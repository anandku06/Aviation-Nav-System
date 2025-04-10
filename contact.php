
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
    <style>
        .hamburger-line {
    transition: all 0.3s ease-in-out;
}
.wrap{
        transition: all 0.3s ease-in-out;

    }
</style>
</head>
<body class="min-h-screen flex flex-col">
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gray-100/30 backdrop-blur-md py-2">
    <div class="container mx-auto px-4 py-3 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2 transition-opacity hover:opacity-80">
                <img width="30px" src="./Assets/plane.png" alt="AviationNav Logo">
                <span class="font-display text-lg font-semibold text-navy-950">AviationNav</span>
            </a>

            <nav class="hidden md:flex text-sm space-x-6">
                <a href="./index.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700 ">Home</a>
                <a href="./about.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">About</a>
                <a href="./Features.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Features</a>
                <a href="./how-to-use.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">How to Use</a>
                <a href="./data-sources.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Data Sources</a>
                <a href="./case-studies.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Case Studies</a>
                <a href="./contact.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700 underline decoration-blue-600 decoration-[3px] underline-offset-4">Contact</a>
            </nav>

            <div class="flex items-center space-x-4">
                <a href="./Login" class="hidden md:inline-flex button-primary px-3 py-2 bg-sky-600 text-white rounded-md hover:bg-sky-700 transition-colors text-sm font-semibold">Log In</a>

                <button type="button" class="md:hidden  p-2 text-gray-600 hover:text-sky-600 focus:outline-none" aria-label="Toggle menu" onclick="toggleMenu()">
                    <span class="sr-only">Open main menu</span>
                    <div class="relative h-6 w-6 " id="wrap">
                        <span class="hamburger-line absolute block h-0.5 w-8 bg-current transform transition duration-300 ease-in-out top-1"></span>
                        <span class="hamburger-line absolute block h-0.5 w-8 bg-current transform transition duration-300 ease-in-out top-3"></span>
                        <span class="hamburger-line absolute block h-0.5 w-8 bg-current transform transition duration-300 ease-in-out top-5"></span>
                    </div>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
            <div class="py-2 space-y-1 bg-white rounded-lg shadow-lg">
                <a href="./index.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Home</a>
                <a href="./about.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">About</a>
                <a href="./Features.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Features</a>
                <a href="./how-to-use.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">How to Use</a>
                <a href="./data-sources.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Data Sources</a>
                <a href="./case-studies.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Case Studies</a>
                <a href="./contact.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Contact</a>
                <!-- <a href="/explore.php" class="block px-4 py-3 text-base font-medium text-white bg-sky-600 hover:bg-sky-700 transition-colors">Explore Map</a> -->
                <a href="./start" class="block px-4 py-3 text-base font-medium text-white bg-sky-600 hover:bg-sky-700 transition-colors">Get Started</a>
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

                        <a href="tel:+91 81306 10431" class="text-blue-600 hover:underline">+91 8130610431</a>

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
<?php
        include './components/footer.php';
    ?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    const lines = document.querySelectorAll('.hamburger-line');
    // const wrap = document.getElementById('wrap');
    
    if (menu.classList.contains('max-h-0')) {
        menu.classList.remove('max-h-0', 'opacity-0');
        menu.classList.add('max-h-screen', 'opacity-100');

        lines[0].classList.add('rotate-45', 'top-5');
        lines[1].classList.add('opacity-0');
        lines[2].classList.add('-rotate-45', 'top-5)');
        wrap.classList.add('-top-2')
    } else {
        menu.classList.remove('max-h-screen', 'opacity-100');
        menu.classList.add('max-h-0', 'opacity-0');
        lines[0].classList.remove('rotate-45', 'top-3');
        lines[1].classList.remove('opacity-0');
        lines[2].classList.remove('-rotate-45', 'top-3');
        wrap.classList.remove('-top-5')
    }
}
</script>
</body>
</html>
