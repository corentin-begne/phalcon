<?php

class SfGuardUserNotification extends \Phalcon\Mvc\Model
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
    public $user_id;

    /**
     *
     * @var integer
     */
    public $type_id;

    /**
     *
     * @var string
     */
    public $value;

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
        $this->belongsTo('type_id', 'Notification_type', 'id', array('alias' => 'Notification_type'));
        $this->belongsTo('user_id', 'Sf_guard_user', 'id', array('alias' => 'Sf_guard_user'));
        $this->belongsTo('type_id', 'NotificationType', 'id', array('foreignKey' => true));
        $this->belongsTo('user_id', 'SfGuardUser', 'id', array('foreignKey' => true));
    }

}
