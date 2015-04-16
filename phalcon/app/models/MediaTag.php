<?php

class MediaTag extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Sf_guard_user_media_tag', 'tag_id', array('alias' => 'Sf_guard_user_media_tag'));
        $this->hasMany('id', 'SfGuardUserMediaTag', 'tag_id', NULL);
    }

}
