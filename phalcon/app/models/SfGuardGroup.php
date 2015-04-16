<?php

class SfGuardGroup extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'Sf_guard_group_permission', 'group_id', array('alias' => 'Sf_guard_group_permission'));
        $this->hasMany('id', 'Sf_guard_user_group', 'group_id', array('alias' => 'Sf_guard_user_group'));
        $this->hasMany('id', 'SfGuardGroupPermission', 'group_id', NULL);
        $this->hasMany('id', 'SfGuardUserGroup', 'group_id', NULL);
    }

}
