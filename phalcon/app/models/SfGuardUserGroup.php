<?php

class SfGuardUserGroup extends \Phalcon\Mvc\Model
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
    public $group_id;

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
        $this->belongsTo('user_id', 'Sf_guard_user', 'id', array('alias' => 'Sf_guard_user'));
        $this->belongsTo('group_id', 'SfGuardGroup', 'id', array('foreignKey' => true));
        $this->belongsTo('user_id', 'SfGuardUser', 'id', array('foreignKey' => true));
    }

}
