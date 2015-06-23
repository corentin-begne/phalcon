<?
class ItemTag extends ModelBase
{
    
	/**
	 * @itta_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @itta_name_fr(['type':'string', 'isNull': false, 'length': 64])
	 */
	public $name_fr;

	/**
	 * @itta_name_en(['type':'string', 'isNull': false, 'length': 64])
	 */
	public $name_en;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('itta_id', 'ItemTagLink', 'ittali_tag_id', array('alias' => 'item_tag_link'));
		$this->hasMany('itta_id', 'ItemTagLink', 'ittali_tag_id', array('alias' => 'item_tag_link'));


    }

    public function getSource()
    {
        return 'item_tag';
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
            'id' => 'itta_id',
			'name_fr' => 'itta_name_fr',
			'name_en' => 'itta_name_en'
        );
    }

}
