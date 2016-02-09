<?php

class ClassementController extends \Phalcon\Mvc\Controller {

    public function indexAction()
    {
        $classement = Classement::query()
                                  ->leftJoin('Joueur', 'Classement.idJoueur = Joueur.id')
                                  ->leftJoin('Pays', 'Joueur.codePays = Pays.code')
                                  ->execute();

        $this->view->setVars([ 'classement' => $classement ]);
    }

}