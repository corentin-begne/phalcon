<?
class ProviderType extends ModelBase
{
    
	/**
	 * @prty_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @prty_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('prty_id', 'MediaProviderLink', 'meprli_provider_id', array('alias' => 'media_provider_link_provider_id'));
		$this->hasMany('prty_id', 'SfGuardUserMedia', 'sfguusme_provider_id', array('alias' => 'sf_guard_user_media_provider_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'provider_type';
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
            'id' => 'prty_id',
			'name' => 'prty_name'
        );
    }

}
