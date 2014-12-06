<?php

namespace CaseHelper;


/**
 * Converts PascalCase strings to other formats.
 */
class PascalCaseHelper implements CaseHelperInterface {

    private $separatorPattern = '/((?<=[^$])[A-Z0-9])/';

    public function toSpaceCase($str) {
        return strtolower(preg_replace($this->separatorPattern, ' $1', $str));
    }

    public function toCamelCase($str) {
        return lcfirst($str);
    }

    public function toKebabCase($str) {
        return strtolower($this->toTrainCase($str));
    }

    public function toPascalCase($str) {
        return $str;
    }

    public function toScreamingSnakeCase($str) {
        return strtoupper($this->toSnakeCase($str));
    }

    public function toSnakeCase($str) {
        return preg_replace($this->separatorPattern, '_$1', $str);
    }

    public function toTrainCase($str) {
        return preg_replace($this->separatorPattern, '-$1', $str);
    }
}
