<?php

namespace CaseHelper;


/**
 * Converts space case strings to other formats.
 */
class SpaceCaseHelper extends AbstractCaseHelper {

    private $separatorPattern = '/\s+([^\s])/u';

    public function toSpaceCase($str) {
        return $str;
    }

    public function toCamelCase($str) {
        return $this->mb_lcfirst(preg_replace_callback($this->separatorPattern, function($el) {
            return mb_strtoupper($el[1], $this->encoding);
        }, $this->cleanString($str)), $this->encoding);
    }

    public function toPascalCase($str) {
        return $this->mb_ucfirst($this->toCamelCase($str), $this->encoding);
    }

    public function toKebabCase($str) {
        return mb_strtolower(preg_replace_callback($this->separatorPattern, function($el) {
            return '-' . ($el[1]);
        }, $this->cleanString($str)), $this->encoding);
    }

    public function toTrainCase($str) {
        return $this->mb_ucfirst(preg_replace_callback($this->separatorPattern, function($el) {
            return '-' . mb_strtoupper($el[1], $this->encoding);
        }, $this->cleanString($str)), $this->encoding);
    }

    public function toSnakeCase($str) {
        return mb_strtolower(preg_replace_callback($this->separatorPattern, function($el) {
            return '_' . $el[1];
        }, $this->cleanString($str)), $this->encoding);
    }

    public function toScreamingSnakeCase($str) {
        return mb_strtoupper(preg_replace_callback($this->separatorPattern, function($el) {
            return '_' . $el[1];
        }, $this->cleanString($str)), $this->encoding);
    }

    /**
     * Removes unneeded characters from the string.
     *
     * @param string $str
     * @return string
     */
    private function cleanString($str) {
        return trim(preg_replace('/[^A-Za-z0-9\s]/u', '', $str));
    }
}
