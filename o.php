<?php
echo "\"git branch\"<br>";
$output = shell_exec('git branch');
echo "<pre>$output</pre>";
echo "ok now we clean up branch list and remove asterisk on active branch to make dropdown... explode!<br><br>";
//$output = shell_exec('git stash');
//echo "<pre>$output</pre>";
//print_r (explode("\n", $output));
$output = str_ireplace("*", "", $output);
$output = str_ireplace(" ", "", $output);
$branchArray = array();
$branchArray = explode("\n", $output);
$count = "";
$count = count($branchArray);
echo "Change branch to:&nbsp;&nbsp;&nbsp;&nbsp;<select name=\"newBranch\">";
for ($x=0; $x<$count-1; $x++)
  {
  //echo "branch[$x]: $branchArray[$x] <br>";
  echo "<option value=\"$branchArray[$x]\">$branchArray[$x]</option><br />";
  } 
  
echo "</select>";

?>


  
