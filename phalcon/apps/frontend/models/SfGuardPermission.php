<?
class SfGuardPermission extends ModelBase
{
    
	/**
	 * @sfgupe_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfgupe_name(['type':'varchar', 'isNull': true, 'key': 'UNI', 'length': 255])
	 */
	public $name;

	/**
	 * @sfgupe_description(['type':'text', 'isNull': true, 'length': 255])
	 */
	public $description;

	/**
	 * @sfgupe_created_at(['type':'datetime', 'isNull': false, 'length': 255])
	 */
	public $created_at;

	/**
	 * @sfgupe_updated_at(['type':'datetime', 'isNull': false, 'length': 255])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('sfgupe_id', 'SfGuardGroupPermission', 'sfgugrpe_permission_id', array('alias' => 'sf_guard_group_permission_permission_id'));
		$this->hasMany('sfgupe_id', 'SfGuardUserPermission', 'sfguuspe_permission_id', array('alias' => 'sf_guard_user_permission_permission_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_permission';
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
            'id' => 'sfgupe_id',
			'name' => 'sfgupe_name',
			'description' => 'sfgupe_description',
			'created_at' => 'sfgupe_created_at',
			'updated_at' => 'sfgupe_updated_at'
        );
    }

}
