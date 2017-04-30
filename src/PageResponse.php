<?php namespace PhantomJS;

/**
 * Class PageResponse
 * Information about the page transaction (request and it's response).
 *
 * @package PhantomJS
 */
class PageResponse
{
    /**
     * @var Cookie[]
     */
    public $cookies;

    /**
     * events that occured during requesting and loading of the page and it's content
     *
     * @var array[]
     */
    public $events;

    /**
     * the Frames contained in the page. The first is always the main page itself, even if no other frames are present.
     *
     * @var PageFrame
     */
    public $frameData;

    /**
     * headers for the primary resource (the url requested).
     * for headers of other resources, inspect the pageResponse.events (key='resourceReceived')
     *
     * @var object[]
     */
    public $headers;

    /**
     * information about the processing of your request
     * Type declaration
     *
     * $elapsedMs: number
     * $endTime: string
     * $pageStatus: string
     * $startTime: string
     * @var object
     */
    public $metrics;

    /**
     * the request you sent, including defaults for any parameters you did not include
     * @var PageRequest
     */
    public $pageRequest;

    /**
     * @var
     */
    public $scriptOutput;

    /**
     * the status code for the page, a shortcut to metrics.targetUrlReceived.value.status
     *
     * @var int
     */
    public $statusCode;
}