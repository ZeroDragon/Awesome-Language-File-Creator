<?php

#Config File, from here we define the languages to display and the files to use.
#By default; es.php, en.php and langdic.json are the files needed to start but can be replaced at your need.


#REMEMBER: If you change this values, you'll need to create the language files on the dictionaries folder

$lang1 = 'es'; #the First Language code (no spaces), it must be the same name as the file on dictionaries folder: es = es.php
$lang2 = 'en'; #the Second Language code (no spaces), it must be the same name as the file on dictionaries folder: en = en.php

#Pure display names, nothing fancy here
$lang1Display = 'Spanish';
$lang2Display = 'English';

#BufferFile is the file used to store the translations in a single file 
$bufferFile = 'langdic'; #it must be the same name as the file on db folder: langdic = langdic.json


#END OF CONFIG PART
#Dont touch anything from here :D

$error = 'false';
if(!file_exists('dictionaries/'.$lang1.'.php')) {$error = 'true';}
if(!file_exists('dictionaries/'.$lang2.'.php')) {$error = 'true';}
if(!file_exists('db/'.$bufferFile.'.json')) {$error = 'true';}

if( $error=='true' ){
	echo '<h2 class="error">Error</h2>';
	echo '<b>'.$lang1.'.php</b>, <b>'.$lang2.'.php</b> and <b>'.$bufferFile.'.json</b> must exists and have read/write permissions';
}