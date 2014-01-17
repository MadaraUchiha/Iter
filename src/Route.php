<?php
namespace Iter;

/**
 * Class Route
 *
 * Describes a single Route found in the Router.
 *
 * @package Iter
 */
class Route {

    /** @var string Name of the pattern. Used in link generation. */
    private $name;
    /** @var string Notation syntax for route finding */
    private $notation;
    /** @var mixed What this route maps to. Can be anything, decided by the caller. */
    private $map;
    /** @var NotationParser  */
    private $notationParser;

    public function __construct($name, $notation, $map) {
        $this->name = $name;
        $this->notation = $notation;
        $this->map = $map;
    }

    public function getName() {
        return $this->name;
    }

} 