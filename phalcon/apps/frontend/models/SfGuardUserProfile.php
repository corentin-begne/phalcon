<?
class SfGuardUserProfile extends ModelBase
{
    
	/**
	 * @sfguuspr_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguuspr_user_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguuspr_biography(['type':'string', 'isNull': true, 'length': 20])
	 */
	public $biography;

	/**
	 * @sfguuspr_created_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguuspr_updated_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

	/**
	 * @sfguuspr_gender_id(['type':'string', 'isNull': false, 'default': '2', 'key': 'MUL', 'length': 20])
	 */
	public $gender_id;

	/**
	 * @sfguuspr_birthday_date(['type':'string', 'isNull': true, 'length': 20])
	 */
	public $birthday_date;

	/**
	 * @sfguuspr_avatar_skin(['type':'double', 'isNull': true, 'default': '0.80', 'length': 18,2])
	 */
	public $avatar_skin;

	/**
	 * @sfguuspr_avatar_hair(['type':'double', 'isNull': true, 'default': '0.40', 'length': 18,2])
	 */
	public $avatar_hair;

	/**
	 * @sfguuspr_avatar_eyes(['type':'double', 'isNull': true, 'default': '0.99', 'length': 18,2])
	 */
	public $avatar_eyes;

	/**
	 * @sfguuspr_profile_picture(['type':'string', 'isNull': true, 'length': 18,2])
	 */
	public $profile_picture;

	/**
	 * @sfguuspr_beelz(['type':'string', 'isNull': false, 'default': '300', 'length': 20])
	 */
	public $beelz;

	/**
	 * @sfguuspr_has_tip(['type':'string', 'isNull': false, 'default': '1', 'length': 20])
	 */
	public $has_tip;

	/**
	 * @sfguuspr_avatar_gender_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $avatar_gender_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguuspr_avatar_gender_id', 'Gender', 'ge_id', array('alias' => 'gender'));
		$this->hasMany('sfguuspr_avatar_gender_id', 'Gender', 'ge_id', array('alias' => 'gender'));
		$this->belongsTo('sfguuspr_gender_id', 'Gender', 'ge_id', array('alias' => 'gender'));
		$this->hasMany('sfguuspr_gender_id', 'Gender', 'ge_id', array('alias' => 'gender'));
		$this->belongsTo('sfguuspr_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('sfguuspr_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));

    }

    public function getSource()
    {
        return 'sf_guard_user_profile';
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
            'id' => 'sfguuspr_id',
			'user_id' => 'sfguuspr_user_id',
			'biography' => 'sfguuspr_biography',
			'created_at' => 'sfguuspr_created_at',
			'updated_at' => 'sfguuspr_updated_at',
			'gender_id' => 'sfguuspr_gender_id',
			'birthday_date' => 'sfguuspr_birthday_date',
			'avatar_skin' => 'sfguuspr_avatar_skin',
			'avatar_hair' => 'sfguuspr_avatar_hair',
			'avatar_eyes' => 'sfguuspr_avatar_eyes',
			'profile_picture' => 'sfguuspr_profile_picture',
			'beelz' => 'sfguuspr_beelz',
			'has_tip' => 'sfguuspr_has_tip',
			'avatar_gender_id' => 'sfguuspr_avatar_gender_id'
        );
    }

}
