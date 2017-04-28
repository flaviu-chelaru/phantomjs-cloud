<?php namespace PhantomJS;

/**
 * Class ProxyOptions
 *
 * @package PhantomJS
 */
class ProxyOptions
{
    /**
     * allows you to use a custom proxy server. if you set this, the built-in proxy will not be used. default=NULL
     *
     * @var ProxyCustomOptions
     */
    public $custom;

    /**
     * specify the geographic region of the builtin proxy server you use. defaults to any.
     * possible values are any, us (usa), de (germany), gb (great britan), ca (canada), sg (singapore)
     * IMPORTANT: Not yet implemented. So for now, all values are treated as any
     *
     * @var string
     */
    public $geolocation;

    /**
     * specify what builtin proxy server you use.
     * by default, the auto-proxy system will randomly pick from an available proxy server.
     * If you want to specify a specific (fixed) proxy server,
     * set this instanceId to a number, then all requests will direct to the same builtin server..
     * If you want to use the proxy server in a round-robin style (recommended!)
     * each request should increment this instanceId by one.
     *
     * @var int
     */
    public $instanceid;
}