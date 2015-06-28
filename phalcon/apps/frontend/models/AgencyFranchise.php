<?
class AgencyFranchise extends ModelBase
{
    
	/**
	 * @agfr_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @agfr_agency_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $agency_id;

	/**
	 * @agfr_franchise_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $franchise_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('agfr_agency_id', 'Agency', 'ag_id', array('alias' => 'agency_agency_id'));
		$this->belongsTo('agfr_franchise_id', 'Agency', 'ag_id', array('alias' => 'agency_franchise_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'AgencyFranchise';
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
            'id' => 'agfr_id',
			'agency_id' => 'agfr_agency_id',
			'franchise_id' => 'agfr_franchise_id'
        );
    }

}
