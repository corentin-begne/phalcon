<?
class DiagnosticState extends ModelBase
{
    
	/**
	 * @dist_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @dist_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('dist_id', 'Diagnostic', 'di_state_id', array('alias' => 'diagnostic_state_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'DiagnosticState';
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
            'id' => 'dist_id',
			'name' => 'dist_name'
        );
    }

}
