<?
class SfGuardRememberKey extends ModelBase
{
    
	/**
	 * @sfgureke_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfgureke_user_id(['type':'string', 'isNull': true, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfgureke_remember_key(['type':'string', 'isNull': true, 'length': 32])
	 */
	public $remember_key;

	/**
	 * @sfgureke_ip_address(['type':'string', 'isNull': true, 'length': 50])
	 */
	public $ip_address;

	/**
	 * @sfgureke_created_at(['type':'string', 'isNull': false, 'length': 50])
	 */
	public $created_at;

	/**
	 * @sfgureke_updated_at(['type':'string', 'isNull': false, 'length': 50])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfgureke_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('sfgureke_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));

    }

    public function getSource()
    {
        return 'sf_guard_remember_key';
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
            'id' => 'sfgureke_id',
			'user_id' => 'sfgureke_user_id',
			'remember_key' => 'sfgureke_remember_key',
			'ip_address' => 'sfgureke_ip_address',
			'created_at' => 'sfgureke_created_at',
			'updated_at' => 'sfgureke_updated_at'
        );
    }

}
