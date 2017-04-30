<?php namespace PhantomJS;


/**
 * Class PdfOptions
 * options specific to rendering pdfs.
 * IMPORTANT NOTE: we strongly recommend using px as your units of measurement.
 *
 * @package PhantomJS
 */
class PdfOptions
{
    const FORMAT_LETTER   = 'letter';
    const FORMAT_PORTRAIT = 'portrait';
    const FORMAT_TABLOID  = 'tabloid';
    const FORMAT_A3       = 'A3';
    const FORMAT_A4       = 'A4';
    const FORMAT_A5       = 'A5';

    const ORIENTATION_PORTRAIT  = 'portrait';
    const ORIENTATION_LANDSCAPE = 'landscape';

    /**
     * Border is optional and defaults to 0.
     * A non-uniform border can be specified in the form {left: '2cm', top: '2cm', right: '2cm', bottom: '3cm'}
     * Use of px is strongly recommended.
     * TODO Build an object to represent the data
     *
     * @var int|array
     */
    public $border = 0;

    /**
     * set the DPI for pdf generation.
     * defaults to 150, which causes each page to be 2x as large (use "fit to paper" when printing)
     * If you want exact, proper page dimensions, set this to 72.
     *
     * @var int
     */
    public $dpi = 150;

    /**
     * settings for footers of the pdf
     *
     * @var PdfHeaderFooter
     */
    public $footer;

    /**
     * Supported formats are: 'A3', 'A4', 'A5', 'Legal', 'Letter', 'Tabloid'. .
     *
     * @var string
     */
    public $format = self::FORMAT_LETTER;

    /**
     * settings for headers of the pdf
     *
     * @var PdfHeaderFooter
     */
    public $header;

    /**
     * height and width are optional if format is specified.
     * Use of px is strongly recommended.
     * Supported dimension units are: 'mm', 'cm', 'in', 'px'. No unit means 'px'.
     *
     * @var string
     */
    public $height;

    /**
     * optional. ('portrait', 'landscape') and defaults to 'portrait'
     *
     * @var string
     */
    public $orientation = self::FORMAT_PORTRAIT;

    /**
     * height and width are optional if format is specified.
     * Use of px is strongly recommended.
     * Supported dimension units are: 'mm', 'cm', 'in', 'px'. No unit means 'px'.
     *
     * @var
     */
    public $width;
}