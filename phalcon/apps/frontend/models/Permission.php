<?
class Permission extends ModelBase
{
    
	/**
	 * @pe_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @pe_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('pe_id', 'UserPermission', 'uspe_permission_id', array('alias' => 'user_permission_permission_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'Permission';
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
            'id' => 'pe_id',
			'name' => 'pe_name'
        );
    }

}
