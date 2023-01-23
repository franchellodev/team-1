<?php 
try {
    $db = new PDO("mysql:host=localhost;dbname=team;charset=utf8", "root", "");
    /* $db = new PDO("mysql:host=sefatoprak.com;dbname=sefatopr_franchello;charset=utf8", "sefatopr_fruser",
    "~adK5^=+}vFs"); */
    //$db = new PDO("mysql:host=142.132.182.39;dbname=franchello_panel;charset=utf8", "franchello_panel", "mhR6HeiU");
    //$db = new
}
catch(Exception $e)
{
    echo $e;
}
?>