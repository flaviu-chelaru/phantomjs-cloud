<?php namespace PhantomJS;

/**
 * Class Scripts
 * Execute your own custom JavaScript inside the page being loaded. INPUT You can pass in either the url to a script to load, or the text of the script itself.
 * Example: scripts:{domReady:["//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js","return 'Hello, World!';"]}
 * OUTPUT Your scripts can return data to you in the pageResponse.scriptOutput object.
 * You can access this directly via windows._pjscMeta.scriptOutput or your script can simply return a value and it will be set as the scriptOutput (not available on external, url loaded scripts)
 * Also, if you use the pageRequest.renderType="script" setting, your response will be the scriptOutput itself (in JSON format) which allows you to construct your own custom API. A very powerfull feature! *
 *
 * @package PhantomJS
 */
class Scripts
{
    /**
     * triggers when the dom is ready for the current page. Please note that the page may still be loading.
     *
     * @var string[]
     */
    public $domReady = [];

    /**
     * triggers when we determine the page has been completed. If your page is being rendered, this occurs immediately before then.
     * IMPORTANT NOTE: Generally you do NOT want to load external scripts (url based) here, as it will hold up rendering.
     * Consider putting your external scripts in domReady
     *
     * @var string[]
     */
    public $loadFinished = [];
}