<?php namespace PhantomJS;

/**
 * Class RequestPage
 * The parameters for requesting and rendering a page. When you submit an array of IPageRequests, t
 * hey are loaded in-orrder, and only the last one is rendered. All variables except 'url' are optional.
 * @package PhantomJS
 */
class PageRequest
{
    /**
     * Returns HTML response
     */
    const RENDER_TYPE_HTML = 'html';
    /**
     * Returns JPG response
     * @see self::RENDER_TYPE_PNG for transparency
     */
    const RENDER_TYPE_JPEG = 'jpeg';
    /**
     * Returns PNG response
     */
    const RENDER_TYPE_PNG = 'png';
    /**
     * Returns PDF response
     */
    const RENDER_TYPE_PDF = 'pdf';
    /**
     * Returns the contents of window['_pjscMeta'].scriptOutput
     * @see
     */
    const RENDER_TYPE_SCRIPT = 'script';

    /**
     *  return the text without html tags (page plain text)
     */
    const RENDER_TYPE_PLAIN_TEXT = 'plainText';

    /**
     * required. the target page you wish to load
     * @var string
     */
    public $url;

    /**
     * if specified, will be used as the content of the page you are loading (no network request will be made for the url).
     * However, the url property is still required, as that will be used as the page's "pretend" url
     * example: content:"<h1>Hello, World!</h1>",url:"about:blank"
     *
     * @var string
     */
    public $content;

    /**
     * TRUE to return the page conents and metadata as a JSON object.
     * see IUserResponse if FALSE, we return the rendered content in it's native form.
     * @var bool
     */
    public $outputAsJSON;

    /**
     * settings related to rendering of the last page of your request
     * @var RenderSettings
     */
    public $renderSettings;

    /**
     * "html": returns the html text,
     * "jpeg"|"jpg" : The default. renders page as jpeg. transparency not supported. (use png for transparency),
     * "png": renders page as png,
     * "pdf": renders page as a pdf,
     * "script": returns the contents of window['_pjscMeta'].scriptOutput. see the scripts parameter for more details,
     * "plainText": return the text without html tags (page plain text),
     *
     * @var string
     */
    public $renderType;

    /**
     * adjustable parameters for when making network requests to the url specified
     * @var UrlSettings
     */
    public $urlSettings;


    /**
     * settings related to requesting internet resources (your page and resources referenced by your page)
     * @var RequestSettings
     */
    public $requestSettings;

    /**
     * add the nodes from your pageResponse that you do not wish to transmit.
     * This reduces the size of your data, thus reducing cost and transmission time.
     * if you need the data in these nodes, simply remove it from this array
     * @var string[]
     */
    public $suppressJson = [
        "events.value.resourceRequest.headers",
        "events.value.resourceResponse.headers",
        "frameData.content",
        "frameData.childFrames"
    ];

    /**
     * Execute your own custom JavaScript inside the page being loaded.
     * @see Scripts docs for more details.
     * @var Scripts
     */
    public $scripts;

    public function __construct($url)
    {
        $this->url = $url;
        $this->urlSettings = new UrlSettings;
        $this->scripts = new Scripts;
        $this->requestSettings = new RequestSettings;
        $this->renderSettings = new RenderSettings;
    }
}