<?
class ItemCategory extends ModelBase
{
    
	/**
	 * @itca_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @itca_name(['type':'string', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('itca_id', 'Item', 'it_category_id', array('alias' => 'item'));
		$this->hasMany('itca_id', 'Item', 'it_category_id', array('alias' => 'item'));


    }

    public function getSource()
    {
        return 'item_category';
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
            'id' => 'itca_id',
			'name' => 'itca_name'
        );
    }

}
