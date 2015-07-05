<?
class MediaTag extends ModelBase
{
    
	/**
	 * @meta_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @meta_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('meta_id', 'SfGuardUserMediaTag', 'sfguusmeta_tag_id', array('alias' => 'sf_guard_user_media_tag_tag_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'media_tag';
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
            'id' => 'meta_id',
			'name' => 'meta_name'
        );
    }

}
