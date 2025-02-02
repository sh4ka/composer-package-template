<?php

namespace CustomNamespace\Template;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PhpDocumentor will use this
*  to automatically generate the API documentation
*
*  @author Jesús Flores <me@jesusfloressanjose.com>
 * @package CustomNamespace\Template
*/
class YourClass
{
    /**
     * Sample method
     *
     * Always create a corresponding DocBlock for each method, describing what it is for,
     * this helps the PhpDocumentor to properly generate the documentation
     *
     * @param string $name
     *
     * @return string
     */
    public function sayHello(string $name): string
    {
        return sprintf("Hello %s!", ucfirst($name));
    }
}
