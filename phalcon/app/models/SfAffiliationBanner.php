<?php

class SfAffiliationBanner extends \Phalcon\Mvc\Model
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
    public $partner_id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $size;

    /**
     *
     * @var string
     */
    public $lang;

    /**
     *
     * @var string
     */
    public $html_code;

    /**
     *
     * @var string
     */
    public $keywords;

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
        $this->belongsTo('partner_id', 'Sf_affiliation_partener', 'id', array('alias' => 'Sf_affiliation_partener'));
        $this->belongsTo('partner_id', 'SfAffiliationPartener', 'id', array('foreignKey' => true));
    }

}
