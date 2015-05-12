<?php

class SfAlloPassPurchase extends \Phalcon\Mvc\Model
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
    public $product_name;

    /**
     *
     * @var string
     */
    public $code;

    /**
     *
     * @var double
     */
    public $price;

    /**
     *
     * @var double
     */
    public $gift;

    /**
     *
     * @var string
     */
    public $transaction_id;

    /**
     *
     * @var string
     */
    public $trxid;

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
        $this->belongsTo('user_id', 'Sf_guard_user', 'id', array('alias' => 'Sf_guard_user'));
        $this->belongsTo('user_id', 'SfGuardUser', 'id', array('foreignKey' => true));
    }

}
