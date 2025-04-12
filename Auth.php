<?php
// Initialize variables
$mode = isset($_GET['mode']) ? $_GET['mode'] : 'login';
$email = '';
$password = '';
$name = '';
$errorMsg = '';
$successMsg = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    if ($mode === 'signup') {
        $name = isset($_POST['name']) ? trim($_POST['name']) : '';
        
        // Validate signup form
        if (empty($name)) {
            $errorMsg = 'Please enter your name';
        } elseif (empty($email)) {
            $errorMsg = 'Please enter your email';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg = 'Please enter a valid email address';
        } elseif (empty($password)) {
            $errorMsg = 'Please enter a password';
        } elseif (strlen($password) < 8) {
            $errorMsg = 'Password must be at least 8 characters long';
        } else {
            // In a real application, you would save the user data to a database here
            $successMsg = 'Account created successfully! You can now log in.';
            $mode = 'login';
            $name = '';
            $email = '';
            $password = '';
        }
    } else { // Login mode
        // Validate login form
        if (empty($email)) {
            $errorMsg = 'Please enter your email';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg = 'Please enter a valid email address';
        } elseif (empty($password)) {
            $errorMsg = 'Please enter your password';
        } else {
            // In a real application, you would verify credentials against a database
            $successMsg = 'Login successful!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $mode === 'login' ? 'Login' : 'Sign Up'; ?></title>
    <!-- Include Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold mb-2"><?php echo $mode === 'login' ? 'Welcome back' : 'Create an account'; ?></h1>
                <p class="text-gray-500 text-sm"><?php echo $mode === 'login' ? 'Sign in to your account' : 'Sign up for free access'; ?></p>
            </div>
            
            <div class="flex mb-6 border-b border-gray-200">
                <a href="?mode=login" class="<?php echo $mode === 'login' ? 'border-b-2 border-indigo-600 text-indigo-600' : 'text-gray-500'; ?> flex-1 text-center py-2 px-4 font-medium text-sm hover:text-indigo-600 transition-colors">Login</a>
                <a href="?mode=signup" class="<?php echo $mode === 'signup' ? 'border-b-2 border-indigo-600 text-indigo-600' : 'text-gray-500'; ?> flex-1 text-center py-2 px-4 font-medium text-sm hover:text-indigo-600 transition-colors">Sign Up</a>
            </div>
            
            <?php if (!empty($errorMsg)): ?>
                <div class="text-red-500 text-sm mt-2"><?php echo $errorMsg; ?></div>
            <?php endif; ?>
            
            <?php if (!empty($successMsg)): ?>
                <div class="text-green-500 text-sm mt-2 text-center"><?php echo $successMsg; ?></div>
            <?php endif; ?>
            
            <form method="post" action="?mode=<?php echo $mode; ?>">
                <?php if ($mode === 'signup'): ?>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-900 mb-2">Name</label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md text-base focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" autofocus>
                    </div>
                <?php endif; ?>
                
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-900 mb-2">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md text-base focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" <?php echo $mode === 'login' ? 'autofocus' : ''; ?>>
                </div>
                
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-900 mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md text-base focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
                </div>
                
                <button type="submit" class="w-full bg-indigo-600 text-white rounded-md py-2 px-4 text-base font-medium hover:bg-indigo-700 transition-colors">
                    <?php echo $mode === 'login' ? 'Sign In' : 'Sign Up'; ?>
                </button>
            </form>
            
            <div class="text-center mt-6 text-sm text-gray-500">
                <?php if ($mode === 'login'): ?>
                    <p>Don't have an account? <a href="?mode=signup" class="text-indigo-600 font-medium hover:underline">Sign up</a></p>
                <?php else: ?>
                    <p>Already have an account? <a href="?mode=login" class="text-indigo-600 font-medium hover:underline">Sign in</a></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>