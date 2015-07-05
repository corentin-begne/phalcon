<?
class SfGuardUserEvent extends ModelBase
{
    
	/**
	 * @sfguusev_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusev_user_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusev_info(['type':'text', 'isNull': true, 'length': 20])
	 */
	public $info;

	/**
	 * @sfguusev_type_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $type_id;

	/**
	 * @sfguusev_created_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusev_updated_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusev_type_id', 'EventType', 'evty_id', array('alias' => 'event_type_type_id'));
		$this->belongsTo('sfguusev_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_user_event';
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
            'id' => 'sfguusev_id',
			'user_id' => 'sfguusev_user_id',
			'info' => 'sfguusev_info',
			'type_id' => 'sfguusev_type_id',
			'created_at' => 'sfguusev_created_at',
			'updated_at' => 'sfguusev_updated_at'
        );
    }

}
