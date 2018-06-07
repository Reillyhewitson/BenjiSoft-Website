<!-- Made with Love by BenjiSoft
     Licensed under the GNU GPL v3.0 license -->
<?php
/**
 * Created by PhpStorm.
 * User: BenjaminLewis
 * Date: 23/05/2018
 * Time: 19:55.
 */
$content = "
<link rel='stylesheet' type='text/css' href='lib/css/team.css'>
<script type=\"text/javascript\" src=\"https://platform.linkedin.com/badges/js/profile.js\" async defer></script>
<div class='center'><h1>Meet the team!</h1></div>
<table>
    <td id = \"oli\">
        <div id = \"image\">
            <a href = \"https://www.linkedin.com/in/oliver-beardsall-7351a1164/\" target = \"_blank\"><div class = \"background\"><img src = \"lib/res/bios/oli.JPG\" class = \"headshot\" title = \"LinkedIn\"></div></a>
        </div>    
        <h4>Oliver Beardsall</h4>
        <p id =\"Title\">ACEO</p>
        <p class = 'desc left'>My name is Oliver Beardsall and I am ACEO at BenjiSoft. I am 15 and I do backend development for BenjiSoft, I am currently working on adding another business to the Benjisoft umbrella that is currently unnamed and will be revealed very soon!</p>
    </td>
    <td id = \"Benji\">
        <div id =\"image\">
            <a href = \"https://www.linkedin.com/in/benjisoft-benji/\" target = \"_blank\"><div class = \"background\"><img src = \"lib/res/bios/benji.png\" class = \"headshot\" title = \"LinkedIn\"></div></a>
        </div>
        <h4>Benjamin Lewis</h4>
        <p id=\"Title\">CEO</p>
        <p class = 'desc middle'>My name is Benji and I am CEO here at BenjiSoft. I design most of our websites and keep the whole company running. I also operate <a class='reg' href='//thegrandhack.info'>The Grand Hack</a> and our website design branch.                    </p>
    </td>
    <td id = \"Reilly\">
        <div id = \"image\">
            <a href = \"https://www.linkedin.com/in/reilly-hewitson-623a83154/\" target = \"_blank\"><div class = \"background\"><img src = \"lib/res/bios/reilly.jpg\" class = \"headshot\" style = \"transform: rotate(270deg)\" title = \"LinkedIn\"></div></a>
        </div>
        <h4>Reilly Hewitson</h4>
        <p id = \"Title\">Head Of Creative Design</p>
        <p class = 'desc right'> My name is Reilly I do design work such as creating logos, animations and designing the websites and making them responsive.                                                                                                                    </p>
    </td>
</table>
";
include_once 'lib/php/template.php';
