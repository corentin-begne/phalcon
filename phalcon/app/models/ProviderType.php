<?php

class ProviderType extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'Sf_guard_user_media', 'provider_id', array('alias' => 'Sf_guard_user_media'));
        $this->hasMany('id', 'SfGuardUserMedia', 'provider_id', NULL);
    }

}
