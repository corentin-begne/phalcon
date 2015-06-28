<?
class Agency extends ModelBase
{
    
	/**
	 * @ag_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @ag_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

	/**
	 * @ag_siret(['type':'int', 'isNull': true, 'length': 14])
	 */
	public $siret;

	/**
	 * @ag_type_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $type_id;

	/**
	 * @ag_manager_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $manager_id;

	/**
	 * @ag_created_at(['type':'timestamp', 'isNull': false, 'default': 'CURRENT_TIMESTAMP', 'length': 11])
	 */
	public $created_at;

	/**
	 * @ag_updated_at(['type':'timestamp', 'isNull': false, 'default': 'CURRENT_TIMESTAMP', 'extra': 'on update CURRENT_TIMESTAMP', 'length': 11])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('ag_id', 'AgencyFranchise', 'agfr_agency_id', array('alias' => 'agency_franchise_agency_id'));
		$this->hasMany('ag_id', 'AgencyFranchise', 'agfr_franchise_id', array('alias' => 'agency_franchise_franchise_id'));
		$this->hasMany('ag_id', 'Diagnostic', 'di_agency_id', array('alias' => 'diagnostic_agency_id'));
		$this->hasMany('ag_id', 'User', 'us_agency_id', array('alias' => 'user_agency_id'));

		$this->belongsTo('ag_type_id', 'AgencyType', 'agty_id', array('alias' => 'agency_type_type_id'));
		$this->belongsTo('ag_manager_id', 'User', 'us_id', array('alias' => 'user_manager_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'Agency';
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
            'id' => 'ag_id',
			'name' => 'ag_name',
			'siret' => 'ag_siret',
			'type_id' => 'ag_type_id',
			'manager_id' => 'ag_manager_id',
			'created_at' => 'ag_created_at',
			'updated_at' => 'ag_updated_at'
        );
    }

}
