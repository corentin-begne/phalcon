<?php

class SfGuardUserProfile extends \Phalcon\Mvc\Model
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
    public $user_id;

    /**
     *
     * @var string
     */
    public $biography;

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
    public $gender_id;

    /**
     *
     * @var string
     */
    public $birthday_date;

    /**
     *
     * @var double
     */
    public $avatar_skin;

    /**
     *
     * @var double
     */
    public $avatar_hair;

    /**
     *
     * @var double
     */
    public $avatar_eyes;

    /**
     *
     * @var string
     */
    public $profile_picture;

    /**
     *
     * @var integer
     */
    public $beelz;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('gender_id', 'Gender', 'id', array('alias' => 'Gender'));
        $this->belongsTo('user_id', 'Sf_guard_user', 'id', array('alias' => 'Sf_guard_user'));
        $this->belongsTo('gender_id', 'Gender', 'id', array('foreignKey' => true));
        $this->belongsTo('user_id', 'SfGuardUser', 'id', array('foreignKey' => true));
    }

}
