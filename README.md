# PhantomJS Cloud

A library to interact with the Phantom JS Cloud

Examples and extensive documentation on the API
https://phantomjscloud.com/docs/http-api/

### Simple example

Write the webpage to a JPG file:

```php

include_once 'vendor/autoload.php';

$request = new \PhantomJS\PageRequest('http://www.example.com');
file_put_contents('example.com.jpg', $request->getResponse());

```

### TODO - What we plan next for this code
* find a general way to generate the JSON with out the NULL arguments
* have a directory structure that will allow you to separate PhantomJS classes from helper classes
* migrate public arguments to protected arguments where possible and use setters and getters.
* integrate an HTTP client ( like GUZZLE HTTP )
* add unit testing
* see TODO's in the class comments
* add examples in the documentation