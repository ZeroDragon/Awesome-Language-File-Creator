#Awesome Language File Creator

Need a [Gettext - .po file](http://en.wikipedia.org/wiki/Gettext) alternative for native Code Igniter internationalization?  
With this you can easily create/edit your lang files in a [poedit](http://www.poedit.net/) style

##Requirements
* Apache, PHP
* 5 minutes to setup 

##Setup
* Clone/download this repository on your localhost folder
* Edit config.php to your language needs. By default its **english** - **spanish**
* Give read/write permissions to **dictionaries** and **db** folders (also its contents)

##Usage

###Create and edit
* Point your browser to LangCreator
* Input your field-keys, desired translations and click **check** to save
* When done, just copy the contents from the language files inside **dictionaries** folder over your [CI](http://ellislab.com/codeigniter) lang file contents

###Import existing langs
* Copy your existing lang contents to the **dictionaries** files contents
* Point your browser to LangCreator and click **Import from Code Igniter**
* Copy the generated JSON and paste/replace the contents of JSON inside the **db** folder
* Point your browser back to LangCreator and continue editing