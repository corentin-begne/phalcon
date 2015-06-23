<?
class ReportMessage extends ModelBase
{
    
	/**
	 * @reme_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @reme_message(['type':'string', 'isNull': false, 'length': 64])
	 */
	public $message;

	/**
	 * @reme_type_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $type_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('reme_type_id', 'ReportType', 'rety_id', array('alias' => 'report_type'));
		$this->hasMany('reme_type_id', 'ReportType', 'rety_id', array('alias' => 'report_type'));

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
