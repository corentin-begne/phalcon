<?
class SfGuardForgotPassword extends ModelBase
{
    
	/**
	 * @sfgufopa_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfgufopa_user_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfgufopa_unique_key(['type':'varchar', 'isNull': true, 'length': 255])
	 */
	public $unique_key;

	/**
	 * @sfgufopa_expires_at(['type':'datetime', 'isNull': false, 'length': 255])
	 */
	public $expires_at;

	/**
	 * @sfgufopa_created_at(['type':'datetime', 'isNull': false, 'length': 255])
	 */
	public $created_at;

	/**
	 * @sfgufopa_updated_at(['type':'datetime', 'isNull': false, 'length': 255])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfgufopa_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_forgot_password';
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
            'id' => 'sfgufopa_id',
			'user_id' => 'sfgufopa_user_id',
			'unique_key' => 'sfgufopa_unique_key',
			'expires_at' => 'sfgufopa_expires_at',
			'created_at' => 'sfgufopa_created_at',
			'updated_at' => 'sfgufopa_updated_at'
        );
    }

}
