<?php
extract($_POST);
if(isset($save))
{
 switch($ch)
 {
 case '+':
 $res=$fn+$sn;
 break;
 
 case '-':
 $res=$fn-$sn;
 break;
 
 case '*':
 $res=$fn*$sn;
 break;
 case '/':
 $res=$fn/$sn;
 
 }
 
}
 
?>

<!DOCTYPE html>
<html>
 <head>
 <title>Calculator- switch</title>
 
 </head>
 <body>
 <center><h2>Calculator</h2></center>
 <form method="post">
 <table border="1" align="center">
 <tr>
 <th>Your Result</th>
 <th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
 </tr> 
 
 <tr>
 <th>Enter your First number</th>
 <th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
 </tr> 
 <tr>
 <th>Enter your Second number</th>
 <th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
 </tr>
 <tr>
 <th>Select Your Choice</th>
 <th>
 <select name="ch">
 <option>+</option>
 <option>-</option>
 <option>*</option>
 <option>/</option>
 </select>
 </th>
 </tr>
 <tr>
 
 <th colspan="2">
 <input type="submit" name="save" value="Calculate"/>
 </th>
 </tr>
 </table>
 </form>
 </body>
</html>