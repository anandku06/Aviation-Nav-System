<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gray-100/30 backdrop-blur-md py-2">
    <div class="container mx-auto px-4 py-3 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2 transition-opacity hover:opacity-80">
                <img width="30px" src="./Assets/plane.png" alt="AviationNav Logo">
                <span class="font-display text-lg font-semibold text-navy-950">AviationNav</span>
            </a>

            <nav class="hidden md:flex text-sm space-x-6">
                <a href="./index.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700 underline decoration-blue-600 decoration-[3px] underline-offset-4">Home</a>
                <a href="./about.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">About</a>
                <a href="./Features.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Features</a>
                <a href="./how-to-use.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">How to Use</a>
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