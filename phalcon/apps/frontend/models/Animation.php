<?
class Animation extends ModelBase
{
    
	/**
	 * @an_id(['type':'varchar', 'isNull': false, 'key': 'PRI', 'length': 32])
	 */
	public $id;

	/**
	 * @an_category_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $category_id;

	/**
	 * @an_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

	/**
	 * @an_price(['type':'bigint', 'isNull': false, 'length': 20])
	 */
	public $price;

	/**
	 * @an_comment(['type':'varchar', 'isNull': true, 'length': 128])
	 */
	public $comment;

	/**
	 * @an_is_active(['type':'tinyint', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_active;

	/**
	 * @an_delay(['type':'float', 'isNull': true, 'length': 18])
	 */
	public $delay;

	/**
	 * @an_created_at(['type':'datetime', 'isNull': false, 'length': 18])
	 */
	public $created_at;

	/**
	 * @an_updated_at(['type':'datetime', 'isNull': false, 'length': 18])
	 */
	public $updated_at;

	/**
	 * @an_gender_id(['type':'bigint', 'isNull': false, 'length': 20])
	 */
	public $gender_id;

	/**
	 * @an_is_premium(['type':'tinyint', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_premium;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('an_category_id', 'AnimationCategory', 'anca_id', array('alias' => 'animation_category_category_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'animation';
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
            'id' => 'an_id',
			'category_id' => 'an_category_id',
			'name' => 'an_name',
			'price' => 'an_price',
			'comment' => 'an_comment',
			'is_active' => 'an_is_active',
			'delay' => 'an_delay',
			'created_at' => 'an_created_at',
			'updated_at' => 'an_updated_at',
			'gender_id' => 'an_gender_id',
			'is_premium' => 'an_is_premium'
        );
    }

}
