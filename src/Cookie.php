<?php namespace PhantomJS;

/**
 * Class Cookie
 * @package PhantomJS
 */
class Cookie
{
    /**
     * @var string
     */
    public $domain;
    /**
     * unix epoch timestamp (in ms) Example: time()+3600 <-- expires in 1 hour
     * @var integer
     */
    public $expires;
    /**
     * @var boolean
     */
    public $httponly;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $path;
    /**
     * @var boolean
     */
    public $secure;
    /**
     * @var string
     */
    public $value;
}