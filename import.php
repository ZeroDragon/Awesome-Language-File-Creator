<?php
include 'header.php';
include 'config.php';
if($error=='true') return;
$lang = array();
$output = array();

include 'dictionaries/'.$lang1.'.php';
foreach ($lang as $key => $value) {
	$output[$key][$lang1] = urldecode($value);
}

include 'dictionaries/'.$lang2.'.php';
foreach ($lang as $key => $value) {
	$output[$key][$lang2] = urldecode($value);
}
?>
<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<div class="hero-unit">
			  <h1>Awesome Language File Creator</h1>
			  <p>
			  	By <a href="http://zerothedragon.com">ZeroDragon</a> | don't want to be here? <a href="index.php">Go back to input page</a>
			  </p>
			</div>

			<h1>Import from Code Igniter</h1>
			1) Copy the contents from your <b><?=$lang1Display?></b> and <b><?=$lang2Display?></b> language files in your CI app folder<br/>
			2) Replace the contents on <b>dictionaries/<?=$lang1?>.php</b> and <b>dictionaries/<?=$lang2?>.php</b> as needed<br/>
			3) Reload this page, copy the generated json and paste it on your <b>db/<?=$bufferFile?>.json</b>, then click <a href="index.php">here</a>
			<br/><br/>
			<textarea class="full"><?=json_encode($output)?></textarea>
		</div>
	</div>

</div>

<?include 'footer.php';?>