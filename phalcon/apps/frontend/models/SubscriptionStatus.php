<?
class SubscriptionStatus extends ModelBase
{
    
	/**
	 * @sust_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sust_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('sust_id', 'SfGuardUserSubscription', 'sfguussu_status_id', array('alias' => 'sf_guard_user_subscription_status_id'));
		$this->hasMany('sust_id', 'SfGuardUserSubscription', 'sfguussu_status_id', array('alias' => 'sf_guard_user_subscription_status_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'subscription_status';
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
            'id' => 'sust_id',
			'name' => 'sust_name'
        );
    }

}
