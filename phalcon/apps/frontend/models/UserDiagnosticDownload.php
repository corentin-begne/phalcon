<?
class UserDiagnosticDownload extends ModelBase
{
    
	/**
	 * @usdido_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @usdido_user_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $user_id;

	/**
	 * @usdido_diagnostic_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $diagnostic_id;

	/**
	 * @usdido_created_at(['type':'timestamp', 'isNull': false, 'default': 'CURRENT_TIMESTAMP', 'length': 11])
	 */
	public $created_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('usdido_diagnostic_id', 'Diagnostic', 'di_id', array('alias' => 'diagnostic_diagnostic_id'));
		$this->belongsTo('usdido_user_id', 'User', 'us_id', array('alias' => 'user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'UserDiagnosticDownload';
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
            'id' => 'usdido_id',
			'user_id' => 'usdido_user_id',
			'diagnostic_id' => 'usdido_diagnostic_id',
			'created_at' => 'usdido_created_at'
        );
    }

}
