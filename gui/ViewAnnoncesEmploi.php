<?php
namespace gui;

include_once "View.php";

class ViewAnnoncesEmploi extends View
{
    public function __construct($layout, $login, $presenter)
    {
        parent::__construct($layout, $login);

        $this->title= 'Exemple Annonces Basic PHP: Alternance';

        $this->content = $presenter->getAllEmploiHTML();
    }
}