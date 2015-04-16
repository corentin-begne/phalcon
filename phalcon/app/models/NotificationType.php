<?php

class NotificationType extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'Sf_guard_user_notification', 'type_id', array('alias' => 'Sf_guard_user_notification'));
        $this->hasMany('id', 'SfGuardUserNotification', 'type_id', NULL);
    }

}
