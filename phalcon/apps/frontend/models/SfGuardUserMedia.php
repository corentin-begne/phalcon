<?
class SfGuardUserMedia extends ModelBase
{
    
	/**
	 * @sfguusme_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusme_type_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $type_id;

	/**
	 * @sfguusme_is_active(['type':'string', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_active;

	/**
	 * @sfguusme_description(['type':'string', 'isNull': false, 'length': 1])
	 */
	public $description;

	/**
	 * @sfguusme_provider_id(['type':'string', 'isNull': true, 'key': 'MUL', 'length': 20])
	 */
	public $provider_id;

	/**
	 * @sfguusme_created_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusme_updated_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

	/**
	 * @sfguusme_user_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusme_embed(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $embed;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusme_id', 'Report', 're_media_id', array('alias' => 'report'));
		$this->hasMany('sfguusme_id', 'Report', 're_media_id', array('alias' => 'report'));
		$this->belongsTo('sfguusme_id', 'SfGuardUserMediaComment', 'sfguusmeco_media_id', array('alias' => 'sf_guard_user_media_comment'));
		$this->hasMany('sfguusme_id', 'SfGuardUserMediaComment', 'sfguusmeco_media_id', array('alias' => 'sf_guard_user_media_comment'));
		$this->belongsTo('sfguusme_id', 'SfGuardUserMediaLike', 'sfguusmeli_media_id', array('alias' => 'sf_guard_user_media_like'));
		$this->hasMany('sfguusme_id', 'SfGuardUserMediaLike', 'sfguusmeli_media_id', array('alias' => 'sf_guard_user_media_like'));
		$this->belongsTo('sfguusme_id', 'SfGuardUserMediaRepost', 'sfguusmere_media_id', array('alias' => 'sf_guard_user_media_repost'));
		$this->hasMany('sfguusme_id', 'SfGuardUserMediaRepost', 'sfguusmere_media_id', array('alias' => 'sf_guard_user_media_repost'));
		$this->belongsTo('sfguusme_id', 'SfGuardUserMediaTag', 'sfguusmeta_media_id', array('alias' => 'sf_guard_user_media_tag'));
		$this->hasMany('sfguusme_id', 'SfGuardUserMediaTag', 'sfguusmeta_media_id', array('alias' => 'sf_guard_user_media_tag'));

		$this->belongsTo('sfguusme_provider_id', 'ProviderType', 'prty_id', array('alias' => 'provider_type'));
		$this->hasMany('sfguusme_provider_id', 'ProviderType', 'prty_id', array('alias' => 'provider_type'));
		$this->belongsTo('sfguusme_type_id', 'MediaType', 'mety_id', array('alias' => 'media_type'));
		$this->hasMany('sfguusme_type_id', 'MediaType', 'mety_id', array('alias' => 'media_type'));
		$this->belongsTo('sfguusme_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('sfguusme_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));

    }

    public function getSource()
    {
        return 'sf_guard_user_media';
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
            'id' => 'sfguusme_id',
			'type_id' => 'sfguusme_type_id',
			'is_active' => 'sfguusme_is_active',
			'description' => 'sfguusme_description',
			'provider_id' => 'sfguusme_provider_id',
			'created_at' => 'sfguusme_created_at',
			'updated_at' => 'sfguusme_updated_at',
			'user_id' => 'sfguusme_user_id',
			'embed' => 'sfguusme_embed'
        );
    }

}
