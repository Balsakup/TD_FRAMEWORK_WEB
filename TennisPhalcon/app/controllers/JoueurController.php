<?php

class JoueurController extends \Phalcon\Mvc\Controller
{

    public function indexAction($page = 1, $col = 'nom', $order = 'desc')
    {
        $nbPerPage = 20;
        $nbPage    = ceil(Joueur::count() / $nbPerPage);
        $joueurs   = Joueur::query()
                             ->leftJoin('Pays', 'Joueur.codePays = Pays.code')
                             ->order("$col $order")
                             ->limit($nbPerPage, $nbPerPage * ($page - 1))
                             ->execute();

        $this->view->setVars([ 'joueurs' => $joueurs, 'page' => $page, 'nbPage' => $nbPage, 'col' => $col, 'order' => $order ]);
    }

    public function viewAction($id = null)
    {
        if ($id != null)
        {
            $joueur = Joueur::findFirst($id);
            $this->view->setVars([ 'joueur' => $joueur ]);
        }
        else
            die('Pour visualiser un joueur, vous devez me donner son id ;)');
    }

    public function addAction()
    {
        if ($this->request->isPost())
        {
            $joueur           = new Joueur();
            $joueur->nom      = $this->request->getPost('nom');
            $joueur->prenom   = $this->request->getPost('prenom');
            $joueur->codePays = $this->request->getPost('codePays');

            if ($joueur->save())
            {
                $this->flash->success('Le joueur a bien été ajouté ;)');

                return $this->response->redirect('joueur/index');
            }
            else
                $this->flash->error('Un erreur est survenue. Merci de réessayer plus tard :(');
        }

        $this->view->setVars([ 'pays' => Pays::find() ]);
    }

    public function deleteAction($id = null)
    {
        if ($id != null)
        {
            $joueur = Joueur::findFirst($id);
            $classement = Classement::findFirst([
                "idJoueur = $id"
            ]);

            if ($classement->delete() && $joueur->delete())
            {
                $this->flash->success('Le joueur a bien été supprimé ;)');

                return $this->response->redirect('joueur/index');
            }
            else
                $this->flash->error('Un erreur est survenue. Merci de réessayer plus tard :(');
        }
        die('Pour supprimer un joueur, vous devez me donner son id ;)');
    }

}

