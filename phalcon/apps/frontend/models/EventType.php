<?
class EventType extends ModelBase
{
    
	/**
	 * @evty_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @evty_name(['type':'string', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('evty_id', 'SfGuardUserEvent', 'sfguusev_type_id', array('alias' => 'sf_guard_user_event'));
		$this->hasMany('evty_id', 'SfGuardUserEvent', 'sfguusev_type_id', array('alias' => 'sf_guard_user_event'));


    }

    public function getSource()
    {
        return 'event_type';
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
            'id' => 'evty_id',
			'name' => 'evty_name'
        );
    }

}
