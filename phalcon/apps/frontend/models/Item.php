<?
class Item extends ModelBase
{
    
	/**
	 * @it_id(['type':'varchar', 'isNull': false, 'key': 'PRI', 'length': 32])
	 */
	public $id;

	/**
	 * @it_category_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $category_id;

	/**
	 * @it_type_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $type_id;

	/**
	 * @it_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

	/**
	 * @it_price(['type':'bigint', 'isNull': false, 'length': 20])
	 */
	public $price;

	/**
	 * @it_gender_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $gender_id;

	/**
	 * @it_is_allowed(['type':'tinyint', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_allowed;

	/**
	 * @it_is_active(['type':'tinyint', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_active;

	/**
	 * @it_is_premium(['type':'tinyint', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_premium;

	/**
	 * @it_created_at(['type':'datetime', 'isNull': false, 'length': 1])
	 */
	public $created_at;

	/**
	 * @it_updated_at(['type':'datetime', 'isNull': false, 'length': 1])
	 */
	public $updated_at;

	/**
	 * @it_setting(['type':'text', 'isNull': true, 'length': 1])
	 */
	public $setting;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('it_id', 'ItemTagLink', 'ittali_item_id', array('alias' => 'item_tag_link_item_id'));
		$this->hasMany('it_id', 'SfGuardUserItem', 'sfguusit_item_id', array('alias' => 'sf_guard_user_item_item_id'));

		$this->belongsTo('it_category_id', 'ItemCategory', 'itca_id', array('alias' => 'item_category_category_id'));
		$this->belongsTo('it_gender_id', 'Gender', 'ge_id', array('alias' => 'gender_gender_id'));
		$this->belongsTo('it_type_id', 'ItemType', 'itty_id', array('alias' => 'item_type_type_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'item';
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
            'id' => 'it_id',
			'category_id' => 'it_category_id',
			'type_id' => 'it_type_id',
			'name' => 'it_name',
			'price' => 'it_price',
			'gender_id' => 'it_gender_id',
			'is_allowed' => 'it_is_allowed',
			'is_active' => 'it_is_active',
			'is_premium' => 'it_is_premium',
			'created_at' => 'it_created_at',
			'updated_at' => 'it_updated_at',
			'setting' => 'it_setting'
        );
    }

}
