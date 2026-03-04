<?php

class Router {
    public function handleRequest() : void 
    {
        $controller = new AuthController();

        // On vérifie si le paramètre "route" est présent dans l'URL
        if (!isset($_GET['route'])) {
            // S'il n'y a pas de route, on affiche le formulaire de connexion
            $controller->login();
        } else {
            // Si une route est précisée (ex: ?route=contact), on affiche la page 404
            $controller->notFound();
        }
    }
}