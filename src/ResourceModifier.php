<?php namespace PhantomJS;

/**
 * Class ResourceModifier
 * regex + adjustment parametes for modifying or rejecting resources being loaded by the webpage.
 *
 * @package PhantomJS
 */
class ResourceModifier
{
    /**
     * special pattern matching regex.
     * capture groups can replace parts of the changeUrl that use the special marker tokens $$0, $$1, etc on to $$9
     *
     * @var string
     */
    public $changeCaptureRegex;

    /**
     * changes the current URL of the network request.
     * This is an excellent and only way to provide alternative implementation of a remote resource.
     * you can even use a dataURI so that you can set the contents directly,
     * Example: data:,Hello%2C%20World! additionally, you can use special marker tokens to replace parts of the changeUrl with the original resource url.
     * the special marker tokens are $$port $$protocol```` $$host```$$path.
     * For example changeUrl="$$protocol://example.com$$path" also, you can use the changeCaptureRegex parameter to provide custom marker tokens.
     *
     * @var string
     */
    public $changeUrl;

    /**
     * if true, blacklists the request unless a later matching resourceAdjustor changes it back to false (we process in a FIFO fashion) by default, we don't blacklist anything.
     * You should keep it this way when rendering jpeg (where the visuals matter), if processing text/data, blacklisting .css files ['..css.'] will work fine.
     * check the response.metrics for other resources you could blacklist (example: facebook, google analytics, ad networks)
     *
     * @var boolean
     */
    public $isBlacklisted;

    /**
     * pattern used to match a resource's url examples: it really depends what the site is and what you are wanting to block,
     * It's especially useful if you just need the text, as you can block all css files from loading, such as: ".*\.css.*"
     * Don't use this to block images. instead, images are blocked by using RequestSettings::ignoreImages = true
     *
     * @var string
     */
    public $regex;

    /**
     * optional key/value pairs for adjusting the headers of this resource's request.
     *
     * @var array
     */
    public $setHeader;
}