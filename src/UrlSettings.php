<?php namespace PhantomJS;

/**
 * Class UrlSettings
 * adjustable parameters for when making network requests to the url specified. used by PageRequest.
 *
 * @package PhantomJS
 */
class UrlSettings
{
    const OPERATION_POST = 'POST';
    const OPERATION_GET = 'GET';

    /**
     * submitted in POST BODY of your request.
     *
     * @var array
     */
    public $data;

    /**
     * defaults to 'utf8'
     *
     * @var string
     */
    public $encoding = 'utf8';

    /**
     * custom headers for the target page. if you want to set headers for every sub-resource requested,
     * use the pageRequest.requestSettings.customHeaders parameter instead.
     *
     * @var array
     */
    public $headers;

    /**
     * GET (default) or POST
     * @var string
     */
    public $operation = self::OPERATION_GET;
}