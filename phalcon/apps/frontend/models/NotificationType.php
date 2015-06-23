<?
class NotificationType extends ModelBase
{
    
	/**
	 * @noty_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @noty_name(['type':'string', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('noty_id', 'SfGuardUserNotification', 'sfguusno_type_id', array('alias' => 'sf_guard_user_notification'));
		$this->hasMany('noty_id', 'SfGuardUserNotification', 'sfguusno_type_id', array('alias' => 'sf_guard_user_notification'));


    }

    public function getSource()
    {
        return 'notification_type';
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
            'id' => 'noty_id',
			'name' => 'noty_name'
        );
    }

}
