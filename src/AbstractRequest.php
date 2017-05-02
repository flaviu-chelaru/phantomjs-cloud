<?php namespace PhantomJS;

/**
 * Class AbstractRequest
 *
 * @package PhantomJS
 */
abstract class AbstractRequest
{
    /**
     * @var string
     */
    protected static $API_URL = 'http://PhantomJScloud.com/api/browser/v2/%s/';
    protected static $API_KEY = 'a-demo-key-with-low-quota-per-ip-address';

    /**
     * @param $data
     *
     * @return array
     */
    private static function clean($data)
    {
        $tmp = array();
        foreach ($data as $key => $value) {
            $tmpValue = null;

            if (is_array($value) || is_object($value)) {
                $tmpValue = self::clean($value);
            } elseif ($value !== null) {
                $tmpValue = $value;
            }

            if (!empty($tmpValue)) {
                $tmp[$key] = $tmpValue;
            }
        }
        return $tmp;
    }

    /**
     * @return string
     */

    public function toJSON()
    {
        return json_encode(self::clean($this), JSON_UNESCAPED_SLASHES);
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function setApiKey($key)
    {
        return self::$API_KEY = $key;
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return sprintf(self::$API_URL, self::$API_KEY);
    }

    /**
     * @return bool|string
     */
    public function getResponse()
    {
        $options = array(
            'http' => array(
                'header' => "Content-type: application/json\r\n",
                'method' => 'POST',
                'content' => $this->toJSON()
            )
        );

        $context = stream_context_create($options);
        $result = file_get_contents($this->getApiUrl(), false, $context);
        return $result;
    }
}