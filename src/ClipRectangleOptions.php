<?php namespace PhantomJS;

/**
 * Class ClipRectangleOptions
 * This property defines the rectangular area of the web page to be rasterized when using the requestType of png or jpeg.
 * If no clipping rectangle is set, the entire web page is captured.
 *
 * @package PhantomJS
 */
class ClipRectangleOptions
{
    /**
     * @var integer
     */
    public $height;
    /**
     * @var integer
     */
    public $width;
    /**
     * @var integer
     */
    public $top;
    /**
     * @var integer
     */
    public $left;
}