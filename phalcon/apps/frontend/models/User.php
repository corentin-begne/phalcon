<?
class User extends ModelBase
{
    
	/**
	 * @us_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @us_first_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $first_name;

	/**
	 * @us_last_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $last_name;

	/**
	 * @us_name(['type':'varchar', 'isNull': false, 'length': 32])
	 */
	public $name;

	/**
	 * @us_password(['type':'varchar', 'isNull': false, 'length': 32])
	 */
	public $password;

	/**
	 * @us_phone(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $phone;

	/**
	 * @us_address(['type':'varchar', 'isNull': false, 'length': 255])
	 */
	public $address;

	/**
	 * @us_postal_code(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $postal_code;

	/**
	 * @us_city(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $city;

	/**
	 * @us_email(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $email;

	/**
	 * @us_agency_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $agency_id;

	/**
	 * @us_alert_email(['type':'tinyint', 'isNull': false, 'default': '1', 'length': 1])
	 */
	public $alert_email;

	/**
	 * @us_alert_push(['type':'tinyint', 'isNull': false, 'length': 1])
	 */
	public $alert_push;

	/**
	 * @us_push_token(['type':'varchar', 'isNull': true, 'length': 32])
	 */
	public $push_token;

	/**
	 * @us_push_user(['type':'varchar', 'isNull': true, 'length': 32])
	 */
	public $push_user;

	/**
	 * @us_gapi_token(['type':'text', 'isNull': true, 'length': 32])
	 */
	public $gapi_token;

	/**
	 * @us_created_at(['type':'timestamp', 'isNull': false, 'default': 'CURRENT_TIMESTAMP', 'length': 32])
	 */
	public $created_at;

	/**
	 * @us_updated_at(['type':'timestamp', 'isNull': false, 'default': 'CURRENT_TIMESTAMP', 'extra': 'on update CURRENT_TIMESTAMP', 'length': 32])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('us_id', 'Agency', 'ag_manager_id', array('alias' => 'agency_manager_id'));
		$this->hasMany('us_id', 'Diagnostic', 'di_user_id', array('alias' => 'diagnostic_user_id'));
		$this->hasMany('us_id', 'Mission', 'mi_user_id', array('alias' => 'mission_user_id'));
		$this->hasMany('us_id', 'UserDiagnosticDownload', 'usdido_user_id', array('alias' => 'user_diagnostic_download_user_id'));
		$this->hasMany('us_id', 'UserPermission', 'uspe_user_id', array('alias' => 'user_permission_user_id'));

		$this->belongsTo('us_agency_id', 'Agency', 'ag_id', array('alias' => 'agency_agency_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'User';
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
            'id' => 'us_id',
			'first_name' => 'us_first_name',
			'last_name' => 'us_last_name',
			'name' => 'us_name',
			'password' => 'us_password',
			'phone' => 'us_phone',
			'address' => 'us_address',
			'postal_code' => 'us_postal_code',
			'city' => 'us_city',
			'email' => 'us_email',
			'agency_id' => 'us_agency_id',
			'alert_email' => 'us_alert_email',
			'alert_push' => 'us_alert_push',
			'push_token' => 'us_push_token',
			'push_user' => 'us_push_user',
			'gapi_token' => 'us_gapi_token',
			'created_at' => 'us_created_at',
			'updated_at' => 'us_updated_at'
        );
    }

}
