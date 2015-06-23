<?
class SfAffiliationBanner extends ModelBase
{
    
	/**
	 * @sfafba_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfafba_partner_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $partner_id;

	/**
	 * @sfafba_name(['type':'string', 'isNull': false, 'key': 'UNI', 'length': 50])
	 */
	public $name;

	/**
	 * @sfafba_size(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 10])
	 */
	public $size;

	/**
	 * @sfafba_lang(['type':'string', 'isNull': true, 'length': 5])
	 */
	public $lang;

	/**
	 * @sfafba_html_code(['type':'string', 'isNull': false, 'length': 5])
	 */
	public $html_code;

	/**
	 * @sfafba_keywords(['type':'string', 'isNull': true, 'length': 5])
	 */
	public $keywords;

	/**
	 * @sfafba_is_active(['type':'string', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_active;

	/**
	 * @sfafba_created_at(['type':'string', 'isNull': false, 'length': 1])
	 */
	public $created_at;

	/**
	 * @sfafba_updated_at(['type':'string', 'isNull': false, 'length': 1])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfafba_partner_id', 'SfAffiliationPartener', 'sfafpa_id', array('alias' => 'sf_affiliation_partener'));
		$this->hasMany('sfafba_partner_id', 'SfAffiliationPartener', 'sfafpa_id', array('alias' => 'sf_affiliation_partener'));

    }

    public function getSource()
    {
        return 'sf_affiliation_banner';
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
            'id' => 'sfafba_id',
			'partner_id' => 'sfafba_partner_id',
			'name' => 'sfafba_name',
			'size' => 'sfafba_size',
			'lang' => 'sfafba_lang',
			'html_code' => 'sfafba_html_code',
			'keywords' => 'sfafba_keywords',
			'is_active' => 'sfafba_is_active',
			'created_at' => 'sfafba_created_at',
			'updated_at' => 'sfafba_updated_at'
        );
    }

}
