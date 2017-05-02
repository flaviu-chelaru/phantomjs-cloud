<?php namespace PhantomJS;

abstract class AbstractRequest
{
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

    public function toJSON() {
        return json_encode(self::clean($this), JSON_UNESCAPED_SLASHES);
    }
}