<?
class  Mission extends \Phalcon\Mvc\Model
{
    
	/**
	 * @var([type:'integer', null: false, extra: 'auto_increment', key: 'PRI', length: 11])
	 */
	public $id;

	/**
	 * @var([type:'integer', null: false, key: 'MUL', length: 11])
	 */
	public $user_id;

	/**
	 * @var([type:'integer', null: true, length: 11])
	 */
	public $manager_id;

	/**
	 * @var([type:'integer', null: true, length: 11])
	 */
	public $transaction;

	/**
	 * @var([type:'integer', null: true, length: 11])
	 */
	public $notary;

	/**
	 * @var([type:'integer', null: true, length: 11])
	 */
	public $owner;

	/**
	 * @var([type:'integer', null: true, length: 11])
	 */
	public $property;

	/**
	 * @var([type:'integer', null: true, length: 11])
	 */
	public $infos;

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
		$this->belongsTo('mi_user_id', 'User', 'us_id', array('alias' => 'User'));
		$this->hasMany('mi_user_id', 'User', 'us_id', array('alias' => 'User'));

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
