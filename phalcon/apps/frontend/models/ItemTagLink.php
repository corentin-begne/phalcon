<?
class ItemTagLink extends ModelBase
{
    
	/**
	 * @ittali_item_id(['type':'varchar', 'isNull': false, 'key': 'PRI', 'length': 32])
	 */
	public $item_id;

	/**
	 * @ittali_tag_id(['type':'bigint', 'isNull': false, 'key': 'PRI', 'length': 20])
	 */
	public $tag_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('ittali_item_id', 'Item', 'it_id', array('alias' => 'item_item_id'));
		$this->belongsTo('ittali_tag_id', 'ItemTag', 'itta_id', array('alias' => 'item_tag_tag_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'item_tag_link';
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
            'item_id' => 'ittali_item_id',
			'tag_id' => 'ittali_tag_id'
        );
    }

}
