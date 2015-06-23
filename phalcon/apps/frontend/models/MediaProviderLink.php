<?
class MediaProviderLink extends ModelBase
{
    
	/**
	 * @meprli_type_id(['type':'string', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $type_id;

	/**
	 * @meprli_provider_id(['type':'string', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $provider_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('meprli_provider_id', 'ProviderType', 'prty_id', array('alias' => 'provider_type'));
		$this->hasMany('meprli_provider_id', 'ProviderType', 'prty_id', array('alias' => 'provider_type'));
		$this->belongsTo('meprli_type_id', 'MediaType', 'mety_id', array('alias' => 'media_type'));
		$this->hasMany('meprli_type_id', 'MediaType', 'mety_id', array('alias' => 'media_type'));

    }

    public function getSource()
    {
        return 'media_provider_link';
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
            'type_id' => 'meprli_type_id',
			'provider_id' => 'meprli_provider_id'
        );
    }

}
