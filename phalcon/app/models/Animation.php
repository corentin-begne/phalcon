<?php

class Animation extends \Phalcon\Mvc\Model
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
     * @var string
     */
    public $comment;

    /**
     *
     * @var integer
     */
    public $is_active;

    /**
     *
     * @var double
     */
    public $delay;

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
    public $gender_id;

    /**
     *
     * @var integer
     */
    public $is_premium;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('category_id', 'Animation_category', 'id', array('alias' => 'Animation_category'));
        $this->belongsTo('category_id', 'AnimationCategory', 'id', array('foreignKey' => true));
    }

}
