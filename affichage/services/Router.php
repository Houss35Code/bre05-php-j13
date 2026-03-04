<?php

class Router
{
    public function __construct(){}

    public function handleRequest(): void
    {
        if(!isset($_GET["route"]) || empty($_GET["route"]))
        {
            $ctrl = new BlogController();
            $ctrl->index();
        }
        elseif(str_contains($_GET["route"], "article"))
        {
            $id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
            $ctrl = new BlogController();
            $ctrl->article($id);
        }
        else
        {
            $ctrl = new BlogController();
            $ctrl->notFound();
        }
    }
}