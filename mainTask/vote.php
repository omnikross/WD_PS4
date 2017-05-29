<?php
$vote = $_REQUEST["vote"];

$filename = "data.json";
$content = file($filename);

$array = explode(",", $content[0]);
$good = isset($array[0]) ? $array[0] : 0;
$bad = isset($array[1]) ? $array[1] : 0;
if ($vote == 0) {
  $good += 1;
}
if ($vote == 1) {
  $bad += 1;
}	

$insertvote = $good . "," . $bad;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
echo (json_encode(array($good, $bad)));
?>
