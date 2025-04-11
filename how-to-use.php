
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Use AviationNav</title>
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
                <a href="./how-to-use.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700 underline decoration-blue-600 decoration-[3px] underline-offset-4">How to Use</a>
                <a href="./data-sources.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Data Sources</a>
                <a href="./case-studies.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Case Studies</a>
                <a href="./contact.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Contact</a>
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
    
   
    <?php
        include './components/footer.php';
    ?>
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
