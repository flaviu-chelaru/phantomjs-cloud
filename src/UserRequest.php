<?php namespace PhantomJS;

/**
 * Class UserRequest
 * The 'main' form of user request, allows specifying pages to load in order. Later will provide other 'global' options such as geolocation choices.
 *
 * @package PhantomJS
 */
class UserRequest
{
    /**
     * array of pages you want to load, in order. Only the last successfully loaded page will be rendered.
     *
     * @var PageRequest[] Array of pages to request
     */
    public $pages = [];

    /**
     * Use proxy servers for your request. default=false. set to true to enable our builtin proxy servers, or use the parameters found at ProxyOptions for more control/options, including the ability to specify your own custom proxy server.
     * IMPORTANT: for now, to use the builtin proxy servers, you must use the api endpoints found at api-static.phantomjscloud.com
     * This is because our proxy provider requires Whitelisting us by Static IP addresses.
     * This requirement will be removed after we exit Beta.
     * Additionally, When you use proxy servers, be aware that requests will be slower, so consider increasing the pageRequest.resourceTimeout parameter like the Proxy Example does.
     *
     * @var boolean | ProxyOptions
     */
    public $proxy = false;

    /**
     * optional, specify an alternate backend instead of the default phantomjs process.
     * the default value if not specified is default.
     * options are: default: the current stable backend. (phantomjs v2.1.1).
     * beta: the latest backend we are testing (phantomjs v2.5b).
     *
     * You can also specify an exact backend: phantom 2.1.1 or phantom 2.5beta.
     *
     * @var
     */
    public $backend;

    /**
     * setting this forces the value of the outputAsJson parameter, regardless of what the last page's value of outputAsJson was set to. default is undefined.
     *
     * @var boolean
     */
    public $outputAsJSON;

    /**
     * @param PageRequest $page
     *
     * @return int
     */
    public function addPage(PageRequest $page)
    {
        return array_push($this->pages, $page);
    }
}