<?
class SfGuardUserGroup extends ModelBase
{
    
	/**
	 * @sfguusgr_user_id(['type':'bigint', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusgr_group_id(['type':'bigint', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $group_id;

	/**
	 * @sfguusgr_created_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusgr_updated_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusgr_group_id', 'SfGuardGroup', 'sfgugr_id', array('alias' => 'sf_guard_group_group_id'));
		$this->belongsTo('sfguusgr_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_user_group';
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
            'user_id' => 'sfguusgr_user_id',
			'group_id' => 'sfguusgr_group_id',
			'created_at' => 'sfguusgr_created_at',
			'updated_at' => 'sfguusgr_updated_at'
        );
    }

}
