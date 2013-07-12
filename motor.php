<?
include 'config.php';
if($error=='true') return;
#First we create our JSON to fast edit
$json = json_encode($_POST);
$myFile = 'db/'.$bufferFile.".json";
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $json);
fclose($fh);

#Now lets create the language strings
$lang1b = "<?php\n\n";
$lanb2b = "<?php\n\n";

foreach ($_POST as $key => $value) {
	#$lang['error_email_missing'] = "You must submit an email address";
	$lang1b .= "\$lang['".$key."'] = \"".addslashes( urldecode($value[$lang1]) )."\";\n";
	$lanb2b .= "\$lang['".$key."'] = \"".addslashes( urldecode($value[$lang2]) )."\";\n";
}

$myFile = 'dictionaries/'.$lang1.".php";
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $lang1b);
fclose($fh);

$myFile = 'dictionaries/'.$lang2.".php";
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $lanb2b);
fclose($fh);

?>