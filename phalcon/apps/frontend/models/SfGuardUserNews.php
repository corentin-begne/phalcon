<?
class SfGuardUserNews extends ModelBase
{
    
	/**
	 * @sfguusne_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusne_user_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_id;

	/**
	 * @sfguusne_value(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $value;

	/**
	 * @sfguusne_created_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $created_at;

	/**
	 * @sfguusne_updated_at(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $updated_at;

	/**
	 * @sfguusne_type_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $type_id;

	/**
	 * @sfguusne_is_read(['type':'string', 'isNull': false, 'length': 1])
	 */
	public $is_read;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusne_type_id', 'NewsType', 'nety_id', array('alias' => 'news_type'));
		$this->hasMany('sfguusne_type_id', 'NewsType', 'nety_id', array('alias' => 'news_type'));
		$this->belongsTo('sfguusne_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('sfguusne_user_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));

    }

    public function getSource()
    {
        return 'sf_guard_user_news';
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
            'id' => 'sfguusne_id',
			'user_id' => 'sfguusne_user_id',
			'value' => 'sfguusne_value',
			'created_at' => 'sfguusne_created_at',
			'updated_at' => 'sfguusne_updated_at',
			'type_id' => 'sfguusne_type_id',
			'is_read' => 'sfguusne_is_read'
        );
    }

}
