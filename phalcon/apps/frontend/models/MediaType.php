<?
class MediaType extends ModelBase
{
    
	/**
	 * @mety_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @mety_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('mety_id', 'MediaProviderLink', 'meprli_type_id', array('alias' => 'media_provider_link_type_id'));
		$this->hasMany('mety_id', 'SfGuardUserMedia', 'sfguusme_type_id', array('alias' => 'sf_guard_user_media_type_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'media_type';
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
            'id' => 'mety_id',
			'name' => 'mety_name'
        );
    }

}
