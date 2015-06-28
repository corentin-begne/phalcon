<?
class FakeLink extends ModelBase
{
    
	/**
	 * @fali_id(['type':'int', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 11])
	 */
	public $id;

	/**
	 * @fali_name(['type':'varchar', 'isNull': false, 'length': 64])
	 */
	public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        parent::initialize();
    }

    public function getSource()
    {
        return 'FakeLink';
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
            'id' => 'fali_id',
			'name' => 'fali_name'
        );
    }

}
