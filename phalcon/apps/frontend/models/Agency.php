<?
class  Agency extends \Phalcon\Mvc\Model
{
    
	/**
	 * @var([type:'integer', null: false, extra: 'auto_increment', key: 'PRI', length: 11])
	 */
	public $id;

	/**
	 * @var([type:'integer', null: false, length: 64])
	 */
	public $name;

	/**
	 * @var([type:'integer', null: true, length: 14])
	 */
	public $siret;

	/**
	 * @var([type:'integer', null: false, key: 'MUL', length: 11])
	 */
	public $type_id;

	/**
	 * @var([type:'integer', null: false, key: 'MUL', length: 11])
	 */
	public $manager_id;

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
		$this->belongsTo('ag_type_id', 'AgencyType', 'agty_id', array('alias' => 'AgencyType'));
		$this->hasMany('ag_type_id', 'AgencyType', 'agty_id', array('alias' => 'AgencyType'));
		$this->belongsTo('ag_manager_id', 'User', 'us_id', array('alias' => 'User'));
		$this->hasMany('ag_manager_id', 'User', 'us_id', array('alias' => 'User'));

    }

    public function getSource()
    {
        return 'Agency';
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
            'id' => 'ag_id',
			'name' => 'ag_name',
			'siret' => 'ag_siret',
			'type_id' => 'ag_type_id',
			'manager_id' => 'ag_manager_id',
			'created_at' => 'ag_created_at',
			'updated_at' => 'ag_updated_at'
        );
    }

}
