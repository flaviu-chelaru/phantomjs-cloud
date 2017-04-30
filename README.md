# PhantomJS Cloud

A library to interact with the Phantom JS Cloud

The library will generate the JSON Object. This object can be later sent as a HTTP Request with Guzzle or other HTTP Client for PHP.

The library does not make HTTP requests - this library only generates the JSON you can use as a payload when you make your HTTP requests.

### TODO - What we plan next for this code
* find a general way to generate the JSON with out the NULL arguments
* have a directory structure that will allow you to separate PhantomJS classes from helper classes
* migrate public arguments to protected arguments where possible and use setters and getters.
* integrate an HTTP client ( like GUZZLE HTTP )
* add unit testing
* see TODO's in the class comments
* add examples in the documentation