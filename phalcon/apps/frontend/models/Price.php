<?
class  Price extends \Phalcon\Mvc\Model
{
    
	/**
	 * @var([type:'integer', null: false, extra: 'auto_increment', key: 'PRI', length: 11])
	 */
	public $id;

	/**
	 * @var([type:'integer', null: false, length: 11])
	 */
	public $area;

	/**
	 * @var([type:'integer', null: false, length: 11])
	 */
	public $nb;

	/**
	 * @var([type:'integer', null: false, length: 11])
	 */
	public $value;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

    }

    public function getSource()
    {
        return 'Price';
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
            'id' => 'pr_id',
			'area' => 'pr_area',
			'nb' => 'pr_nb',
			'value' => 'pr_value'
        );
    }

}
