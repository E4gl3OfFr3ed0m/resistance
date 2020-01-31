<?php

$myfile = fopen("locations.txt", "r") or die("Unable to open file!");
$locs = fread($myfile,filesize("locations.txt"));
fclose($myfile);
$locs = explode("\n",$locs);

$reg = $_GET["region"];
if($reg < 129 && $reg >= 0){
  echo "<b>[".$reg."]:</b> ";
  echo $locs[$reg];
}
else{
  echo "<b>Intruder!</b>";
}

?>
