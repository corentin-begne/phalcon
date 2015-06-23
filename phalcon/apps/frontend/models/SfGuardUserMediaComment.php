<?
class SfGuardUserMediaComment extends ModelBase
{
    
	/**
	 * @sfguusmeco_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusmeco_value(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $value;

	/**
	 * @sfguusmeco_media_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $media_id;

	/**
	 * @sfguusmeco_user_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusmeco_created_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusmeco_updated_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusmeco_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media'));
		$this->hasMany('sfguusmeco_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media'));
		$this->belongsTo('sfguusmeco_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('sfguusmeco_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));

    }

    public function getSource()
    {
        return 'sf_guard_user_media_comment';
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
            'id' => 'sfguusmeco_id',
			'value' => 'sfguusmeco_value',
			'media_id' => 'sfguusmeco_media_id',
			'user_id' => 'sfguusmeco_user_id',
			'created_at' => 'sfguusmeco_created_at',
			'updated_at' => 'sfguusmeco_updated_at'
        );
    }

}
