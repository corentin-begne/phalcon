<?
class ItemType extends ModelBase
{
    
	/**
	 * @itty_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @itty_name(['type':'string', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('itty_id', 'Item', 'it_type_id', array('alias' => 'item'));
		$this->hasMany('itty_id', 'Item', 'it_type_id', array('alias' => 'item'));


    }

    public function getSource()
    {
        return 'item_type';
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
            'id' => 'itty_id',
			'name' => 'itty_name'
        );
    }

}
