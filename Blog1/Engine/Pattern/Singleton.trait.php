<?php

namespace TestProject\Engine\Pattern;
trait Singleton 
{
    use Base;
    
    protected static $_oInstance = null;
    public static function getInstance()
    {
        return (null === static::$oInstance) ? static::$oInstance = new static : static::$oInstance;
    }
    
}

