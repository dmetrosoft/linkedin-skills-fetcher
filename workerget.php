<?php
$handle = fopen("worker.txt", "r");
if ($handle) {
	$count=0;
    while (($line = fgets($handle)) !== false) {
$array = json_decode($line);
foreach ($array as $key => $jsons) { // This will search in the 2 jsons
     foreach($jsons as $key => $value) {
         if($key == 'displayName'){
 echo $value.'<br>';
 $myfile = fopen("stage.txt", "a+") or die("Unable to open file!");
 $txt=$value;
fwrite($myfile, $txt."\n");
fclose($myfile);
} // This will show jsut the value f each key like "var1" will print 9
                       // And then goes print 16,16,8 ...
    }
}
	}
    fclose($handle);
	$lines = file('stage.txt');
$lines = array_unique($lines);
file_put_contents('stage.txt', implode($lines));

} else {
    // error opening the file.
} 
?>



