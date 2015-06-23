<?
class SfGuardGroup extends ModelBase
{
    
	/**
	 * @sfgugr_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfgugr_name(['type':'string', 'isNull': true, 'key': 'UNI', 'length': 255])
	 */
	public $name;

	/**
	 * @sfgugr_description(['type':'string', 'isNull': true, 'length': 255])
	 */
	public $description;

	/**
	 * @sfgugr_created_at(['type':'string', 'isNull': false, 'length': 255])
	 */
	public $created_at;

	/**
	 * @sfgugr_updated_at(['type':'string', 'isNull': false, 'length': 255])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfgugr_id', 'SfGuardGroupPermission', 'sfgugrpe_group_id', array('alias' => 'sf_guard_group_permission'));
		$this->hasMany('sfgugr_id', 'SfGuardGroupPermission', 'sfgugrpe_group_id', array('alias' => 'sf_guard_group_permission'));
		$this->belongsTo('sfgugr_id', 'SfGuardUserGroup', 'sfguusgr_group_id', array('alias' => 'sf_guard_user_group'));
		$this->hasMany('sfgugr_id', 'SfGuardUserGroup', 'sfguusgr_group_id', array('alias' => 'sf_guard_user_group'));


    }

    public function getSource()
    {
        return 'sf_guard_group';
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
            'id' => 'sfgugr_id',
			'name' => 'sfgugr_name',
			'description' => 'sfgugr_description',
			'created_at' => 'sfgugr_created_at',
			'updated_at' => 'sfgugr_updated_at'
        );
    }

}
