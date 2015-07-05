<?
class NewsType extends ModelBase
{
    
	/**
	 * @nety_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @nety_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('nety_id', 'SfGuardUserNews', 'sfguusne_type_id', array('alias' => 'sf_guard_user_news_type_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'news_type';
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
            'id' => 'nety_id',
			'name' => 'nety_name'
        );
    }

}
