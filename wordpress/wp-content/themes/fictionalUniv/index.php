<?php
 $names = array('Brad', 'John', 'Jane', 'Mimi' );
 $count = 0;
 while($count<4) {
   echo "<li>Hi my name is $names[$count] </li>";
   $count++;
 }
# $count = 1;
# while ($count < 100) {
#   echo "<li>$count</li>";
#   $count ++;
 }
?>





<p>Hi, my name is <?php echo $names[1] ?></p>
