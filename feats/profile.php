<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../Auth.php");
    exit;
}

function connectDB()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "aviation_nav";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Initialize variables
$successMsg = '';
$errorMsg = '';
$name = $_SESSION['user_name'];
$email = $_SESSION['user_email'];
$currentPassword = '';
$newPassword = '';
$confirmPassword = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = connectDB();

    if (isset($_POST['update_profile'])) {
        // Update profile information
        $name = trim($_POST['name']);

        if (empty($name)) {
            $errorMsg = 'Name cannot be empty';
        } else {
            $stmt = $conn->prepare("UPDATE users SET name = ? WHERE id = ?");
            $stmt->bind_param("si", $name, $_SESSION['user_id']);

            if ($stmt->execute()) {
                $_SESSION['user_name'] = $name;
                $successMsg = 'Profile updated successfully';
            } else {
                $errorMsg = 'Error updating profile';
            }
        }
    } elseif (isset($_POST['change_password'])) {
        // Change password
        $currentPassword = trim($_POST['current_password']);
        $newPassword = trim($_POST['new_password']);
        $confirmPassword = trim($_POST['confirm_password']);

        // Fetch current password from database
        $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
        $stmt->bind_param("i", $_SESSION['user_id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if (!password_verify($currentPassword, $user['password'])) {
            $errorMsg = 'Current password is incorrect';
        } elseif (empty($newPassword) || strlen($newPassword) < 8) {
            $errorMsg = 'New password must be at least 8 characters long';
        } elseif ($newPassword !== $confirmPassword) {
            $errorMsg = 'New passwords do not match';
        } else {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
            $stmt->bind_param("si", $hashedPassword, $_SESSION['user_id']);

            if ($stmt->execute()) {
                $successMsg = 'Password changed successfully';
                $currentPassword = '';
                $newPassword = '';
                $confirmPassword = '';
            } else {
                $errorMsg = 'Error changing password';
            }
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - AviationNav</title>
    <link rel="shortcut icon" href="../Assets/plane2.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gray-100/30 backdrop-blur-md py-2">
        <div class="container mx-auto px-4 py-3 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <a href="../index.php" class="flex items-center space-x-2 transition-opacity hover:opacity-80">
                    <img width="30px" src="../Assets/plane.png" alt="AviationNav Logo">
                    <span class="font-display text-lg font-semibold text-navy-950">AviationNav</span>
                </a>

                <nav class="hidden md:flex text-sm space-x-6">
                    <a href="../index.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Home</a>
                    <a href="../about.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">About</a>
                    <a href="../Features.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Features</a>
                    <a href="../how-to-use.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">How to Use</a>
                    <a href="../data-sources.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Data Sources</a>
                    <a href="../contact.php" class="relative font-medium text-sm transition-colors duration-300 hover:text-sky-600 text-gray-700">Contact</a>
                </nav>

                <div class="flex items-center space-x-4">
                    <div class="hidden md:flex items-center">
                        <span class="text-sm text-gray-700 mr-2">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                        <a href="./explore.php" class="hidden md:inline-flex px-3 py-2 bg-gray-100 text-gray-800 rounded-md hover:bg-gray-200 transition-colors text-sm font-semibold mr-2">Explore Map</a>
                        <a href="../Auth.php?logout=1" class="hidden md:inline-flex px-3 py-2 bg-red-100 text-red-700 rounded-md hover:bg-red-200 transition-colors text-sm font-semibold">Logout</a>
                    </div>

                    <button type="button" class="md:hidden p-2 text-gray-600 hover:text-sky-600 focus:outline-none" aria-label="Toggle menu" onclick="toggleMenu()">
                        <span class="sr-only">Open main menu</span>
                        <div class="relative h-6 w-6" id="wrap">
                            <span class="hamburger-line absolute block h-0.5 w-8 bg-current transform transition duration-300 ease-in-out top-1"></span>
                            <span class="hamburger-line absolute block h-0.5 w-8 bg-current transform transition duration-300 ease-in-out top-3"></span>
                            <span class="hamburger-line absolute block h-0.5 w-8 bg-current transform transition duration-300 ease-in-out top-5"></span>
                        </div>
                    </button>
                </div>
            </div>

            <div id="mobile-menu" class="md:hidden overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                <div class="py-2 space-y-1 bg-white rounded-lg shadow-lg">
                    <a href="../index.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Home</a>
                    <a href="../about.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">About</a>
                    <a href="../Features.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Features</a>
                    <a href="../how-to-use.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">How to Use</a>
                    <a href="../data-sources.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Data Sources</a>
                    <a href="../contact.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Contact</a>
                    <div class="block px-4 py-2 text-base font-medium text-gray-700">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></div>
                    <a href="./explore.php" class="block px-4 py-3 text-base font-medium hover:bg-sky-50 transition-colors text-gray-700">Explore Map</a>
                    <a href="../Auth.php?logout=1" class="block px-4 py-3 text-base font-medium text-white bg-red-600 hover:bg-red-700 transition-colors">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <main class="pt-32 pb-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-sky-600 px-6 py-4">
                        <h1 class="text-xl font-bold text-white">My Profile</h1>
                    </div>
                    <div class="p-6">
                        <?php if (!empty($successMsg)): ?>
                            <div class="bg-green-50 text-green-800 p-4 rounded-md mb-6"><?php echo $successMsg; ?></div>
                        <?php endif; ?>

                        <?php if (!empty($errorMsg)): ?>
                            <div class="bg-red-50 text-red-700 p-4 rounded-md mb-6"><?php echo $errorMsg; ?></div>
                        <?php endif; ?>

                        <div class="flex flex-col md:flex-row items-start mb-8">
                            <div class="md:w-1/3 mb-6 md:mb-0 flex flex-col items-center">
                                <div class="mb-4 w-36 h-36 rounded-full overflow-hidden">
                                    <img src="../Assets/default-profile.png" alt="Profile" class="w-full h-full object-cover" onerror="this.src='https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png'">
                                </div>
                                <div class="text-center">
                                    <h2 class="text-lg font-semibold"><?php echo htmlspecialchars($_SESSION['user_name']); ?></h2>
                                    <p class="text-gray-600 text-sm"><?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
                                </div>
                            </div>
                            <div class="md:w-2/3 md:pl-8 flex-1">
                                <h3 class="text-lg font-semibold mb-4">Personal Information</h3>
                                <form method="post" class="mb-8">
                                    <div class="mb-4">
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md text-base focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-colors">
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                        <input type="email" id="email" value="<?php echo htmlspecialchars($email); ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md text-base bg-gray-50" readonly>
                                        <p class="mt-1 text-xs text-gray-500">Email cannot be changed</p>
                                    </div>
                                    <button type="submit" name="update_profile" class="px-4 py-2 bg-sky-600 text-white rounded-md hover:bg-sky-700 transition-colors">Update Profile</button>
                                </form>

                                <h3 class="text-lg font-semibold mb-4">Change Password</h3>
                                <form method="post">
                                    <div class="mb-4">
                                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                                        <input type="password" name="current_password" id="current_password" class="w-full px-3 py-2 border border-gray-300 rounded-md text-base focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-colors">
                                    </div>
                                    <div class="mb-4">
                                        <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                        <input type="password" name="new_password" id="new_password" class="w-full px-3 py-2 border border-gray-300 rounded-md text-base focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-colors">
                                        <p class="mt-1 text-xs text-gray-500">Must be at least 8 characters long</p>
                                    </div>
                                    <div class="mb-4">
                                        <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                        <input type="password" name="confirm_password" id="confirm_password" class="w-full px-3 py-2 border border-gray-300 rounded-md text-base focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-colors">
                                    </div>
                                    <button type="submit" name="change_password" class="px-4 py-2 bg-sky-600 text-white rounded-md hover:bg-sky-700 transition-colors">Change Password</button>
                                </form>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-6 mt-4">
                            <div class="flex justify-between items-center">
                                <a href="../index.php" class="text-gray-600 hover:text-gray-900 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                    </svg>
                                    Back to Home
                                </a>
                                <a href="./explore.php" class="text-sky-600 hover:text-sky-800 flex items-center">
                                    Explore Map
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-8 md:mb-0">
                    <div class="flex items-center space-x-2">
                        <img width="30px" src="../Assets/plane.png" alt="AviationNav Logo">
                        <span class="font-display text-lg font-semibold text-navy-950">AviationNav</span>
                    </div>
                    <p class="mt-4 text-gray-600 max-w-xs">
                        Advanced aviation navigation system for efficient flight planning and route visualization.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:grid-cols-3">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">Product</h3>
                        <ul class="space-y-2">
                            <li><a href="../Features.php" class="text-gray-600 hover:text-gray-900">Features</a></li>
                            <li><a href="../how-to-use.php" class="text-gray-600 hover:text-gray-900">How to Use</a></li>
                            <li><a href="../data-sources.php" class="text-gray-600 hover:text-gray-900">Data Sources</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">Company</h3>
                        <ul class="space-y-2">
                            <li><a href="../about.php" class="text-gray-600 hover:text-gray-900">About</a></li>
                            <li><a href="../case-studies.php" class="text-gray-600 hover:text-gray-900">Case Studies</a></li>
                            <li><a href="../contact.php" class="text-gray-600 hover:text-gray-900">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-200 pt-8 mt-8 text-center text-sm text-gray-600">
                &copy; 2025 AviationNav. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            const lines = document.querySelectorAll('.hamburger-line');
            const wrap = document.getElementById('wrap');

            if (menu.classList.contains('max-h-0')) {
                menu.classList.remove('max-h-0', 'opacity-0');
                menu.classList.add('max-h-screen', 'opacity-100');

                lines[0].classList.add('rotate-45', 'top-3');
                lines[1].classList.add('opacity-0');
                lines[2].classList.add('-rotate-45', 'top-3');
                wrap.classList.add('-top-2')
            } else {
                menu.classList.remove('max-h-screen', 'opacity-100');
                menu.classList.add('max-h-0', 'opacity-0');
                lines[0].classList.remove('rotate-45', 'top-3');
                lines[1].classList.remove('opacity-0');
                lines[2].classList.remove('-rotate-45', 'top-3');
                wrap.classList.remove('-top-2')
            }
        }
    </script>
</body>

</html>