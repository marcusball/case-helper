<?php

namespace CaseHelper;


/**
 * Converts camelCase strings to other formats.
 */
class CamelCaseHelper implements CaseHelperInterface {

    private $separatorPattern = '/((?<=[^$])[A-Z0-9])/';

    public function toSpaceCase($str) {
        return strtolower(preg_replace($this->separatorPattern, ' $1', $str));
    }

    public function toCamelCase($str) {
        return $str;
    }

    public function toPascalCase($str) {
        return ucfirst($str);
    }

    public function toKebabCase($str) {
        return strtolower($this->toTrainCase($str));
    }

    public function toTrainCase($str) {
        return ucfirst(preg_replace($this->separatorPattern, '-$1', $str));
    }

    public function toSnakeCase($str) {
        return strtolower(preg_replace($this->separatorPattern, '_$1', $str));
    }

    public function toScreamingSnakeCase($str) {
        return strtoupper($this->toSnakeCase($str));
    }
}
