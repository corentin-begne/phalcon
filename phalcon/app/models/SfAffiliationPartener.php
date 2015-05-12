<?php

class SfAffiliationPartener extends \Phalcon\Mvc\Model
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
     *
     * @var string
     */
    public $short_key;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $progid;

    /**
     *
     * @var string
     */
    public $partid;

    /**
     *
     * @var string
     */
    public $url;

    /**
     *
     * @var integer
     */
    public $is_active;

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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Sf_affiliation_banner', 'partner_id', array('alias' => 'Sf_affiliation_banner'));
        $this->hasMany('id', 'Sf_affiliation_widget', 'partner_id', array('alias' => 'Sf_affiliation_widget'));
        $this->hasMany('id', 'SfAffiliationBanner', 'partner_id', NULL);
        $this->hasMany('id', 'SfAffiliationWidget', 'partner_id', NULL);
    }

}
