<!-- Made with Love by BenjiSoft
     Licensed under the GNU GPL v3.0 license -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BenjiSoft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="lib/css/main.css" />
</head>
<body>
    <div id="header">
        <img src="lib/res/logo.gif" height="200%">
        <div class="right">
            <a href="index.php"
                <?php
                    if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                        echo 'class="nav-current"';
                    } else {
                        echo 'class="nav"';
                    }
                    ?>>Home</a>
        </div>
    </div>
    <div id="content">

    </div>
    <!-- <?php include 'lib/includes/header.php'?> -->
</body>
</html>