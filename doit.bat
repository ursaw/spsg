rem 
rem
rem php einfach auf der konsole aufrufen
rem  
rem  ACHTUNG, wenn das alles nicht unter C:\tmp steht, dann bitte die Pfade in php\php.ini entsprechend anpassen (nach C:\tmp suchen)
echo on

rem set workdir="C:\tmp"

set xampp=c:\xampp
set phpmainfile=generateAll.php





cd %workdir%
 

%xampp%\php\php.exe  generateAll.php