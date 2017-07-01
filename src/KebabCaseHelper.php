<?php

namespace CaseHelper;


/**
 * Converts kabab-case strings to other formats.
 */
class KebabCaseHelper extends AbstractCaseHelper {

    private $separatorPattern = '/-(.)/u';

    public function toSpaceCase($str) {
        return preg_replace_callback($this->separatorPattern, function($el) {
            return ' ' . $el[1];
        }, $str);
    }

    public function toCamelCase($str) {
        return $this->mb_lcfirst(preg_replace_callback($this->separatorPattern, function($el) {
            return mb_strtoupper($el[1], $this->encoding);
        }, $str), $this->encoding);
    }

    public function toKebabCase($str) {
        return $str;
    }

    public function toPascalCase($str) {
        return $this->mb_ucfirst($this->toCamelCase($str), $this->encoding);
    }

    public function toScreamingSnakeCase($str) {
        return mb_strtoupper($this->toSnakeCase($str), $this->encoding);
    }

    public function toSnakeCase($str) {
        return preg_replace_callback($this->separatorPattern, function($el) {
            return '_' . $el[1];
        }, $str);
    }

    public function toTrainCase($str) {
        return $this->mb_ucfirst(preg_replace_callback('/-([A-Za-z])/u', function($el) {
            return mb_strtoupper($el[0], $this->encoding);
        }, $str), $this->encoding);
    }
}
