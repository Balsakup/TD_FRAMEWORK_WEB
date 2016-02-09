<?php

class Classement extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idJoueur;

    /**
     *
     * @var integer
     */
    public $annee;

    /**
     *
     * @var integer
     */
    public $rang;

    /**
     *
     * @var integer
     */
    public $points;

    /**
     *
     * @var integer
     */
    public $diff;

    /**
     *
     * @var integer
     */
    public $nbMatchs;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('idJoueur', 'Joueur', 'id', array('alias' => 'Joueur'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'classement';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Classement[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Classement
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
