<?php namespace PhantomJS;

/**
 * Class ProxyCustomOptions
 *
 * @package PhantomJS
 */
class ProxyCustomOptions
{
    const TYPE_HTTP   = 'http';
    const TYPE_SOCKS5 = 'socks5';
    const TYPE_NONE   = 'none';

    /**
     * authentication information for the proxy. ex: username:password
     *
     * @var string
     */
    public $auth;

    /**
     * the address and port of the proxy server to use. ex: 192.168.1.42:8080
     * If your proxy requires a IP to whitelist, use api-static.phantomjscloud.com for your requests.
     *
     * @var string
     */
    public $host;

    /**
     * type of the proxy server. default is http available types are http, socks5, and none
     *
     * @var string
     */
    public $type = self::TYPE_HTTP;
}