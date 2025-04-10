
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Use AviationNav</title>
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
                <a href="./how-to-use.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700 underline decoration-blue-600 decoration-[3px] underline-offset-4">How to Use</a>
                <a href="./data-sources.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Data Sources</a>
                <a href="./case-studies.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Case Studies</a>
                <a href="./contact.html" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Contact</a>
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
                <a href="/explore.html" class="block px-2 py-1 text-base font-medium text-white bg-sky-600 hover:bg-sky-700 transition-colors">Explore Map</a>
            </div>
        </div>
    </div>
</header>
    
<main class="flex-grow my-28 pt-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <h1 class="text-4xl font-bold text-center text-gray-900 mb-6">How to Use AviationNav</h1>
            <p class="text-center text-gray-600 mb-12">Learn how to make the most of our interactive aviation navigation tools with this step-by-step guide.</p>
            
            <h2 class="text-xl font-semibold mb-8 text-gray-900 text-center">Getting Started in 6 Simple Steps</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class='bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow'>
                    <div class='flex items-center mb-4'>
                        <div class='flex-shrink-0 bg-sky-100 rounded-full p-3 mr-4'>
                            <span class='text-sky-600 text-xl'><img src="Assets/map.png" width="25" alt=""></span>
                        </div>
                        <h3 class='font-semibold text-lg text-gray-900'>Access the Map</h3>
                    </div>
                    <p class='text-gray-600'>Click the 'Explore Map' button from any page to launch the interactive aviation map.</p>
                </div>
                <div class='bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow'>
                    <div class='flex items-center mb-4'>
                        <div class='flex-shrink-0 bg-sky-100 rounded-full p-3 mr-4'>
                            <span class='text-sky-600 text-xl'><img src="Assets/map-layer.png" width="25" alt=""></span>
                        </div>
                        <h3 class='font-semibold text-lg text-gray-900'>Toggle Map Layers</h3>
                    </div>
                    <p class='text-gray-600'>Use the layer controls to toggle visibility of waypoints, navigation aids, airports, and ATS routes.</p>
                </div>
                <div class='bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow'>
                    <div class='flex items-center mb-4'>
                        <div class='flex-shrink-0 bg-sky-100 rounded-full p-3 mr-4'>
                            <span class='text-sky-600 text-xl'><img src="Assets/search.png" width="25" alt=""></span>
                        </div>
                        <h3 class='font-semibold text-lg text-gray-900'>Search for Locations</h3>
                    </div>
                    <p class='text-gray-600'>Use the search tool to find specific waypoints, airports, or navigation aids by name or identifier.</p>
                </div>
                <div class='bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow'>
                    <div class='flex items-center mb-4'>
                        <div class='flex-shrink-0 bg-sky-100 rounded-full p-3 mr-4'>
                            <span class='text-sky-600 text-xl'><img src="Assets/route.png" width="25" alt=""></span>
                        </div>
                        <h3 class='font-semibold text-lg text-gray-900'>Plan a Route</h3>
                    </div>
                    <p class='text-gray-600'>Enter a sequence of waypoints or airports to plot a custom route on the map.</p>
                </div>
                <div class='bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow'>
                    <div class='flex items-center mb-4'>
                        <div class='flex-shrink-0 bg-sky-100 rounded-full p-3 mr-4'>
                            <span class='text-sky-600 text-xl'><img src="Assets/plane.png" width="25" alt=""></span>
                        </div>
                        <h3 class='font-semibold text-lg text-gray-900'>View Flight Information</h3>
                    </div>
                    <p class='text-gray-600'>Click on any plotted route to view detailed information including distance, heading, and estimated flight time.</p>
                </div>
                <div class='bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow'>
                    <div class='flex items-center mb-4'>
                        <div class='flex-shrink-0 bg-sky-100 rounded-full p-3 mr-4'>
                            <span class='text-sky-600 text-xl'><img src="Assets/setting.png" width="25" alt=""></span>
                        </div>
                        <h3 class='font-semibold text-lg text-gray-900'>Customize Settings</h3>
                    </div>
                    <p class='text-gray-600'>Adjust display settings like units of measurement, map style, and information density.</p>
                </div>
            </div>
            
            <h2 class="text-2xl font-semibold mb-8 text-gray-900 text-center mt-16">Frequently Asked Questions</h2>
            <div class="space-y-6 max-w-3xl mx-auto">
                <div class='bg-white rounded-lg shadow p-6'>
                    <h3 class='font-semibold text-lg mb-2 text-gray-900'>Do I need to create an account to use the map?</h3>
                    <p class='text-gray-600'>No, the basic map functionality is available without an account. However, creating a free account allows you to save custom routes and preferences.</p>
                </div>
                <div class='bg-white rounded-lg shadow p-6'>
                    <h3 class='font-semibold text-lg mb-2 text-gray-900'>How accurate is the navigation data?</h3>
                    <p class='text-gray-600'>Our data is sourced from official aviation databases and updated regularly. For details on our data sources and accuracy, please visit our Data Sources page.</p>
                </div>
                <div class='bg-white rounded-lg shadow p-6'>
                    <h3 class='font-semibold text-lg mb-2 text-gray-900'>Can I use this for actual flight planning?</h3>
                    <p class='text-gray-600'>While our tool provides valuable visualization and planning capabilities, it should be used as a supplemental resource only. Always refer to official navigation charts and documentation for actual flight planning.</p>
                </div>
                <div class='bg-white rounded-lg shadow p-6'>
                    <h3 class='font-semibold text-lg mb-2 text-gray-900'>How do I report incorrect data or suggest improvements?</h3>
                    <p class='text-gray-600'>Please use our Contact page to report any data discrepancies or feature suggestions. We appreciate your feedback!</p>
                </div>
            </div>
            
            <div class="mt-10 text-center">
                <p class="text-gray-600 mb-4">Still have questions?</p>
                <a href="/contact" class="text-sky-600 hover:text-sky-800 font-medium">Contact our support team</a>
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
    
</body>
</html>
