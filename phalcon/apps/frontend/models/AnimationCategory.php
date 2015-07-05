<?
class AnimationCategory extends ModelBase
{
    
	/**
	 * @anca_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @anca_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany('anca_id', 'Animation', 'an_category_id', array('alias' => 'animation_category_id'));


        parent::initialize();
    }

    public function getSource()
    {
        return 'animation_category';
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
            'id' => 'anca_id',
			'name' => 'anca_name'
        );
    }

}
