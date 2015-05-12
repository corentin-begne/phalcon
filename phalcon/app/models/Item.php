<?php

class Item extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $category_id;

    /**
     *
     * @var integer
     */
    public $type_id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var integer
     */
    public $price;

    /**
     *
     * @var integer
     */
    public $gender_id;

    /**
     *
     * @var integer
     */
    public $is_allowed;

    /**
     *
     * @var integer
     */
    public $is_active;

    /**
     *
     * @var integer
     */
    public $is_premium;

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
     * @var string
     */
    public $setting;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Item_tag_link', 'item_id', array('alias' => 'Item_tag_link'));
        $this->hasMany('id', 'Sf_guard_user_item', 'item_id', array('alias' => 'Sf_guard_user_item'));
        $this->belongsTo('category_id', 'Item_category', 'id', array('alias' => 'Item_category'));
        $this->belongsTo('gender_id', 'Gender', 'id', array('alias' => 'Gender'));
        $this->belongsTo('type_id', 'Item_type', 'id', array('alias' => 'Item_type'));
        $this->hasMany('id', 'ItemTagLink', 'item_id', NULL);
        $this->hasMany('id', 'SfGuardUserItem', 'item_id', NULL);
        $this->belongsTo('category_id', 'ItemCategory', 'id', array('foreignKey' => true));
        $this->belongsTo('gender_id', 'Gender', 'id', array('foreignKey' => true));
        $this->belongsTo('type_id', 'ItemType', 'id', array('foreignKey' => true));
    }

}
