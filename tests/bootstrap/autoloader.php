<?php

const DS = DIRECTORY_SEPARATOR;

class Autoloader {

    private $path;
    private $defaultNamespace;

    /**
     * @param string $path Path to include from
     * @param        $defaultNamespace
     */
    public function __construct($path, $defaultNamespace) {
        $this->path = $path;
        $this->defaultNamespace = $defaultNamespace;
    }

    public function load($fullyClassifiedClassName) {
        $fullyClassifiedClassName = str_replace($this->defaultNamespace, "", $fullyClassifiedClassName);
        $parts = explode("\\", $fullyClassifiedClassName);
        $class = array_pop($parts);
        $namespace = implode("\\", $parts); //By this point, the class isn't there anymore.
        $namespace = str_replace("\\", DIRECTORY_SEPARATOR, $namespace);
        $include_path = $this->path;
        if ($namespace) $include_path .= DS . $namespace;
        $include_path .= DS . $class . ".php";

        /** @noinspection PhpIncludeInspection */
        require_once $include_path;
    }

    public function register() {
        spl_autoload_register([$this, "load"]);
    }

}