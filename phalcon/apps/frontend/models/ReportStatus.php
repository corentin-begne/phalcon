<?
class ReportStatus extends ModelBase
{
    
	/**
	 * @rest_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @rest_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('rest_id', 'SfGuardUserReport', 'sfguusre_status_id', array('alias' => 'sf_guard_user_report_status_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'report_status';
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
            'id' => 'rest_id',
			'name' => 'rest_name'
        );
    }

}
