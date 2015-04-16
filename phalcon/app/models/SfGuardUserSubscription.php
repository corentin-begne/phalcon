<?php

class SfGuardUserSubscription extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $user_id_from;

    /**
     *
     * @var integer
     */
    public $user_id_to;

    /**
     *
     * @var integer
     */
    public $status_id;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     *
     * @var string
     */
    public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('status_id', 'Subscription_status', 'id', array('alias' => 'Subscription_status'));
        $this->belongsTo('status_id', 'Subscription_status', 'id', array('alias' => 'Subscription_status'));
        $this->belongsTo('user_id_from', 'Sf_guard_user', 'id', array('alias' => 'Sf_guard_user'));
        $this->belongsTo('user_id_to', 'Sf_guard_user', 'id', array('alias' => 'Sf_guard_user'));
        $this->belongsTo('status_id', 'SubscriptionStatus', 'id', array('foreignKey' => true));
        $this->belongsTo('status_id', 'SubscriptionStatus', 'id', array('foreignKey' => true));
        $this->belongsTo('user_id_from', 'SfGuardUser', 'id', array('foreignKey' => true));
        $this->belongsTo('user_id_to', 'SfGuardUser', 'id', array('foreignKey' => true));
    }

}
