<?
class LinkCategory extends ModelBase
{
    
	/**
	 * @lica_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @lica_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

	/**
	 * @lica_path(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $path;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('lica_id', 'Link', 'li_category_id', array('alias' => 'link_category_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'LinkCategory';
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
            'id' => 'lica_id',
			'name' => 'lica_name',
			'path' => 'lica_path'
        );
    }

}
