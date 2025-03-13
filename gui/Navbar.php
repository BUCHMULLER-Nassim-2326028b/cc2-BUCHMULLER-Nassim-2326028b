<?php
namespace gui;

/**
 * Class Navbar
 * Gère l'affichage de la barre de navigation (menu) dans l'interface utilisateur.
 * La barre de navigation change dynamiquement en fonction du statut de l'utilisateur (connecté ou non, rôle d'auteur).
 *
 * @package gui
 */
class Navbar {

    /**
     * Affiche la barre de navigation avec les options adaptées au statut de l'utilisateur.
     *
     * Si un utilisateur est connecté, les liens spécifiques à son rôle (auteur ou non) sont affichés.
     * Si l'utilisateur n'est pas connecté, un lien de connexion est affiché.
     */
    public static function display() {
        echo '<nav><ul>';

        // Vérifie si l'utilisateur est connecté
        if (isset($_SESSION['user'])) {
            // Vérifie si l'utilisateur est un auteur
            if ($_SESSION['user']->isAuthor()) {
                echo '<li><a href="/annonces/index.php/create-annonce">Créer une annonce</a></li>';
            }
            echo '<li><a href="/annonces/index.php/annonces">Liste des posts</a></li>';
            echo '<li><a href="/annonces/index.php/messages">Consulter mes messages</a></li>';
            echo '<li><a href="/annonces/index.php/logout">Déconnexion</a></li>';
        } else {
            echo '<li><a href="/annonces/">Connexion</a></li>';
        }

        echo '</ul></nav>';
    }
}
?>
