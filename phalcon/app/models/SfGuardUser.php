<?php

class SfGuardUser extends \Phalcon\Mvc\Model
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
    public $first_name;

    /**
     *
     * @var string
     */
    public $last_name;

    /**
     *
     * @var string
     */
    public $email_address;

    /**
     *
     * @var string
     */
    public $username;

    /**
     *
     * @var string
     */
    public $algorithm;

    /**
     *
     * @var string
     */
    public $salt;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var integer
     */
    public $is_active;

    /**
     *
     * @var integer
     */
    public $is_super_admin;

    /**
     *
     * @var string
     */
    public $last_login;

    /**
     *
     * @var string
     */
    public $location;

    /**
     *
     * @var string
     */
    public $hometown;

    /**
     *
     * @var string
     */
    public $locale;

    /**
     *
     * @var string
     */
    public $timezone;

    /**
     *
     * @var integer
     */
    public $facebook_id;

    /**
     *
     * @var integer
     */
    public $facebook_verified;

    /**
     *
     * @var string
     */
    public $facebook_link;

    /**
     *
     * @var integer
     */
    public $facebook_location_id;

    /**
     *
     * @var integer
     */
    public $facebook_hometown_id;

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
    public $online;

    /**
     *
     * @var string
     */
    public $cookie;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Sf_allo_pass_purchase', 'user_id', array('alias' => 'Sf_allo_pass_purchase'));
        $this->hasMany('id', 'Sf_guard_forgot_password', 'user_id', array('alias' => 'Sf_guard_forgot_password'));
        $this->hasMany('id', 'Sf_guard_remember_key', 'user_id', array('alias' => 'Sf_guard_remember_key'));
        $this->hasMany('id', 'Sf_guard_user_event', 'user_id', array('alias' => 'Sf_guard_user_event'));
        $this->hasMany('id', 'Sf_guard_user_group', 'user_id', array('alias' => 'Sf_guard_user_group'));
        $this->hasMany('id', 'Sf_guard_user_item', 'user_id', array('alias' => 'Sf_guard_user_item'));
        $this->hasMany('id', 'Sf_guard_user_media', 'user_id', array('alias' => 'Sf_guard_user_media'));
        $this->hasMany('id', 'Sf_guard_user_message', 'user_id_from', array('alias' => 'Sf_guard_user_message'));
        $this->hasMany('id', 'Sf_guard_user_message', 'user_id_to', array('alias' => 'Sf_guard_user_message'));
        $this->hasMany('id', 'Sf_guard_user_news', 'user_id', array('alias' => 'Sf_guard_user_news'));
        $this->hasMany('id', 'Sf_guard_user_notification', 'user_id', array('alias' => 'Sf_guard_user_notification'));
        $this->hasMany('id', 'Sf_guard_user_permission', 'user_id', array('alias' => 'Sf_guard_user_permission'));
        $this->hasOne('id', 'SfGuardUserProfile', 'user_id', array('alias' => 'Sf_guard_user_profile'));
        $this->hasMany('id', 'Sf_guard_user_room', 'user_id', array('alias' => 'Sf_guard_user_room'));
        $this->hasMany('id', 'Sf_guard_user_subscription', 'user_id_from', array('alias' => 'Sf_guard_user_subscription'));
        $this->hasMany('id', 'Sf_guard_user_subscription', 'user_id_to', array('alias' => 'Sf_guard_user_subscription'));
        $this->hasMany('id', 'SfAlloPassPurchase', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardForgotPassword', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardRememberKey', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardUserEvent', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardUserGroup', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardUserItem', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardUserMedia', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardUserMessage', 'user_id_from', NULL);
        $this->hasMany('id', 'SfGuardUserMessage', 'user_id_to', NULL);
        $this->hasMany('id', 'SfGuardUserNews', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardUserNotification', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardUserPermission', 'user_id', NULL);
        $this->hasOne('id', 'SfGuardUserProfile', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardUserRoom', 'user_id', NULL);
        $this->hasMany('id', 'SfGuardUserSubscription', 'user_id_from', NULL);
        $this->hasMany('id', 'SfGuardUserSubscription', 'user_id_to', NULL);
    }

}
