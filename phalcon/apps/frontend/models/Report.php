<?
class Report extends ModelBase
{
    
	/**
	 * @re_id(['type':'string', 'isNull': false, 'extra': 'auto_increment', 'key': 'PRI', 'length': 20])
	 */
	public $id;

	/**
	 * @re_user_from_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_from_id;

	/**
	 * @re_user_to_id(['type':'string', 'isNull': false, 'key': 'MUL', 'length': 20])
	 */
	public $user_to_id;

	/**
	 * @re_media_id(['type':'string', 'isNull': true, 'key': 'MUL', 'length': 20])
	 */
	public $media_id;

	/**
	 * @re_message_id(['type':'string', 'isNull': false, 'length': 20])
	 */
	public $message_id;

	/**
	 * @re_comment(['type':'string', 'isNull': false, 'length': 255])
	 */
	public $comment;

	/**
	 * @re_chat_message(['type':'string', 'isNull': true, 'length': 255])
	 */
	public $chat_message;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo('re_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media'));
		$this->hasMany('re_media_id', 'SfGuardUserMedia', 'sfguusme_id', array('alias' => 'sf_guard_user_media'));
		$this->belongsTo('re_user_from_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('re_user_from_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->belongsTo('re_user_to_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));
		$this->hasMany('re_user_to_id', 'SfGuardUser', 'sfguus_id', array('alias' => 'sf_guard_user'));

    }

    public function getSource()
    {
        return 'report';
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
            'id' => 're_id',
			'user_from_id' => 're_user_from_id',
			'user_to_id' => 're_user_to_id',
			'media_id' => 're_media_id',
			'message_id' => 're_message_id',
			'comment' => 're_comment',
			'chat_message' => 're_chat_message'
        );
    }

}
