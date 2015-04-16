<?php

class SfGuardGroupPermission extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $group_id;

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
        $this->belongsTo('group_id', 'Sf_guard_group', 'id', array('alias' => 'Sf_guard_group'));
        $this->belongsTo('permission_id', 'Sf_guard_permission', 'id', array('alias' => 'Sf_guard_permission'));
        $this->belongsTo('group_id', 'SfGuardGroup', 'id', array('foreignKey' => true));
        $this->belongsTo('permission_id', 'SfGuardPermission', 'id', array('foreignKey' => true));
    }

}
