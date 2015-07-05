<?
class SfGuardUserRoom extends ModelBase
{
    
	/**
	 * @sfguusro_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusro_user_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusro_name(['type':'varchar', 'isNull': false, 'length': 255])
	 */
	public $name;

	/**
	 * @sfguusro_is_active(['type':'tinyint', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_active;

	/**
	 * @sfguusro_created_at(['type':'datetime', 'isNull': false, 'length': 1])
	 */
	public $created_at;

	/**
	 * @sfguusro_updated_at(['type':'datetime', 'isNull': false, 'length': 1])
	 */
	public $updated_at;

	/**
	 * @sfguusro_description(['type':'text', 'isNull': true, 'length': 1])
	 */
	public $description;

	/**
	 * @sfguusro_size(['type':'bigint', 'isNull': true, 'default': '32', 'length': 20])
	 */
	public $size;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusro_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_user_room';
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
            'id' => 'sfguusro_id',
			'user_id' => 'sfguusro_user_id',
			'name' => 'sfguusro_name',
			'is_active' => 'sfguusro_is_active',
			'created_at' => 'sfguusro_created_at',
			'updated_at' => 'sfguusro_updated_at',
			'description' => 'sfguusro_description',
			'size' => 'sfguusro_size'
        );
    }

}
