<?
class SfGuardUser extends ModelBase
{
    
	/**
	 * @sfguus_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguus_first_name(['type':'string', 'isNull': true, 'length': 255])
	 */
	public $first_name;

	/**
	 * @sfguus_last_name(['type':'string', 'isNull': true, 'length': 255])
	 */
	public $last_name;

	/**
	 * @sfguus_email_address(['type':'string', 'isNull': false, 'key': 'UNI', 'length': 255])
	 */
	public $email_address;

	/**
	 * @sfguus_username(['type':'string', 'isNull': false, 'key': 'UNI', 'length': 128])
	 */
	public $username;

	/**
	 * @sfguus_algorithm(['type':'string', 'isNull': false, 'default': 'sha1', 'length': 128])
	 */
	public $algorithm;

	/**
	 * @sfguus_salt(['type':'string', 'isNull': true, 'length': 128])
	 */
	public $salt;

	/**
	 * @sfguus_password(['type':'string', 'isNull': true, 'length': 128])
	 */
	public $password;

	/**
	 * @sfguus_is_active(['type':'string', 'isNull': true, 'default': '1', 'key': 'MUL', 'length': 1])
	 */
	public $is_active;

	/**
	 * @sfguus_is_super_admin(['type':'string', 'isNull': true, 'length': 1])
	 */
	public $is_super_admin;

	/**
	 * @sfguus_last_login(['type':'string', 'isNull': true, 'length': 1])
	 */
	public $last_login;

	/**
	 * @sfguus_location(['type':'string', 'isNull': true, 'length': 1])
	 */
	public $location;

	/**
	 * @sfguus_hometown(['type':'string', 'isNull': true, 'length': 1])
	 */
	public $hometown;

	/**
	 * @sfguus_locale(['type':'string', 'isNull': true, 'length': 1])
	 */
	public $locale;

	/**
	 * @sfguus_timezone(['type':'string', 'isNull': true, 'length': 1])
	 */
	public $timezone;

	/**
	 * @sfguus_facebook_id(['type':'string', 'isNull': true, 'key': 'UNI', 'length': 20])
	 */
	public $facebook_id;

	/**
	 * @sfguus_facebook_verified(['type':'string', 'isNull': true, 'length': 1])
	 */
	public $facebook_verified;

	/**
	 * @sfguus_facebook_link(['type':'string', 'isNull': true, 'length': 1])
	 */
	public $facebook_link;

	/**
	 * @sfguus_facebook_location_id(['type':'string', 'isNull': true, 'length': 20])
	 */
	public $facebook_location_id;

	/**
	 * @sfguus_facebook_hometown_id(['type':'string', 'isNull': true, 'length': 20])
	 */
	public $facebook_hometown_id;

	/**
	 * @sfguus_created_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguus_updated_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

	/**
	 * @sfguus_online(['type':'string', 'isNull': false, 'length': 1])
	 */
	public $online;

