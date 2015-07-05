<?
class SfGuardUserSubscription extends ModelBase
{
    
	/**
	 * @sfguussu_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguussu_user_id_from(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id_from;

	/**
	 * @sfguussu_user_id_to(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id_to;

	/**
	 * @sfguussu_status_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $status_id;

	/**
	 * @sfguussu_created_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguussu_updated_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguussu_status_id', 'SubscriptionStatus', 'sust_id', array('alias' => 'subscription_status_status_id'));
		$this->belongsTo('sfguussu_status_id', 'SubscriptionStatus', 'sust_id', array('alias' => 'subscription_status_status_id'));
		$this->belongsTo('sfguussu_user_id_from', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id_from'));
		$this->belongsTo('sfguussu_user_id_to', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id_to'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_user_subscription';
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
            'id' => 'sfguussu_id',
			'user_id_from' => 'sfguussu_user_id_from',
			'user_id_to' => 'sfguussu_user_id_to',
			'status_id' => 'sfguussu_status_id',
			'created_at' => 'sfguussu_created_at',
			'updated_at' => 'sfguussu_updated_at'
        );
    }

}
