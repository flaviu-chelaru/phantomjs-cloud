# PhantomJS Cloud

A library to interact with the Phantom JS Cloud

Examples and extensive documentation on the API
https://phantomjscloud.com/docs/http-api/

### Simple example

Write the web page to a JPG file:

```php

include_once 'vendor/autoload.php';

$request = new \PhantomJS\PageRequest('http://www.example.com');
file_put_contents('example.com.jpg', $request->getResponse());

```
This example shouldn't be used in production. If you need to perform advanced HTTP requests to the api, please address a dedicated library for that.
This library should be used only to write your requests

### Guzzle Example

```php 

include_once __DIR__ . '/vendor/autoload.php';

/**
 * write your phantom js request
 * @see https://phantomjscloud.com/docs/
 */
$request = new \PhantomJS\PageRequest('http://www.example.com');

/**
 * Initialize Guzzle to perform HTTP requests
 * @see http://docs.guzzlephp.org/en/stable
 * The request url will be https://phantomjscloud.com/api/browser/v2/a-demo-key-with-low-quota-per-ip-address/?request={url:%22http://www.example.com%22}
 */
$client = new GuzzleHttp\Client();
$response = $client->get($request->getApiUrl() . '?request=' . $request->toJSON());
print $response->getBody();

```

### TODO - What we plan next for this code
* have a directory structure that will allow you to separate PhantomJS classes from helper classes
* migrate public arguments to protected arguments where possible and use setters and getters.
* see TODO's in the class comments
* add examples in the documentation