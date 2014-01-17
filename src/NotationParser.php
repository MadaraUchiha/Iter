<?php
namespace Iter;

/**
 * Interface NotationParser
 *
 * The NotationParser interface allows authors to
 * create different notation syntaxes, and parse them
 * as needed.
 *
 * @package Iter
 */
interface NotationParser {

    /**
     * @param string $notation
     * @param string $subject
     *
     * @return bool
     */
    public function matchNotationAgainstSubject($notation, $subject);

}