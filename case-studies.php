

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Studies</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gray-100/30 backdrop-blur-md py-2">
    <div class="container mx-auto px-4 py-3 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2 transition-opacity hover:opacity-80">
                <img width="30px" src="./Assets/plane.png">
                <span class="font-display text-l font-semibold text-navy-950">AviationNav</span>
            </a>

            <nav class="hidden md:flex space-x-6 ">
                <a href="./index.php" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Home</a>
                <a href="./about.php" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">About</a>
                <a href="./Features.php" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Features</a>
                <a href="./how-to-use.php" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">How to Use</a>
                <a href="./data-sources.php" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Data Sources</a>
                <a href="./case-studies.php" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700 underline decoration-blue-600 decoration-[3px] underline-offset-4">Case Studies</a>
                <a href="./contact.php" class="relative font-medium text-s transition-colors duration-300 hover:text-sky-600 text-gray-700">Contact</a>
            </nav>

            <div class="flex items-center space-x-4">
                <a href="./Login.php" class="hidden md:inline-flex button-primary px-3 py-2 bg-sky-600 text-white rounded-md hover:bg-sky-700 transition-colors text-sm font-semibold">Log In</a>

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
                <a href="./index.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Home</a>
                <a href="./about.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">About</a>
                <a href="./Features.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Features</a>
                <a href="./how-to-use.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">How to Use</a>
                <a href="./data-sources.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Data Sources</a>
                <a href="./case-studies.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Case Studies</a>
                <a href="./contact.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Contact</a>
                <a href="./Login.php" class="hidden md:inline-flex button-primary px-3 py-2 bg-sky-600 text-white rounded-md hover:bg-sky-700 transition-colors text-sm font-semibold">Log In</a>
            </div>
        </div>
    </div>
</header>
<main class="container mt-28 mx-auto px-4">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Case Studies</h1>
        <p class="text-center m-auto w-2/3 text-gray-600 mb-12">Discover how aviation professionals around the world use AviationNav to improve safety, efficiency, and operational performance.</p>
        
        <div class="flex flex-col gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://plus.unsplash.com/premium_photo-1679758630055-99ebb2df7d77?w=1000&auto=format&fit=crop&q=60" alt="Alpine Air Services" class="w-full h-64 object-cover">
                <div class="p-6">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">Commercial Operator</span>
                    <h2 class="text-2xl font-semibold text-gray-800 mt-3">Alpine Air Services</h2>
                    <p class="text-gray-600 mt-2">A regional carrier that improved safety and efficiency for mountain routes by 27% using AviationNav's 3D terrain mapping.</p>
                    <details class="mt-4 cursor-pointer">
                        <summary class="text-blue-600 font-medium">Read More</summary>
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-800">Challenge</h3>
                            <p class="text-gray-600">Planning safe routes through mountainous terrain with rapidly changing weather conditions.</p>
                            <h3 class="font-semibold text-gray-800 mt-3">Solution</h3>
                            <p class="text-gray-600">Implemented AviationNav's 3D terrain visualization and real-time weather overlay features.</p>
                            <h3 class="font-semibold text-gray-800 mt-3">Results</h3>
                            <ul class="list-disc list-inside text-gray-600">
                                <li>27% reduction in weather-related delays</li>
                                <li>Improved fuel efficiency by optimizing routes</li>
                                <li>Enhanced pilot situational awareness in challenging terrain</li>
                            </ul>
                        </div>
                    </details>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1606707323990-c2bc64723dba?w=1000&auto=format&fit=crop&q=60" alt="Global Freight Express" class="w-full h-64 object-cover">
                <div class="p-6">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">Cargo Operator</span>
                    <h2 class="text-2xl font-semibold text-gray-800 mt-3">Global Freight Express</h2>
                    <p class="text-gray-600 mt-2">Optimizing transoceanic routes to minimize fuel consumption while navigating complex international airspace regulations.</p>
                    <details class="mt-4 cursor-pointer">
                        <summary class="text-blue-600 font-medium">Read More</summary>
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-800">Challenge</h3>
                            <p class="text-gray-600">Optimizing transoceanic routes to minimize fuel consumption while navigating complex international airspace regulations.</p>
                            <h3 class="font-semibold text-gray-800 mt-3">Solution</h3>
                            <p class="text-gray-600">Used AviationNav's route planning and performance analytics tools to identify more efficient flight paths.</p>
                            <h3 class="font-semibold text-gray-800 mt-3">Results</h3>
                            <ul class="list-disc list-inside text-gray-600">
                                <li>12% reduction in overall fuel consumption</li>
                                <li>Saved approximately $3.5M annually on operating costs</li>
                                <li>Decreased carbon emissions by an estimated 15,000 tons per year</li>
                            </ul>
                        </div>
                    </details>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1534724295769-d49447d13dd0?q=80&w=2070&auto=format&fit=crop" alt="Coastal Air Academy" class="w-full h-64 object-cover">
                <div class="p-6">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">Flight School</span>
                    <h2 class="text-2xl font-semibold text-gray-800 mt-3">Coastal Air Academy</h2>
                    <p class="text-gray-600 mt-2">Teaching complex navigation concepts to student pilots in a practical, engaging manner.</p>
                    <details class="mt-4 cursor-pointer">
                        <summary class="text-blue-600 font-medium">Read More</summary>
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-800">Challenge</h3>
                            <p class="text-gray-600">Teaching complex navigation concepts to student pilots in a practical, engaging manner.</p>
                            <h3 class="font-semibold text-gray-800 mt-3">Solution</h3>
                            <p class="text-gray-600">Integrated AviationNav as a training tool for visualizing navigation concepts and planning training flights.</p>
                            <h3 class="font-semibold text-gray-800 mt-3">Results</h3>
                            <ul class="list-disc list-inside text-gray-600">
                                <li>92% of students reported better understanding of navigation principles</li>
                                <li>Reduced cross-country planning time by 40%</li>
                                <li>Improved student preparedness for real-world flight conditions</li>
                            </ul>
                        </div>
                    </details>
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
</body>
</html>
