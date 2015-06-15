<?
class  User extends \Phalcon\Mvc\Model
{
    
	/**
	 * @var([type:'integer', null: false, extra: 'auto_increment', key: 'PRI', length: 11])
	 */
	public $id;

	/**
	 * @var([type:'integer', null: false, length: 64])
	 */
	public $first_name;

	/**
	 * @var([type:'integer', null: false, length: 64])
	 */
	public $last_name;

	/**
	 * @var([type:'integer', null: false, length: 32])
	 */
	public $name;

	/**
	 * @var([type:'integer', null: false, length: 255])
	 */
	public $password;

	/**
	 * @var([type:'integer', null: false, length: 64])
	 */
	public $tel;

	/**
	 * @var([type:'integer', null: false, length: 255])
	 */
	public $address;

	/**
	 * @var([type:'integer', null: false, length: 255])
	 */
	public $mail;

	/**
	 * @var([type:'integer', null: false, key: 'MUL', length: 11])
	 */
	public $agency_id;

	/**
	 * @var([type:'integer', null: false, default: '1', length: 1])
	 */
	public $alert_email;

	/**
	 * @var([type:'integer', null: false, length: 1])
	 */
	public $alert_push;

	/**
	 * @var([type:'integer', null: true, length: 32])
	 */
	public $push_token;

	/**
	 * @var([type:'integer', null: true, length: 32])
	 */
	public $push_user;

	/**
	 * @var([type:'integer', null: true, length: 32])
	 */
	public $gapi_token;

	/**
	 * @var([type:'integer', null: false, default: 'CURRENT_TIMESTAMP', length: 32])
	 */
	public $created_at;

	/**
	 * @var([type:'integer', null: false, default: 'CURRENT_TIMESTAMP', extra: 'on update CURRENT_TIMESTAMP', length: 32])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('us_agency_id', 'Agency', 'ag_id', array('alias' => 'Agency'));
		$this->hasMany('us_agency_id', 'Agency', 'ag_id', array('alias' => 'Agency'));

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
			'tel' => 'us_tel',
			'address' => 'us_address',
			'mail' => 'us_mail',
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
