<?php

class SubscriptionStatus extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'Sf_guard_user_subscription', 'status_id', array('alias' => 'Sf_guard_user_subscription'));
        $this->hasMany('id', 'Sf_guard_user_subscription', 'status_id', array('alias' => 'Sf_guard_user_subscription'));
        $this->hasMany('id', 'SfGuardUserSubscription', 'status_id', NULL);
        $this->hasMany('id', 'SfGuardUserSubscription', 'status_id', NULL);
    }

}
