NAME=AwesomeLangCreator

ES_DICTIONARY=dictionaries/es.php
EN_DICTIONARY=dictionaries/en.php

#path to your CI project folder REP stands for repository
REP = $(CURDIR)

DESTINATION_ES=$(addprefix $(REP), application/language/espanol/dictionary_lang.php)
DESTINATION_EN=$(addprefix $(REP), application/language/english/dictionary_lang.php)

#DESTINATION_ES=$(addprefix $(REP), dictionary_lang_es.php)
#DESTINATION_EN=$(addprefix $(REP), dictionary_lang_en.php)

# The build directory relies on the JS being compiled.
release:
	cat $(ES_DICTIONARY) > $(DESTINATION_ES)
	cat $(EN_DICTIONARY) > $(DESTINATION_EN)
