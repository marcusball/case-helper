<?php

namespace CaseHelper;


/**
 * Converts camelCase strings to other formats.
 */
class CamelCaseHelper extends AbstractCaseHelper {

    private $separatorPattern = '/((?<=[^$])[A-Z0-9])/u';

    public function toSpaceCase($str) {
        return mb_strtolower(preg_replace($this->separatorPattern, ' $1', $str), $this->encoding);
    }

    public function toCamelCase($str) {
        return $str;
    }

    public function toPascalCase($str) {
        return $this->mb_ucfirst($str, $this->encoding);
    }

    public function toKebabCase($str) {
        return mb_strtolower($this->toTrainCase($str), $this->encoding);
    }

    public function toTrainCase($str) {
        return $this->mb_ucfirst(preg_replace($this->separatorPattern, '-$1', $str), $this->encoding);
    }

    public function toSnakeCase($str) {
        return mb_strtolower(preg_replace($this->separatorPattern, '_$1', $str), $this->encoding);
    }

    public function toScreamingSnakeCase($str) {
        return mb_strtoupper($this->toSnakeCase($str), $this->encoding);
    }
}
