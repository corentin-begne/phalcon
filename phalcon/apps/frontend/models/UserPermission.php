<?
class  UserPermission extends \Phalcon\Mvc\Model
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
	 * @var([type:'integer', null: false, key: 'MUL', length: 11])
	 */
	public $permission_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('uspe_permission_id', 'Permission', 'pe_id', array('alias' => 'Permission'));
		$this->hasMany('uspe_permission_id', 'Permission', 'pe_id', array('alias' => 'Permission'));
		$this->belongsTo('uspe_user_id', 'User', 'us_id', array('alias' => 'User'));
		$this->hasMany('uspe_user_id', 'User', 'us_id', array('alias' => 'User'));

    }

    public function getSource()
    {
        return 'UserPermission';
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
            'id' => 'uspe_id',
			'user_id' => 'uspe_user_id',
			'permission_id' => 'uspe_permission_id'
        );
    }

}
