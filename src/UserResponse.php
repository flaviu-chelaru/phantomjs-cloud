<?php namespace PhantomJS;

/**
 * Class UserResponse
 * This is returned to you when "outputAsJson=true".
 *
 * @package PhantomJS
 */
class UserResponse
{
    /**
     * the rendered output of the last pageRequest
     * TODO Make an object to represent the data
     *
     * @var array
     */
    public $content;

    /**
     * metadata about the transaction
     * TODO Make an object to represent the data
     *
     * @var array
     */
    public $meta;

    /**
     * the original request, without defaults applied. to see the request with defaults, see pageResponses.pageRequest
     *
     * @var UserRequest
     */
    public $originalRequest;

    /**
     * a collection of load/processing information for each page you requested.
     *
     * @var PageResponse[]
     */
    public $pageResponses;

    /**
     * the HTTP Status Code PhantomJsCloud returns to you
     *
     * @var int
     */
    public $statusCode;
}