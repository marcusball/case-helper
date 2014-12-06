<?php

namespace CaseHelper;


/**
 * Converts space case strings to other formats.
 */
class SpaceCaseHelper implements CaseHelperInterface {

    private $separatorPattern = '/\s+([^\s])/';

    public function toSpaceCase($str) {
        return $str;
    }

    public function toCamelCase($str) {
        return preg_replace_callback($this->separatorPattern, function($el) {
            return strtoupper($el[1]);
        }, $this->cleanString($str));
    }

    public function toPascalCase($str) {
        return ucfirst($this->toCamelCase($str));
    }

    public function toKebabCase($str) {
        return strtolower(preg_replace_callback($this->separatorPattern, function($el) {
            return '-' . ($el[1]);
        }, $this->cleanString($str)));
    }

    public function toTrainCase($str) {
        return ucfirst(preg_replace_callback($this->separatorPattern, function($el) {
            return '-' . strtoupper($el[1]);
        }, $this->cleanString($str)));
    }

    public function toSnakeCase($str) {
        return strtolower(preg_replace_callback($this->separatorPattern, function($el) {
            return '_' . $el[1];
        }, $this->cleanString($str)));
    }

    public function toScreamingSnakeCase($str) {
        return strtoupper(preg_replace_callback($this->separatorPattern, function($el) {
            return '_' . $el[1];
        }, $this->cleanString($str)));
    }

    /**
     * Removes unneeded characters from the string.
     *
     * @param string $str
     * @return string
     */
    private function cleanString($str) {
        return trim(preg_replace('/[^A-Za-z0-9\s]/', '', $str));
    }
}
