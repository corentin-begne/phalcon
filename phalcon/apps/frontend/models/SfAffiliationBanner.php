<?
class SfAffiliationBanner extends ModelBase
{
    
	/**
	 * @sfafba_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfafba_partner_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $partner_id;

	/**
	 * @sfafba_name(['type':'varchar', 'isNull': false, 'key': 'UNI', 'length': 50])
	 */
	public $name;

	/**
	 * @sfafba_size(['type':'varchar', 'isNull': false, 'key': 'MUL', 'length': 10])
	 */
	public $size;

	/**
	 * @sfafba_lang(['type':'varchar', 'isNull': true, 'length': 5])
	 */
	public $lang;

	/**
	 * @sfafba_html_code(['type':'longtext', 'isNull': false, 'length': 5])
	 */
	public $html_code;

	/**
	 * @sfafba_keywords(['type':'longtext', 'isNull': true, 'length': 5])
	 */
	public $keywords;

	/**
	 * @sfafba_is_active(['type':'tinyint', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_active;

	/**
	 * @sfafba_created_at(['type':'datetime', 'isNull': false, 'length': 1])
	 */
	public $created_at;

	/**
	 * @sfafba_updated_at(['type':'datetime', 'isNull': false, 'length': 1])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfafba_partner_id', 'SfAffiliationPartener', 'sfafpa_id', array('alias' => 'sf_affiliation_partener_partner_id'));

        parent::initialize();
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
