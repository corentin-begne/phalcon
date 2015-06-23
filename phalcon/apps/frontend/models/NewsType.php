<?
class NewsType extends ModelBase
{
    
	/**
	 * @nety_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @nety_name(['type':'string', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('nety_id', 'SfGuardUserNews', 'sfguusne_type_id', array('alias' => 'sf_guard_user_news'));
		$this->hasMany('nety_id', 'SfGuardUserNews', 'sfguusne_type_id', array('alias' => 'sf_guard_user_news'));


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
