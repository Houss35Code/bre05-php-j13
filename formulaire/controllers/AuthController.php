<?php
class AuthController extends AbstractController {
    public function login() : void {
        // Si $_POST est vide, c'est que l'utilisateur arrive sur la page pour la première fois
        if (empty($_POST)) {
            $this->render("login", []);
        } 
        // Sinon, le formulaire a été soumis
        else {
            if (isset($_POST["email"])) {
                // Nettoyage de la donnée pour la sécurité
                $email = htmlspecialchars($_POST["email"]);
                var_dump($email);
            }
        }
    }

    public function notFound() : void {
        $this->render("notFound", []);
    }
}