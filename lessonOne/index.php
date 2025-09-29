<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $_GET['name'];
    echo "<br>";
    echo $_GET['eyeColor'];
    //http://localhost:8080/phplessons/lessonOne/index.php?name=merve&eyeColor=hazel
    echo "<br>";
    echo $_FILES['name'];
    echo "<br>";
    echo $_COOKIE['name'];
    echo "<br>";
    $_SESSION['name'] = 'Session';
    echo $_SESSION['name'];
    echo "<br>";
    $_ENV['name'] = 'Environment';
    echo $_ENV['name'];
    echo "<br>";

    // SUPERGLOBAL VARIABLES - Available in all scopes throughout a script

    $_SERVER[""];        // Server and execution environment information
    // Contains headers, paths, script locations, etc.
    // Example: $_SERVER['PHP_SELF'], $_SERVER['SERVER_NAME']

    $_GET[""];           // Variables passed to the current script via URL parameters
    // Data sent through the URL (after ? symbol)
    // Example: index.php?name=John → $_GET['name'] = "John"

    $_POST[""];          // Variables passed to the current script via HTTP POST method
    // Data sent through form submissions with method="POST"
    // More secure than GET for sensitive data

    $_REQUEST[""];       // Contains contents of $_GET, $_POST, and $_COOKIE
    // NOTE: Less secure - use specific $_GET or $_POST when possible
    // Not recommended for production code

    $_FILES[""];         // Items uploaded to the current script via HTTP POST file upload
    // Contains information about uploaded files
    // Example: $_FILES['userfile']['name'], $_FILES['userfile']['size']

    $_COOKIE[""];        // Variables passed to the current script via HTTP Cookies
    // Data stored in the user's browser
    // Example: $_COOKIE['username']

    $_SESSION[""];       // Session variables available to the current script
    // Data stored on the server for a specific user session
    // Requires session_start() before use

    $_ENV[""];           // Variables passed to the current script via the environment method
    // Environment variables from the server
    // Example: $_ENV['PATH']

    // IMPORTANT NOTES:
    // - These arrays are superglobals - accessible anywhere without global keyword
    // - Always validate and sanitize data from these arrays for security
    // - Use specific arrays ($_GET, $_POST) instead of $_REQUEST when possible
    ?>



</body>

</html>