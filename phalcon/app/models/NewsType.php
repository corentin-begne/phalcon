<?php

class NewsType extends \Phalcon\Mvc\Model
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
    public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Sf_guard_user_news', 'type_id', array('alias' => 'Sf_guard_user_news'));
        $this->hasMany('id', 'SfGuardUserNews', 'type_id', NULL);
    }

}
