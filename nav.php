<?php

echo "<ul class='nav'>"; //starts the unordered list <ul>

for($i=0; $i<$myNavCount;$i++){
    /* this will eho out each 
    list item from <li> using 
    content from $myNav array. */
    echo "<li class='nav-item'><a class='nav-link' href='".$myNav[$i]['page']."'>".$myNav[$i]['title']."</a></li>";
    }

echo "</ul>"; //ends the unordered list </ul>

?>