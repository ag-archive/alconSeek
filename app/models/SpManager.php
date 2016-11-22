<?php

class SpManager extends \Phalcon\Mvc\Model
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
    public $uname;

    /**
     *
     * @var string
     */
    public $passwd;

    /**
     *
     * @var integer
     */
    public $failed;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sp_manager';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SpManager[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SpManager
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * 登陆验证.
     *
     * @param array $param
     *
     * @return boolean
     *
     * @farwish
     */
    public static function checkSignin($uname, $passwd)
    {
        $ret =  static::findFirst("uname = '{$uname}' AND passwd = '" . md5($passwd) . "'");

        return $ret;
    }
}
