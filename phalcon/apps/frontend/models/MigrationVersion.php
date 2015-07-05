<?
class MigrationVersion extends ModelBase
{
    
	/**
	 * @mive_version(['type':'int', 'isNull': true, 'length': 11])
	 */
	public $version;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {

        parent::initialize();
    }

    public function getSource()
    {
        return 'migration_version';
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
            'version' => 'mive_version'
        );
    }

}
