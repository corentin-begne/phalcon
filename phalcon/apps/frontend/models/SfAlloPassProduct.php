<?
class SfAlloPassProduct extends ModelBase
{
    
	/**
	 * @sfalpapr_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfalpapr_name(['type':'string', 'isNull': false, 'length': 255])
	 */
	public $name;

	/**
	 * @sfalpapr_description(['type':'string', 'isNull': true, 'length': 255])
	 */
	public $description;

	/**
	 * @sfalpapr_idd(['type':'string', 'isNull': true, 'key': 'UNI', 'length': 20])
	 */
	public $idd;

	/**
	 * @sfalpapr_auth(['type':'string', 'isNull': false, 'key': 'UNI', 'length': 100])
	 */
	public $auth;

	/**
	 * @sfalpapr_price(['type':'double', 'isNull': false, 'length': 18,2])
	 */
	public $price;

	/**
	 * @sfalpapr_gift(['type':'double', 'isNull': false, 'length': 18,2])
	 */
	public $gift;

	/**
	 * @sfalpapr_created_at(['type':'string', 'isNull': false, 'length': 18,2])
	 */
	public $created_at;

	/**
	 * @sfalpapr_updated_at(['type':'string', 'isNull': false, 'length': 18,2])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

    }

    public function getSource()
    {
        return 'sf_allo_pass_product';
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
            'id' => 'sfalpapr_id',
			'name' => 'sfalpapr_name',
			'description' => 'sfalpapr_description',
			'idd' => 'sfalpapr_idd',
			'auth' => 'sfalpapr_auth',
			'price' => 'sfalpapr_price',
			'gift' => 'sfalpapr_gift',
			'created_at' => 'sfalpapr_created_at',
			'updated_at' => 'sfalpapr_updated_at'
        );
    }

}
