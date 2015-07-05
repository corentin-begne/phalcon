<?
class SfGuardUserMedia extends ModelBase
{
    
	/**
	 * @sfguusme_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusme_type_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $type_id;

	/**
	 * @sfguusme_is_active(['type':'tinyint', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_active;

	/**
	 * @sfguusme_description(['type':'text', 'isNull': false, 'length': 1])
	 */
	public $description;

	/**
	 * @sfguusme_provider_id(['type':'bigint', 'isNull': true, 'key': 'MUL', 'length': 20])
	 */
	public $provider_id;

	/**
	 * @sfguusme_created_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusme_updated_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

	/**
	 * @sfguusme_user_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusme_embed(['type':'text', 'isNull': false, 'length': 20])
	 */
	public $embed;

	/**
	 * @sfguusme_info(['type':'text', 'isNull': true, 'length': 20])
	 */
	public $info;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('sfguusme_id', 'Report', 're_media_id', array('alias' => 'report_media_id'));
		$this->hasMany('sfguusme_id', 'SfGuardUserMediaComment', 'sfguusmeco_media_id', array('alias' => 'sf_guard_user_media_comment_media_id'));
		$this->hasMany('sfguusme_id', 'SfGuardUserMediaLike', 'sfguusmeli_media_id', array('alias' => 'sf_guard_user_media_like_media_id'));
		$this->hasMany('sfguusme_id', 'SfGuardUserMediaRepost', 'sfguusmere_media_id', array('alias' => 'sf_guard_user_media_repost_media_id'));
		$this->hasMany('sfguusme_id', 'SfGuardUserMediaTag', 'sfguusmeta_media_id', array('alias' => 'sf_guard_user_media_tag_media_id'));
		$this->hasMany('sfguusme_id', 'SfGuardUserReport', 'sfguusre_media_id', array('alias' => 'sf_guard_user_report_media_id'));

		$this->belongsTo('sfguusme_provider_id', 'ProviderType', 'prty_id', array('alias' => 'provider_type_provider_id'));
		$this->belongsTo('sfguusme_type_id', 'MediaType', 'mety_id', array('alias' => 'media_type_type_id'));
		$this->belongsTo('sfguusme_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id'));

        parent::initialize();
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
			'embed' => 'sfguusme_embed',
			'info' => 'sfguusme_info'
        );
    }

}
