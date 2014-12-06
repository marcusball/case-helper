<?php

namespace CaseHelper;


/**
 * Converts kabab-case strings to other formats.
 */
class KebabCaseHelper implements CaseHelperInterface {

    private $separatorPattern = '/-([A-Za-z0-9])/';

    public function toSpaceCase($str) {
        return preg_replace_callback($this->separatorPattern, function($el) {
            return ' ' . $el[1];
        }, $str);
    }

    public function toCamelCase($str) {
        return preg_replace_callback($this->separatorPattern, function($el) {
            return strtoupper($el[1]);
        }, $str);
    }

    public function toKebabCase($str) {
        return $str;
    }

    public function toPascalCase($str) {
        return ucfirst($this->toCamelCase($str));
    }

    public function toScreamingSnakeCase($str) {
        return strtoupper($this->toSnakeCase($str));
    }

    public function toSnakeCase($str) {
        return preg_replace_callback($this->separatorPattern, function($el) {
            return '_' . $el[1];
        }, $str);
    }

    public function toTrainCase($str) {
        return ucfirst(preg_replace_callback('/-([A-Za-z])/', function($el) {
            return strtoupper($el[0]);
        }, $str));
    }
}
