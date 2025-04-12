<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Assets/planeIcon.png" type="image/x-icon">
    <?php
    $currentFileName = basename($_SERVER['PHP_SELF'], '.php');
    $formattedFileName = $currentFileName;
    $formattedFileName === "index" ? $formattedFileName = "Home" :
        $formattedFileName = ucfirst($currentFileName);
    ?>
    <title><?php echo $formattedFileName; ?> - AviationNav</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hamburger-line {
            transition: all 0.3s ease-in-out;
        }

        .wrap {
            transition: all 0.3s ease-in-out;

        }
    </style>
</head>