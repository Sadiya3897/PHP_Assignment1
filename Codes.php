<?php
$colors = array("672"=>"Antarctica","32"=>"Belgium","975"=>"Bhutan","55"=>"Brazil","1"=>"Canada");

echo '<table border="1" style="border-collapse: collapse;">';
echo '<tr><th>COUNTRY</th><th>CODE</th></tr>';
foreach ($colors as $key=>$value){
       echo '<tr>';
       echo '<td>'.$value.'</td>';
       echo '<td>'.$key.'</td>';
       echo '</tr>';
}
echo '</table>';


?>
