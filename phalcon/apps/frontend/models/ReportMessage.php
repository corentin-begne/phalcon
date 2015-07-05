<?
class ReportMessage extends ModelBase
{
    
	/**
	 * @reme_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @reme_message(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $message;

	/**
	 * @reme_type_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $type_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('reme_id', 'SfGuardUserReport', 'sfguusre_message_id', array('alias' => 'sf_guard_user_report_message_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'report_message';
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
            'id' => 'reme_id',
			'message' => 'reme_message',
			'type_id' => 'reme_type_id'
        );
    }

}
