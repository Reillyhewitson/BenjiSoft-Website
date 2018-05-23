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
            ?>>Home</a> &nbsp;
        <a href="about.php"
            <?php
            if (basename($_SERVER['PHP_SELF']) == 'about.php') {
                echo 'class="nav-current"';
            } else {
                echo 'class="nav"';
            }
            ?>>About</a> &nbsp;
        <a href="trilogy.php"
            <?php
            if (basename($_SERVER['PHP_SELF']) == 'trilogy.php') {
                echo 'class="nav-current"';
            } else {
                echo 'class="nav"';
            }
            ?>>The Trilogy</a> &nbsp;
        <a href="team.php"
            <?php
            if (basename($_SERVER['PHP_SELF']) == 'team.php') {
                echo 'class="nav-current"';
            } else {
                echo 'class="nav"';
            }
            ?>>The Team</a> &nbsp;
        <a href="contact.php"
            <?php
            if (basename($_SERVER['PHP_SELF']) == 'contact.php') {
                echo 'class="nav-current"';
            } else {
                echo 'class="nav"';
            }
            ?>>Contact Us</a> &nbsp;
    </div>
</div>