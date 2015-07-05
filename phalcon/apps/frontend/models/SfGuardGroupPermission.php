<?
class SfGuardGroupPermission extends ModelBase
{
    
	/**
	 * @sfgugrpe_group_id(['type':'bigint', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $group_id;

	/**
	 * @sfgugrpe_permission_id(['type':'bigint', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $permission_id;

	/**
	 * @sfgugrpe_created_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfgugrpe_updated_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfgugrpe_group_id', 'SfGuardGroup', 'sfgugr_id', array('alias' => 'sf_guard_group_group_id'));
		$this->belongsTo('sfgugrpe_permission_id', 'SfGuardPermission', 'sfgupe_id', array('alias' => 'sf_guard_permission_permission_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_group_permission';
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
            'group_id' => 'sfgugrpe_group_id',
			'permission_id' => 'sfgugrpe_permission_id',
			'created_at' => 'sfgugrpe_created_at',
			'updated_at' => 'sfgugrpe_updated_at'
        );
    }

}
