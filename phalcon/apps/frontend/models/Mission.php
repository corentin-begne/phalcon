<?
class Mission extends ModelBase
{
    
	/**
	 * @mi_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @mi_user_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $user_id;

	/**
	 * @mi_manager_id(['type':'int', 'isNull': true, 'length': 11])
	 */
	public $manager_id;

	/**
	 * @mi_transaction(['type':'text', 'isNull': true, 'length': 11])
	 */
	public $transaction;

	/**
	 * @mi_notary(['type':'text', 'isNull': true, 'length': 11])
	 */
	public $notary;

	/**
	 * @mi_owner(['type':'text', 'isNull': true, 'length': 11])
	 */
	public $owner;

	/**
	 * @mi_property(['type':'text', 'isNull': true, 'length': 11])
	 */
	public $property;

	/**
	 * @mi_infos(['type':'text', 'isNull': true, 'length': 11])
	 */
	public $infos;

	/**
	 * @mi_created_at(['type':'timestamp', 'isNull': false, 'default': 'CURRENT_TIMESTAMP', 'length': 11])
	 */
	public $created_at;

	/**
	 * @mi_updated_at(['type':'timestamp', 'isNull': false, 'default': 'CURRENT_TIMESTAMP', 'extra': 'on update CURRENT_TIMESTAMP', 'length': 11])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('mi_user_id', 'User', 'us_id', array('alias' => 'user_user_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'Mission';
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
            'id' => 'mi_id',
			'user_id' => 'mi_user_id',
			'manager_id' => 'mi_manager_id',
			'transaction' => 'mi_transaction',
			'notary' => 'mi_notary',
			'owner' => 'mi_owner',
			'property' => 'mi_property',
			'infos' => 'mi_infos',
			'created_at' => 'mi_created_at',
			'updated_at' => 'mi_updated_at'
        );
    }

}
