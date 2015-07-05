<?
class SfAlloPassPurchase extends ModelBase
{
    
	/**
	 * @sfalpapu_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfalpapu_user_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfalpapu_product_name(['type':'varchar', 'isNull': false, 'length': 255])
	 */
	public $product_name;

	/**
	 * @sfalpapu_code(['type':'varchar', 'isNull': false, 'key': 'UNI', 'length': 100])
	 */
	public $code;

	/**
	 * @sfalpapu_price(['type':'decimal', 'isNull': false, 'length': 18])
	 */
	public $price;

	/**
	 * @sfalpapu_gift(['type':'decimal', 'isNull': false, 'length': 18])
	 */
	public $gift;

	/**
	 * @sfalpapu_transaction_id(['type':'varchar', 'isNull': false, 'key': 'UNI', 'length': 100])
	 */
	public $transaction_id;

	/**
	 * @sfalpapu_trxid(['type':'varchar', 'isNull': false, 'key': 'UNI', 'length': 100])
	 */
	public $trxid;

	/**
	 * @sfalpapu_created_at(['type':'datetime', 'isNull': false, 'length': 100])
	 */
	public $created_at;

	/**
	 * @sfalpapu_updated_at(['type':'datetime', 'isNull': false, 'length': 100])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfalpapu_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_allo_pass_purchase';
    }
    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'id' => 'sfalpapu_id',
			'user_id' => 'sfalpapu_user_id',
			'product_name' => 'sfalpapu_product_name',
			'code' => 'sfalpapu_code',
			'price' => 'sfalpapu_price',
			'gift' => 'sfalpapu_gift',
			'transaction_id' => 'sfalpapu_transaction_id',
			'trxid' => 'sfalpapu_trxid',
			'created_at' => 'sfalpapu_created_at',
			'updated_at' => 'sfalpapu_updated_at'
        );
    }

}
