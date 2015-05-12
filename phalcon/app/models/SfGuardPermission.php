<?php

class SfGuardPermission extends \Phalcon\Mvc\Model
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
     *
     * @var string
     */
    public $description;

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
        $this->hasMany('id', 'Sf_guard_group_permission', 'permission_id', array('alias' => 'Sf_guard_group_permission'));
        $this->hasMany('id', 'Sf_guard_user_permission', 'permission_id', array('alias' => 'Sf_guard_user_permission'));
        $this->hasMany('id', 'SfGuardGroupPermission', 'permission_id', NULL);
        $this->hasMany('id', 'SfGuardUserPermission', 'permission_id', NULL);
    }

}
