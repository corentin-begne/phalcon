<?php

class Gender extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'Item', 'gender_id', array('alias' => 'Item'));
        $this->hasMany('id', 'Sf_guard_user_profile', 'gender_id', array('alias' => 'Sf_guard_user_profile'));
        $this->hasMany('id', 'Item', 'gender_id', NULL);
        $this->hasMany('id', 'SfGuardUserProfile', 'gender_id', NULL);
    }

}
