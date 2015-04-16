<?php

class SfGuardUserItem extends \Phalcon\Mvc\Model
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
     * @var string
     */
    public $item_id;

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
     *
     * @var integer
     */
    public $is_worn;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('item_id', 'Item', 'id', array('alias' => 'Item'));
        $this->belongsTo('user_id', 'Sf_guard_user', 'id', array('alias' => 'Sf_guard_user'));
        $this->belongsTo('item_id', 'Item', 'id', array('foreignKey' => true));
        $this->belongsTo('user_id', 'SfGuardUser', 'id', array('foreignKey' => true));
    }

}
