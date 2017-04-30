<?php namespace PhantomJS;

/**
 * Class PdfHeaderFooter
 * options for specifying headers or footers in a pdf render.
 *
 * @package PhantomJS
 */
class PdfHeaderFooter
{
    /**
     * if specified, this is used for the first page (instead of the repeating)
     * @var string
     */
    public $firstPage;

    /**
     * required. Supported dimension units are: 'mm', 'cm', 'in', 'px'. No unit means 'px'.
     * @var string
     */
    public $height = '1cm';

    /**
     * if specified, this is used for the last page (instead of the repeating)
     * @var string
     */

    public $lastPage;

    /**
     * if specified, this is used for single page pdfs (instead of the repeating)
     * @var string
     */
    public $onePage;

    /**
     * specify a header used for each page. use wildcards for pageNum,numPages as shown in this example:
     * repeating:<h1><span style='float:right'>%pageNum%/%numPages%</span></h1>
     * @var string
     */
    public $repeating;
}