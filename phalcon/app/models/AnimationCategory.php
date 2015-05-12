<?php

class AnimationCategory extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'Animation', 'category_id', array('alias' => 'Animation'));
        $this->hasMany('id', 'Animation', 'category_id', NULL);
    }

}
