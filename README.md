#Awesome Language File Creator

Do you need a [Gettext - .po file](http://en.wikipedia.org/wiki/Gettext) alternative for native Code Igniter internationalization?  
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

##Automatic deploy
Since Version 0.2 there is a Makefile to automatically deploy the dictionaries to a desired CI depository.  
Usage:  
```make REP=[path_to_your_CI_repository]/```  
**Important** Requires an ending **slash**  

###Integration with ZSH
Feeling like using some ZSH power? just add this to your .zshrc under your aliases
```deploy-lang() {make -C [PATH_TO_THIS_REPO] REP=$PWD/"$*"}```  
  
Then you can just do ```deploy-lang``` from your CI root folder.

###Import existing langs
* Copy your existing lang contents to the **dictionaries** files contents
* Point your browser to LangCreator and click **Import from Code Igniter**
* Copy the generated JSON and paste/replace the contents of JSON inside the **db** folder
* Point your browser back to LangCreator and continue editing


##CHANGE LOG
  
Version 0.2  
* Created a Makefile to automatically deploy dictionaries to existing CI repository. By default it deploys to English and Spanish

Version 0.1  
* Created some file structure and ready to be released to the world wild web