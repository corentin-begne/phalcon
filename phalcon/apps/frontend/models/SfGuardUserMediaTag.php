<?
class SfGuardUserMediaTag extends ModelBase
{
    
	/**
	 * @sfguusmeta_media_id(['type':'bigint', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $media_id;

	/**
	 * @sfguusmeta_tag_id(['type':'bigint', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $tag_id;

	/**
	 * @sfguusmeta_created_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusmeta_updated_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusmeta_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media_media_id'));
		$this->belongsTo('sfguusmeta_tag_id', 'MediaTag', 'meta_id', array('alias' => 'media_tag_tag_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_user_media_tag';
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
            'media_id' => 'sfguusmeta_media_id',
			'tag_id' => 'sfguusmeta_tag_id',
			'created_at' => 'sfguusmeta_created_at',
			'updated_at' => 'sfguusmeta_updated_at'
        );
    }

}
