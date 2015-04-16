<?php

class ItemCategory extends \Phalcon\Mvc\Model
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Item', 'category_id', array('alias' => 'Item'));
        $this->hasMany('id', 'Item', 'category_id', NULL);
    }

}
