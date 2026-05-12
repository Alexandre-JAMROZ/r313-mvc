<?php

namespace controllers;
class Articles extends \app\Controller {
    /**
     * Cette méthode affiche la liste des articles
     * 
     * @return void
     */
    public function index() {
        // On instancie le modèle "Articles"
        $this->loadModel("Articles");

        // On stocke la liste des articles dans $articles
        $articles = $this->Articles->getAll();

        // On affiche les données
        $this->render("index", compact("articles"));
    }
}