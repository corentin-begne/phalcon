<?
class Link extends ModelBase
{
    
	/**
	 * @li_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @li_path(['type':'varchar', 'isNull': false, 'length': 2048])
	 */
	public $path;

	/**
	 * @li_name(['type':'varchar', 'isNull': false, 'length': 255])
	 */
	public $name;

	/**
	 * @li_meta(['type':'mediumtext', 'isNull': false, 'length': 255])
	 */
	public $meta;

	/**
	 * @li_content(['type':'mediumtext', 'isNull': false, 'length': 255])
	 */
	public $content;

	/**
	 * @li_rank(['type':'int', 'isNull': false, 'length': 11])
	 */
	public $rank;

	/**
	 * @li_category_id(['type':'int', 'isNull': false, 'key': 'MUL', 'length': 11])
	 */
	public $category_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('li_category_id', 'LinkCategory', 'lica_id', array('alias' => 'link_category_category_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'Link';
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
            'id' => 'li_id',
			'path' => 'li_path',
			'name' => 'li_name',
			'meta' => 'li_meta',
			'content' => 'li_content',
			'rank' => 'li_rank',
			'category_id' => 'li_category_id'
        );
    }

}
