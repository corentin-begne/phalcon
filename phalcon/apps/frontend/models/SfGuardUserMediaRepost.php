<?
class SfGuardUserMediaRepost extends ModelBase
{
    
	/**
	 * @sfguusmere_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusmere_media_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $media_id;

	/**
	 * @sfguusmere_user_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusmere_created_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusmere_updated_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusmere_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media'));
		$this->hasMany('sfguusmere_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media'));
		$this->belongsTo('sfguusmere_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('sfguusmere_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));

    }

    public function getSource()
    {
        return 'sf_guard_user_media_repost';
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
            'id' => 'sfguusmere_id',
			'media_id' => 'sfguusmere_media_id',
			'user_id' => 'sfguusmere_user_id',
			'created_at' => 'sfguusmere_created_at',
			'updated_at' => 'sfguusmere_updated_at'
        );
    }

}
