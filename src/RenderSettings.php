<?php namespace PhantomJS;

/**
 * Class RenderSettings
 * when a page is rendered, use these settings.
 *
 * @package PhantomJS
 */
class RenderSettings
{
    /**
     * This property defines the rectangular area of the web page to be rasterized when using the requestType of png or jpeg.
     * If no clipping rectangle is set, the entire web page is captured.
     * Beware: if you capture too large an image it can cause your request to fail (out of memory).
     * you can choose any dimensions you wish as long as you do not exceed 32M pixels
     *
     * @var ClipRectangleOptions
     */
    public $clipRectangle;

    /**
     * default false. If true, we will pass through all headers received from the target URL
     * exception of "Content-Type" (unless the renderType=html)
     *
     * @var boolean
     */
    public $passThroughHeaders;

    /**
     * pdf specific settings
     *
     * @var PdfOptions
     */
    public $pdfOptions;

    /**
     * optional png quality options passed to PngQuant.
     * you must set pngOptions.optimize=true to enable these, otherwise the original non-modified png is returned.
     *
     * @var PngOptions
     */
    public $pngOptions;

    /**
     * jpeg quality. 0 to 100. default 70. ignored for png, use pngOptions to set png quality.
     *
     * @var int
     */
    public $quality;

    /**
     * specify an IFrame to render instead of the full page. must be the frame's name.
     *
     * @var string
     */
    public $renderIFrame;

    /**
     * size of the browser in pixels
     *
     * @var object
     */
    public $viewport;

    /**
     * This property specifies the scaling factor for the screenshot (requestType png/pdf) choices.
     * The default is 1, i.e. 100% zoom.
     *
     * @var int
     */
    public $zoomFactor;
}