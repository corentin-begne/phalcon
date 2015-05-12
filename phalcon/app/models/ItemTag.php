<?php

class ItemTag extends \Phalcon\Mvc\Model
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
    public $name_fr;

    /**
     *
     * @var string
     */
    public $name_en;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Item_tag_link', 'tag_id', array('alias' => 'Item_tag_link'));
        $this->hasMany('id', 'ItemTagLink', 'tag_id', NULL);
    }

}
