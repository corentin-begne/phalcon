<?
class  LinkCategory extends \Phalcon\Mvc\Model
{
    
	/**
	 * @var([type:'integer', null: false, extra: 'auto_increment', key: 'PRI', length: 11])
	 */
	public $id;

	/**
	 * @var([type:'integer', null: false, length: 64])
	 */
	public $name;

	/**
	 * @var([type:'integer', null: false, length: 64])
	 */
	public $path;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

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
