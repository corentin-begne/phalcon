<?
class SfGuardUserPermission extends ModelBase
{
    
	/**
	 * @sfguuspe_user_id(['type':'string', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguuspe_permission_id(['type':'string', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $permission_id;

	/**
	 * @sfguuspe_created_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguuspe_updated_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguuspe_permission_id', 'SfGuardPermission', 'sfgupe_id', array('alias' => 'sf_guard_permission'));
		$this->hasMany('sfguuspe_permission_id', 'SfGuardPermission', 'sfgupe_id', array('alias' => 'sf_guard_permission'));
		$this->belongsTo('sfguuspe_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('sfguuspe_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));

    }

    public function getSource()
    {
        return 'sf_guard_user_permission';
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
            'user_id' => 'sfguuspe_user_id',
			'permission_id' => 'sfguuspe_permission_id',
			'created_at' => 'sfguuspe_created_at',
			'updated_at' => 'sfguuspe_updated_at'
        );
    }

}
