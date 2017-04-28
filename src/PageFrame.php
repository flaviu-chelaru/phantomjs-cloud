<?php namespace PhantomJS;

/**
 * Class PageFrame
 * information about the frames of the page
 *
 * @package PhantomJS
 */
class PageFrame {
    /**
     * number of children contained by this frame
     * @var integer
     */
    public $childCount;

    /**
     * the children of this page (a hiearchy of frames)
     * @var PageFrame[]
     */
    public $childFrames;

    /**
     * the html content of the frame
     * @var string
     */
    public $content;

    /**
     * the name of the frame. use this when requesting the frame to be rendered
     * @var string
     */
    public $name;

    /**
     * the url of the frame
     * @var string
     */
    public $url;
}