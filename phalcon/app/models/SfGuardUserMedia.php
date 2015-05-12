<?php

class SfGuardUserMedia extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $type_id;

    /**
     *
     * @var integer
     */
    public $is_active;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var integer
     */
    public $provider_id;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     *
     * @var string
     */
    public $updated_at;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $embed;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Sf_guard_user_media_tag', 'media_id', array('alias' => 'Sf_guard_user_media_tag'));
        $this->belongsTo('provider_id', 'Provider_type', 'id', array('alias' => 'Provider_type'));
        $this->belongsTo('type_id', 'Media_type', 'id', array('alias' => 'Media_type'));
        $this->belongsTo('user_id', 'Sf_guard_user', 'id', array('alias' => 'Sf_guard_user'));
        $this->hasMany('id', 'SfGuardUserMediaTag', 'media_id', NULL);
        $this->belongsTo('provider_id', 'ProviderType', 'id', array('foreignKey' => true));
        $this->belongsTo('type_id', 'MediaType', 'id', array('foreignKey' => true));
        $this->belongsTo('user_id', 'SfGuardUser', 'id', array('foreignKey' => true));
    }

}
