<?
class SfAffiliationPartener extends ModelBase
{
    
	/**
	 * @sfafpa_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfafpa_name(['type':'string', 'isNull': false, 'key': 'UNI', 'length': 50])
	 */
	public $name;

	/**
	 * @sfafpa_short_key(['type':'string', 'isNull': false, 'key': 'UNI', 'length': 50])
	 */
	public $short_key;

	/**
	 * @sfafpa_description(['type':'string', 'isNull': true, 'length': 50])
	 */
	public $description;

	/**
	 * @sfafpa_progid(['type':'string', 'isNull': true, 'length': 50])
	 */
	public $progid;

	/**
	 * @sfafpa_partid(['type':'string', 'isNull': true, 'key': 'MUL', 'length': 50])
	 */
	public $partid;

	/**
	 * @sfafpa_url(['type':'string', 'isNull': true, 'length': 50])
	 */
	public $url;

	/**
	 * @sfafpa_is_active(['type':'string', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_active;

	/**
	 * @sfafpa_created_at(['type':'string', 'isNull': false, 'length': 1])
	 */
	public $created_at;

	/**
	 * @sfafpa_updated_at(['type':'string', 'isNull': false, 'length': 1])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfafpa_id', 'SfAffiliationBanner', 'sfafba_partner_id', array('alias' => 'sf_affiliation_banner'));
		$this->hasMany('sfafpa_id', 'SfAffiliationBanner', 'sfafba_partner_id', array('alias' => 'sf_affiliation_banner'));
		$this->belongsTo('sfafpa_id', 'SfAffiliationWidget', 'sfafwi_partner_id', array('alias' => 'sf_affiliation_widget'));
		$this->hasMany('sfafpa_id', 'SfAffiliationWidget', 'sfafwi_partner_id', array('alias' => 'sf_affiliation_widget'));


    }

    public function getSource()
    {
        return 'sf_affiliation_partener';
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
            'id' => 'sfafpa_id',
			'name' => 'sfafpa_name',
			'short_key' => 'sfafpa_short_key',
			'description' => 'sfafpa_description',
			'progid' => 'sfafpa_progid',
			'partid' => 'sfafpa_partid',
			'url' => 'sfafpa_url',
			'is_active' => 'sfafpa_is_active',
			'created_at' => 'sfafpa_created_at',
			'updated_at' => 'sfafpa_updated_at'
        );
    }

}
