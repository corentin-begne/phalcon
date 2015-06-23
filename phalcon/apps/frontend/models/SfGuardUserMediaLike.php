<?
class SfGuardUserMediaLike extends ModelBase
{
    
	/**
	 * @sfguusmeli_media_id(['type':'string', 'isNull': true, 'key': 'MUL', 'length': 20])
	 */
	public $media_id;

	/**
	 * @sfguusmeli_user_id(['type':'string', 'isNull': true, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusmeli_created_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusmeli_updated_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusmeli_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media'));
		$this->hasMany('sfguusmeli_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media'));
		$this->belongsTo('sfguusmeli_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('sfguusmeli_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));

    }

    public function getSource()
    {
        return 'sf_guard_user_media_like';
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
            'media_id' => 'sfguusmeli_media_id',
			'user_id' => 'sfguusmeli_user_id',
			'created_at' => 'sfguusmeli_created_at',
			'updated_at' => 'sfguusmeli_updated_at'
        );
    }

}
