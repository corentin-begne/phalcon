<?
class Price extends ModelBase
{
    
	/**
	 * @pr_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @pr_area(['type':'int', 'isNull': false, 'length': 11])
	 */
	public $area;

	/**
	 * @pr_nb(['type':'int', 'isNull': false, 'length': 11])
	 */
	public $nb;

	/**
	 * @pr_value(['type':'int', 'isNull': false, 'length': 11])
	 */
	public $value;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        parent::initialize();
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
