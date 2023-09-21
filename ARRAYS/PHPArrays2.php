<?php
/*$color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

green
red
white*/

//Using echo
$color = array('white', 'green', 'red');
echo "$color[0], $color[1], $color[2], <br>";
echo "<br> <li>$color[1]</li> <li>$color[2]</li> <li>$color[0]</li> <hr>";

//Using heredoc
$script = <<<SCRIPT
$color[0], $color[1], $color[2], <br>
<br> <li>$color[1]</li> <li>$color[2]</li> <li>$color[0]</li> <hr>
SCRIPT;

echo $script;
?>
