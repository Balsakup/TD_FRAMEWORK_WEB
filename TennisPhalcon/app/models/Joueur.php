<?php

class Joueur extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $prenom;

    /**
     *
     * @var string
     */
    public $nom;

    /**
     *
     * @var string
     */
    public $codePays;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Classement', 'idJoueur', array('alias' => 'Classement'));
        $this->belongsTo('codePays', 'Pays', 'code', array('alias' => 'Pays'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'joueur';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Joueur[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Joueur
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
