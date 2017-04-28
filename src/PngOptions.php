<?php namespace PhantomJS;


/**
 * Class PngOptions
 * optional png quality options passed to PngQuant.
 * you must set pngOptions.optimize=true to enable these, otherwise the original non-modified png is returned.
 *
 * @package PhantomJS
 */
class PngOptions
{
    /**
     * 2 to 256. default 256.
     *
     * @var int
     */
    public $colors = 256;
    /**
     * default false. true to disable dithering
     *
     * @var boolean
     */
    public $noDither = false;
    /**
     * default false, which is to return the original png.
     * if you pass true, we will optimize the png using PngQuant.
     * smaller file size but takes longer to process
     *
     * @var boolean
     */
    public $optimize = false;
    /**
     * 1 to 100. default 80.
     * Instructs pngquant to use the least amount of colors required to meet or exceed the max quality.
     *
     * @var int
     */
    public $qualityMax = 80;

    /**
     * default 0. If conversion results in quality below the min quality the image won't be compressed
     *
     * @var int
     */
    public $qualityMin = 0;

    /**
     * default 8. (very fast). value can rage between 1 (slow) and 11 (fast and rough)
     *
     * @var int
     */
    public $speed = 8;
}