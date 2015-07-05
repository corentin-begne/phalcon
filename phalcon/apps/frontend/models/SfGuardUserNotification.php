<?
class SfGuardUserNotification extends ModelBase
{
    
	/**
	 * @sfguusno_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusno_user_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusno_type_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $type_id;

	/**
	 * @sfguusno_value(['type':'text', 'isNull': false, 'length': 20])
	 */
	public $value;

	/**
	 * @sfguusno_created_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusno_updated_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

	/**
	 * @sfguusno_is_read(['type':'tinyint', 'isNull': false, 'length': 1])
	 */
	public $is_read;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusno_type_id', 'NotificationType', 'noty_id', array('alias' => 'notification_type_type_id'));
		$this->belongsTo('sfguusno_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_user_notification';
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
            'id' => 'sfguusno_id',
			'user_id' => 'sfguusno_user_id',
			'type_id' => 'sfguusno_type_id',
			'value' => 'sfguusno_value',
			'created_at' => 'sfguusno_created_at',
			'updated_at' => 'sfguusno_updated_at',
			'is_read' => 'sfguusno_is_read'
        );
    }

}
