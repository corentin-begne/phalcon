<?
class SfGuardUserReport extends ModelBase
{
    
	/**
	 * @sfguusre_id(['type':'bigint', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @sfguusre_user_from_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_from_id;

	/**
	 * @sfguusre_user_to_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_to_id;

	/**
	 * @sfguusre_media_id(['type':'bigint', 'isNull': true, 'key': 'MUL', 'length': 20])
	 */
	public $media_id;

	/**
	 * @sfguusre_message_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $message_id;

	/**
	 * @sfguusre_comment(['type':'varchar', 'isNull': false, 'length': 255])
	 */
	public $comment;

	/**
	 * @sfguusre_chat_message(['type':'varchar', 'isNull': true, 'length': 255])
	 */
	public $chat_message;

	/**
	 * @sfguusre_created_at(['type':'datetime', 'isNull': false, 'length': 255])
	 */
	public $created_at;

	/**
	 * @sfguusre_updated_at(['type':'datetime', 'isNull': false, 'length': 255])
	 */
	public $updated_at;

	/**
	 * @sfguusre_status_id(['type':'bigint', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $status_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('sfguusre_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media_media_id'));
		$this->belongsTo('sfguusre_message_id', 'ReportMessage', 'reme_id', array('alias' => 'report_message_message_id'));
		$this->belongsTo('sfguusre_status_id', 'ReportStatus', 'rest_id', array('alias' => 'report_status_status_id'));
		$this->belongsTo('sfguusre_user_from_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_from_id'));
		$this->belongsTo('sfguusre_user_to_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user_user_to_id'));

        parent::initialize();
    }

    public function getSource()
    {
        return 'sf_guard_user_report';
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
            'id' => 'sfguusre_id',
			'user_from_id' => 'sfguusre_user_from_id',
			'user_to_id' => 'sfguusre_user_to_id',
			'media_id' => 'sfguusre_media_id',
			'message_id' => 'sfguusre_message_id',
			'comment' => 'sfguusre_comment',
			'chat_message' => 'sfguusre_chat_message',
			'created_at' => 'sfguusre_created_at',
			'updated_at' => 'sfguusre_updated_at',
			'status_id' => 'sfguusre_status_id'
        );
    }

}
