<?php
class View
{
    private $template;

   public function __construct($template=null)
   {
       $this->template= $template;
   }
   public function render($params = array())
   {
       extract($params); //crée devinette ou devinettes ou ....

       $template = $this->template;

       ob_start(); //a aprtir de mtn tt ce qui est affichage tu stocke dans une mémoire tampon.
       include(VIEW.$template.'.php'); // tu me fait affichage de tempate mais tu me stocke dans memeoire tampon
       $contentPage = ob_get_clean(); //tu peux stopper affichage et tout le contenu le vider dans ma variable content page
       include_once (VIEW.'_gabarit.php'); // ce qui permet de include gabarit de l'afficher et comme gabarit connait contePage il affiche contentPage.
   }

   public function redirect($route)
   {
       header("Location:".HOST.$route);
       exit;
   }
}