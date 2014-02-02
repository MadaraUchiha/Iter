<?php

namespace Reti\Core;

/**
 * Interface RouteSource
 *
 * This interface describes the required methods for
 * an object to be considered a proper route source.
 *
 * This interface is useful because Routes can come
 * from various locations, a PHP array, JSON file,
 * XML file, RESTful API, etc.
 *
 * @package Reti
 */
interface RouteSource {

    public function toRouteArray();

} 