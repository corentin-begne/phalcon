<?php

class MediaType extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'Sf_guard_user_media', 'type_id', array('alias' => 'Sf_guard_user_media'));
        $this->hasMany('id', 'SfGuardUserMedia', 'type_id', NULL);
    }

}
