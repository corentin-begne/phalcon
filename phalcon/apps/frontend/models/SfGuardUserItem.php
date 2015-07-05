<?
class SfGuardUserItem extends ModelBase
{
    
	/**
	 * @sfguusit_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusit_user_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusit_item_id(['type':'varchar', 'isNull': false, 'key': 'MUL', 'length': 32])
	 */
	public $item_id;

	/**
	 * @sfguusit_created_at(['type':'datetime', 'isNull': false, 'length': 32])
	 */
	public $created_at;

	/**
	 * @sfguusit_updated_at(['type':'datetime', 'isNull': false, 'length': 32])
	 */
	public $updated_at;

	/**
	 * @sfguusit_is_worn(['type':'tinyint', 'isNull': true, 'length': 1])
	 */
	public $is_worn;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusit_item_id', 'Item', 'it_id', array('alias' => 'item_item_id'));
		$this->belongsTo('sfguusit_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_user_item';
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
            'id' => 'sfguusit_id',
			'user_id' => 'sfguusit_user_id',
			'item_id' => 'sfguusit_item_id',
			'created_at' => 'sfguusit_created_at',
			'updated_at' => 'sfguusit_updated_at',
			'is_worn' => 'sfguusit_is_worn'
        );
    }

}
