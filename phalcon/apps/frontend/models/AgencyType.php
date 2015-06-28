<?
class AgencyType extends ModelBase
{
    
	/**
	 * @agty_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @agty_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('agty_id', 'Agency', 'ag_type_id', array('alias' => 'agency_type_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'AgencyType';
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
            'id' => 'agty_id',
			'name' => 'agty_name'
        );
    }

}
