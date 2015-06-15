<?
class  Link extends \Phalcon\Mvc\Model
{
    
	/**
	 * @var([type:'integer', null: false, extra: 'auto_increment', key: 'PRI', length: 11])
	 */
	public $id;

	/**
	 * @var([type:'integer', null: false, length: 2048])
	 */
	public $path;

	/**
	 * @var([type:'integer', null: false, length: 255])
	 */
	public $name;

	/**
	 * @var([type:'integer', null: false, length: 255])
	 */
	public $meta;

	/**
	 * @var([type:'integer', null: false, length: 255])
	 */
	public $content;

	/**
	 * @var([type:'integer', null: false, length: 11])
	 */
	public $rank;

	/**
	 * @var([type:'integer', null: false, key: 'MUL', length: 11])
	 */
	public $category_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('li_category_id', 'LinkCategory', 'lica_id', array('alias' => 'LinkCategory'));
		$this->hasMany('li_category_id', 'LinkCategory', 'lica_id', array('alias' => 'LinkCategory'));

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
