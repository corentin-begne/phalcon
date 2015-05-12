<?php

class ItemTagLink extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $item_id;

    /**
     *
     * @var integer
     */
    public $tag_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('item_id', 'Item', 'id', array('alias' => 'Item'));
        $this->belongsTo('tag_id', 'Item_tag', 'id', array('alias' => 'Item_tag'));
        $this->belongsTo('item_id', 'Item', 'id', array('foreignKey' => true));
        $this->belongsTo('tag_id', 'ItemTag', 'id', array('foreignKey' => true));
    }

}
