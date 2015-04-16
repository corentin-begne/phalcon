<?php

class SfGuardUserPermission extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var integer
     */
    public $permission_id;

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
        $this->belongsTo('permission_id', 'Sf_guard_permission', 'id', array('alias' => 'Sf_guard_permission'));
        $this->belongsTo('user_id', 'Sf_guard_user', 'id', array('alias' => 'Sf_guard_user'));
        $this->belongsTo('permission_id', 'SfGuardPermission', 'id', array('foreignKey' => true));
        $this->belongsTo('user_id', 'SfGuardUser', 'id', array('foreignKey' => true));
    }

}
