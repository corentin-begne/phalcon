<?
class UserPermission extends ModelBase
{
    
	/**
	 * @uspe_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @uspe_user_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $user_id;

	/**
	 * @uspe_permission_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $permission_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('uspe_permission_id', 'Permission', 'pe_id', array('alias' => 'permission_permission_id'));
		$this->belongsTo('uspe_user_id', 'User', 'us_id', array('alias' => 'user_user_id'));

        parent::initialize();
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
