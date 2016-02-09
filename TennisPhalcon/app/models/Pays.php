<?php

class Pays extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $code;

    /**
     *
     * @var string
     */
    public $libelle;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('code', 'Joueur', 'codePays', array('alias' => 'Joueur'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pays';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pays[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pays
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
