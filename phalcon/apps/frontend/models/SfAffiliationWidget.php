<?
class SfAffiliationWidget extends ModelBase
{
    
	/**
	 * @sfafwi_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfafwi_partner_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $partner_id;

	/**
	 * @sfafwi_name(['type':'varchar', 'isNull': false, 'key': 'UNI', 'length': 50])
	 */
	public $name;

	/**
	 * @sfafwi_size(['type':'varchar', 'isNull': false, 'key': 'MUL', 'length': 10])
	 */
	public $size;

	/**
	 * @sfafwi_lang(['type':'varchar', 'isNull': true, 'length': 5])
	 */
	public $lang;

	/**
	 * @sfafwi_html_code(['type':'longtext', 'isNull': false, 'length': 5])
	 */
	public $html_code;

	/**
	 * @sfafwi_keywords(['type':'longtext', 'isNull': true, 'length': 5])
	 */
	public $keywords;

	/**
	 * @sfafwi_is_active(['type':'tinyint', 'isNull': true, 'default': '1', 'length': 1])
	 */
	public $is_active;

	/**
	 * @sfafwi_created_at(['type':'datetime', 'isNull': false, 'length': 1])
	 */
	public $created_at;

	/**
	 * @sfafwi_updated_at(['type':'datetime', 'isNull': false, 'length': 1])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfafwi_partner_id', 'SfAffiliationPartener', 'sfafpa_id', array('alias' => 'sf_affiliation_partener_partner_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_affiliation_widget';
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
            'id' => 'sfafwi_id',
			'partner_id' => 'sfafwi_partner_id',
			'name' => 'sfafwi_name',
			'size' => 'sfafwi_size',
			'lang' => 'sfafwi_lang',
			'html_code' => 'sfafwi_html_code',
			'keywords' => 'sfafwi_keywords',
			'is_active' => 'sfafwi_is_active',
			'created_at' => 'sfafwi_created_at',
			'updated_at' => 'sfafwi_updated_at'
        );
    }

}
