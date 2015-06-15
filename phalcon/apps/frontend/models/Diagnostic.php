<?
class  Diagnostic extends \Phalcon\Mvc\Model
{
    
	/**
	 * @var([type:'integer', null: false, extra: 'auto_increment', key: 'PRI', length: 11])
	 */
	public $id;

	/**
	 * @var([type:'integer', null: false, length: 64])
	 */
	public $user_name;

	/**
	 * @var([type:'integer', null: false, length: 96])
	 */
	public $property_address;

	/**
	 * @var([type:'integer', null: false, length: 64])
	 */
	public $property_type;

	/**
	 * @var([type:'integer', null: true, length: 255])
	 */
	public $note;

	/**
	 * @var([type:'integer', null: false, length: 255])
	 */
	public $content;

	/**
	 * @var([type:'integer', null: false, key: 'MUL', length: 11])
	 */
	public $user_id;

	/**
	 * @var([type:'integer', null: false, key: 'MUL', length: 11])
	 */
	public $agency_id;

	/**
	 * @var([type:'integer', null: false, key: 'MUL', length: 11])
	 */
	public $state_id;

	/**
	 * @var([type:'integer', null: false, length: 1])
	 */
	public $is_locked;

	/**
	 * @var([type:'integer', null: false, length: 11])
	 */
	public $download_count;

	/**
	 * @var([type:'integer', null: false, default: 'CURRENT_TIMESTAMP', length: 11])
	 */
	public $created_at;

	/**
	 * @var([type:'integer', null: false, default: 'CURRENT_TIMESTAMP', extra: 'on update CURRENT_TIMESTAMP', length: 11])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('di_agency_id', 'Agency', 'ag_id', array('alias' => 'Agency'));
		$this->hasMany('di_agency_id', 'Agency', 'ag_id', array('alias' => 'Agency'));
		$this->belongsTo('di_state_id', 'DiagnosticState', 'dist_id', array('alias' => 'DiagnosticState'));
		$this->hasMany('di_state_id', 'DiagnosticState', 'dist_id', array('alias' => 'DiagnosticState'));
		$this->belongsTo('di_user_id', 'User', 'us_id', array('alias' => 'User'));
		$this->hasMany('di_user_id', 'User', 'us_id', array('alias' => 'User'));

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
			'download_count' => 'di_download_count',
			'created_at' => 'di_created_at',
			'updated_at' => 'di_updated_at'
        );
    }

}
