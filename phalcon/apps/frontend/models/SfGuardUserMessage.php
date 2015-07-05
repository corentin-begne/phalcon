<?
class SfGuardUserMessage extends ModelBase
{
    
	/**
	 * @sfguusme_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusme_user_id_from(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id_from;

	/**
	 * @sfguusme_user_id_to(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id_to;

	/**
	 * @sfguusme_value(['type':'text', 'isNull': false, 'length': 20])
	 */
	public $value;

	/**
	 * @sfguusme_created_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusme_updated_at(['type':'datetime', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusme_user_id_from', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id_from'));
		$this->belongsTo('sfguusme_user_id_to', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_id_to'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_user_message';
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
            'id' => 'sfguusme_id',
			'user_id_from' => 'sfguusme_user_id_from',
			'user_id_to' => 'sfguusme_user_id_to',
			'value' => 'sfguusme_value',
			'created_at' => 'sfguusme_created_at',
			'updated_at' => 'sfguusme_updated_at'
        );
    }

}
