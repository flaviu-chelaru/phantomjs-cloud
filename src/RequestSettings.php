<?php namespace PhantomJS;

/**
 * Class RequestSettings
 * settings related to requesting internet resources (your page and resources referenced by your page)
 *
 * @package PhantomJS
 */
class RequestSettings
{
    /**
     * username/password for simple HTTP authentication
     * Type declaration
     * password: string
     * userName: string
     *
     * @var array
     */
    public $authentication = [];

    /**
     * if true, will clear the browser memory cache before processing the request.
     * Good for expiring data, and very important if blacklisting resources (see resourceModifier parameter).
     * Default is false.
     *
     * @var boolean
     */
    public $clearCache = false;

    /**
     * if true, will clear cookies before processing the request.
     * Default is false.
     * IMPORTANT NOTE: to protect your privacy, we always clear cookies after completing your transaction.
     * This option is only useful if making multiple requests in one transaction
     * (IE: multiple pageRequests in a userRequest API call)
     *
     * @var boolean
     */
    public $clearCookies;

    /**
     * Set Cookies for any domain, prior to loading this pageRequest.
     * If a cookie already exists with the same domain+path+name combination, it will be replaced.
     *
     * @see Cookie for documentation on the cookie parameters.
     *
     * @var Cookie[]
     */
    public $cookies;

    /**
     * specify additional request headers here.
     * They will be sent to the server for every request issued (the page and resources).
     * !IMPORTANT! Unicode is not supported (ASCII only)
     *
     * @var array[]
     */
    public $customHeaders;

    /**
     * delete any cookie with a matching "name" property before processing the request.
     *
     * @var string[]
     */
    public $deleteCookies;

    /**
     * set to true to disable all Javascript from being processed on your page.
     *
     * @var boolean
     */
    public $disableJavascript;

    /**
     * set to true to skip loading of inlined images.
     * If you are not outputing a screenshot, you can usually set this to true, which will decrease load times.
     *
     * @var boolean
     */
    public $ignoreImages;

    /**
     * the maximum amount of time (timeout) you wish to wait for the page to finish loading.
     * When rendering a page, we will give you whatever is ready at this time (page may be incompletely loaded).
     * Can be increased up to 5 minutes, but that only should be used as a last resort, as it is a relatively expensive page render.
     *
     * @var int
     */
    public $maxWait;

    /**
     * array of regex + adjustment parametes for modifying or rejecting resources being loaded by the webpage.
     *
     * @var ResourceModifier[]
     */
    public $resourceModifier;

    /**
     * maximum amount of time to wait for each external resource to load. we kill the request if it exceeds this amount.
     *
     * @var int
     */
    public $resourceTimeout;

    /**
     * maximum amount of time to wait for each external resources to load. (.js, .png, etc)
     * if the time exceeds this, we don't cancel the resource request, but we don't delay rendering the page if everything else is done.
     *
     * @var int
     */
    public $resourceWait;

    /**
     * if true, will stop page load upon the first error detected, and move to next phase (render or next page)
     *
     * @var boolean
     */
    public $stopOnError;

    /**
     * @var string
     */
    public $userAgent = "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.34 (KHTML, like Gecko) Safari/534.34 PhantomJS/2.0.0 (PhantomJsCloud.com/2.0.1)";

    /**
     * Milliseconds to delay rendering after the last resource is finished loading (default is 1000ms).
     * This is useful in case there are any AJAX requests or animations that need to finish up.
     * If additional network requests are made while we are waiting, the waitInterval will restart once finished again.
     * This can safely be set to 0 if you know there are no AJAX or animations you need to wait for (decreasing your billed costs)
     *
     * @var int
     */
    public $waitInterval;

    /**
     * set to true to enable web security. default is false
     *
     * @var boolean
     */
    public $webSecurityEnabled;

    /**
     * set to true to prohibit cross-site scripting attempts (XSS)
     *
     * @var boolean
     */
    public $xssAuditingEnabled;
}