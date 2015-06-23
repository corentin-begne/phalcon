<?
class ReportType extends ModelBase
{
    
	/**
	 * @rety_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @rety_name(['type':'string', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('rety_id', 'ReportMessage', 'reme_type_id', array('alias' => 'report_message'));
		$this->hasMany('rety_id', 'ReportMessage', 'reme_type_id', array('alias' => 'report_message'));


    }

    public function getSource()
    {
        return 'report_type';
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
            'id' => 'rety_id',
			'name' => 'rety_name'
        );
    }

}
