<?php

class EventType extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'Sf_guard_user_event', 'type_id', array('alias' => 'Sf_guard_user_event'));
        $this->hasMany('id', 'SfGuardUserEvent', 'type_id', NULL);
    }

}
