<?
class Diagnostic extends ModelBase
{
    
	/**
	 * @di_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @di_user_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $user_name;

	/**
	 * @di_property_address(['type':'varchar', 'isNull': false, 'length': 96])
	 */
	public $property_address;

	/**
	 * @di_property_type(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $property_type;

	/**
	 * @di_note(['type':'varchar', 'isNull': true, 'length': 255])
	 */
	public $note;

	/**
	 * @di_content(['type':'longblob', 'isNull': false, 'length': 255])
	 */
	public $content;

	/**
	 * @di_user_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $user_id;

	/**
	 * @di_agency_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $agency_id;

	/**
	 * @di_state_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $state_id;

	/**
	 * @di_is_locked(['type':'tinyint', 'isNull': false, 'length': 1])
	 */
	public $is_locked;

	/**
	 * @di_created_at(['type':'timestamp', 'isNull': false, 'default': 'CURRENT_TIMESTAMP', 'length': 1])
	 */
	public $created_at;

	/**
	 * @di_updated_at(['type':'timestamp', 'isNull': false, 'default': 'CURRENT_TIMESTAMP', 'extra': 'on update CURRENT_TIMESTAMP', 'length': 1])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('di_id', 'UserDiagnosticDownload', 'usdido_diagnostic_id', array('alias' => 'user_diagnostic_download_diagnostic_id'));

		$this->belongsTo('di_agency_id', 'Agency', 'ag_id', array('alias' => 'agency_agency_id'));
		$this->belongsTo('di_state_id', 'DiagnosticState', 'dist_id', array('alias' => 'diagnostic_state_state_id'));
		$this->belongsTo('di_user_id', 'User', 'us_id', array('alias' => 'user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'Diagnostic';
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
            'id' => 'di_id',
			'user_name' => 'di_user_name',
			'property_address' => 'di_property_address',
			'property_type' => 'di_property_type',
			'note' => 'di_note',
			'content' => 'di_content',
			'user_id' => 'di_user_id',
			'agency_id' => 'di_agency_id',
			'state_id' => 'di_state_id',
			'is_locked' => 'di_is_locked',
			'created_at' => 'di_created_at',
			'updated_at' => 'di_updated_at'
        );
    }

}