	/**
	 * @sfguus_cookie(['type':'string', 'isNull': true, 'length': 1])
	 */
	public $cookie;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguus_id', 'Report', 're_user_from_id', array('alias' => 'report'));
		$this->hasMany('sfguus_id', 'Report', 're_user_from_id', array('alias' => 'report'));
		$this->belongsTo('sfguus_id', 'Report', 're_user_to_id', array('alias' => 'report'));
		$this->hasMany('sfguus_id', 'Report', 're_user_to_id', array('alias' => 'report'));
		$this->belongsTo('sfguus_id', 'SfAlloPassPurchase', 'sfalpapu_user_id', array('alias' => 'sf_allo_pass_purchase'));
		$this->hasMany('sfguus_id', 'SfAlloPassPurchase', 'sfalpapu_user_id', array('alias' => 'sf_allo_pass_purchase'));
		$this->belongsTo('sfguus_id', 'SfGuardForgotPassword', 'sfgufopa_user_id', array('alias' => 'sf_guard_forgot_password'));
		$this->hasMany('sfguus_id', 'SfGuardForgotPassword', 'sfgufopa_user_id', array('alias' => 'sf_guard_forgot_password'));
		$this->belongsTo('sfguus_id', 'SfGuardRememberKey', 'sfgureke_user_id', array('alias' => 'sf_guard_remember_key'));
		$this->hasMany('sfguus_id', 'SfGuardRememberKey', 'sfgureke_user_id', array('alias' => 'sf_guard_remember_key'));
		$this->belongsTo('sfguus_id', 'SfGuardUserEvent', 'sfguusev_user_id', array('alias' => 'sf_guard_user_event'));
		$this->hasMany('sfguus_id', 'SfGuardUserEvent', 'sfguusev_user_id', array('alias' => 'sf_guard_user_event'));
		$this->belongsTo('sfguus_id', 'SfGuardUserGroup', 'sfguusgr_user_id', array('alias' => 'sf_guard_user_group'));
		$this->hasMany('sfguus_id', 'SfGuardUserGroup', 'sfguusgr_user_id', array('alias' => 'sf_guard_user_group'));
		$this->belongsTo('sfguus_id', 'SfGuardUserItem', 'sfguusit_user_id', array('alias' => 'sf_guard_user_item'));
		$this->hasMany('sfguus_id', 'SfGuardUserItem', 'sfguusit_user_id', array('alias' => 'sf_guard_user_item'));
		$this->belongsTo('sfguus_id', 'SfGuardUserMedia', 'sfguusme_user_id', array('alias' => 'sf_guard_user_media'));
		$this->hasMany('sfguus_id', 'SfGuardUserMedia', 'sfguusme_user_id', array('alias' => 'sf_guard_user_media'));
		$this->belongsTo('sfguus_id', 'SfGuardUserMediaComment', 'sfguusmeco_user_id', array('alias' => 'sf_guard_user_media_comment'));
		$this->hasMany('sfguus_id', 'SfGuardUserMediaComment', 'sfguusmeco_user_id', array('alias' => 'sf_guard_user_media_comment'));
		$this->belongsTo('sfguus_id', 'SfGuardUserMediaLike', 'sfguusmeli_user_id', array('alias' => 'sf_guard_user_media_like'));
		$this->hasMany('sfguus_id', 'SfGuardUserMediaLike', 'sfguusmeli_user_id', array('alias' => 'sf_guard_user_media_like'));
		$this->belongsTo('sfguus_id', 'SfGuardUserMediaRepost', 'sfguusmere_user_id', array('alias' => 'sf_guard_user_media_repost'));
		$this->hasMany('sfguus_id', 'SfGuardUserMediaRepost', 'sfguusmere_user_id', array('alias' => 'sf_guard_user_media_repost'));
		$this->belongsTo('sfguus_id', 'SfGuardUserMessage', 'sfguusme_user_id_from', array('alias' => 'sf_guard_user_message'));
		$this->hasMany('sfguus_id', 'SfGuardUserMessage', 'sfguusme_user_id_from', array('alias' => 'sf_guard_user_message'));
		$this->belongsTo('sfguus_id', 'SfGuardUserMessage', 'sfguusme_user_id_to', array('alias' => 'sf_guard_user_message'));
		$this->hasMany('sfguus_id', 'SfGuardUserMessage', 'sfguusme_user_id_to', array('alias' => 'sf_guard_user_message'));
		$this->belongsTo('sfguus_id', 'SfGuardUserNews', 'sfguusne_user_id', array('alias' => 'sf_guard_user_news'));
		$this->hasMany('sfguus_id', 'SfGuardUserNews', 'sfguusne_user_id', array('alias' => 'sf_guard_user_news'));
		$this->belongsTo('sfguus_id', 'SfGuardUserNotification', 'sfguusno_user_id', array('alias' => 'sf_guard_user_notification'));
		$this->hasMany('sfguus_id', 'SfGuardUserNotification', 'sfguusno_user_id', array('alias' => 'sf_guard_user_notification'));
		$this->belongsTo('sfguus_id', 'SfGuardUserPermission', 'sfguuspe_user_id', array('alias' => 'sf_guard_user_permission'));
		$this->hasMany('sfguus_id', 'SfGuardUserPermission', 'sfguuspe_user_id', array('alias' => 'sf_guard_user_permission'));
		$this->belongsTo('sfguus_id', 'SfGuardUserProfile', 'sfguuspr_user_id', array('alias' => 'sf_guard_user_profile'));
		$this->hasMany('sfguus_id', 'SfGuardUserProfile', 'sfguuspr_user_id', array('alias' => 'sf_guard_user_profile'));
		$this->belongsTo('sfguus_id', 'SfGuardUserRoom', 'sfguusro_user_id', array('alias' => 'sf_guard_user_room'));
		$this->hasMany('sfguus_id', 'SfGuardUserRoom', 'sfguusro_user_id', array('alias' => 'sf_guard_user_room'));
		$this->belongsTo('sfguus_id', 'SfGuardUserSubscription', 'sfguussu_user_id_from', array('alias' => 'sf_guard_user_subscription'));
		$this->hasMany('sfguus_id', 'SfGuardUserSubscription', 'sfguussu_user_id_from', array('alias' => 'sf_guard_user_subscription'));
		$this->belongsTo('sfguus_id', 'SfGuardUserSubscription', 'sfguussu_user_id_to', array('alias' => 'sf_guard_user_subscription'));
		$this->hasMany('sfguus_id', 'SfGuardUserSubscription', 'sfguussu_user_id_to', array('alias' => 'sf_guard_user_subscription'));


    }

    public function getSource()
    {
        return 'sf_guard_user';
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
            'id' => 'sfguus_id',
			'first_name' => 'sfguus_first_name',
			'last_name' => 'sfguus_last_name',
			'email_address' => 'sfguus_email_address',
			'username' => 'sfguus_username',
			'algorithm' => 'sfguus_algorithm',
			'salt' => 'sfguus_salt',
			'password' => 'sfguus_password',
			'is_active' => 'sfguus_is_active',
			'is_super_admin' => 'sfguus_is_super_admin',
			'last_login' => 'sfguus_last_login',
			'location' => 'sfguus_location',
			'hometown' => 'sfguus_hometown',
			'locale' => 'sfguus_locale',
			'timezone' => 'sfguus_timezone',
			'facebook_id' => 'sfguus_facebook_id',
			'facebook_verified' => 'sfguus_facebook_verified',
			'facebook_link' => 'sfguus_facebook_link',
			'facebook_location_id' => 'sfguus_facebook_location_id',
			'facebook_hometown_id' => 'sfguus_facebook_hometown_id',
			'created_at' => 'sfguus_created_at',
			'updated_at' => 'sfguus_updated_at',
			'online' => 'sfguus_online',
			'cookie' => 'sfguus_cookie'
        );
    }

}
