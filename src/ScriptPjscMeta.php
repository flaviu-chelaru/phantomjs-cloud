<?php namespace PhantomJS;

/**
 * Class ScriptPjscMeta
 * properties exposed to your custom scripts via window._pjscMeta
 *
 * @package PhantomJS
 */
class ScriptPjscMeta
{
    /**
     * set to false by default. set to true to force rendering immediately.
     * good for example, when you want to render as soon as domReady happens
     *
     * @var boolean
     */
    public $forceFinish;

    /**
     * set to false by default. if true, will delay rendering until you set it back to false. good if you are waiting on an AJAX event.
     *
     * @var boolean
     */
    public $manualWait;

    /**
     * allows you to override specific pageRequest options with values you compute in your script (based on the document at runtime)
     *
     * @var ClipRectangleOptions[]
     */
    public $optionsOverrides;

    /**
     * Scripts can access (readonly) details about the page being loaded via window._pjscMeta.pageResponse
     *
     * @See PageResponse for more details.
     *
     * @var PageResponse
     */
    public $pageResponse;

    /**
     * Your scripts can return data to you in the pageResponse.scriptOutput object.
     * You can access this directly via windows._pjscMeta.scriptOutput or your script can simply return a value and it will be set as the scriptOutput (not available on external, url loaded scripts)
     *
     * @var array
     */
    public $scriptOutput;

    /**
     * how many custom scripts have been loaded so far
     *
     * @var int
     */
    public $scriptsExecuted;
}