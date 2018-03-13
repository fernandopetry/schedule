<?php

class Phones extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(column="people_id", type="integer", length=11, nullable=false)
     */
    public $people_id;

    /**
     *
     * @var integer
     * @Column(column="ddd", type="integer", length=5, nullable=false)
     */
    public $ddd;

    /**
     *
     * @var integer
     * @Column(column="phone", type="integer", length=9, nullable=false)
     */
    public $phone;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("schedule");
        $this->setSource("phones");
        $this->belongsTo('people_id', '\People', 'id', ['alias' => 'People']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'phones';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Phones[]|Phones|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Phones|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
