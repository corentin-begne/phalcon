<?
class Gender extends ModelBase
{
    
	/**
	 * @ge_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @ge_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('ge_id', 'Item', 'it_gender_id', array('alias' => 'item_gender_id'));
		$this->hasMany('ge_id', 'SfGuardUserProfile', 'sfguuspr_avatar_gender_id', array('alias' => 'sf_guard_user_profile_avatar_gender_id'));
		$this->hasMany('ge_id', 'SfGuardUserProfile', 'sfguuspr_gender_id', array('alias' => 'sf_guard_user_profile_gender_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'gender';
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
            'id' => 'ge_id',
			'name' => 'ge_name'
        );
    }

}
