<?php

class SfGuardUserMediaTag extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $media_id;

    /**
     *
     * @var integer
     */
    public $tag_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('media_id', 'Sf_guard_user_media', 'id', array('alias' => 'Sf_guard_user_media'));
        $this->belongsTo('tag_id', 'Media_tag', 'id', array('alias' => 'Media_tag'));
        $this->belongsTo('media_id', 'SfGuardUserMedia', 'id', array('foreignKey' => true));
        $this->belongsTo('tag_id', 'MediaTag', 'id', array('foreignKey' => true));
    }

}
