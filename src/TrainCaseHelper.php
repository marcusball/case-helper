<?php

namespace CaseHelper;


/**
 * Converts Train-Case strings to other formats.
 */
class TrainCaseHelper implements CaseHelperInterface {

    public function toSpaceCase($str) {
        return strtolower(str_replace('-', ' ', $str));
    }

    public function toCamelCase($str) {
        return lcfirst($this->toPascalCase($str));
    }

    public function toKebabCase($str) {
        return strtolower($str);
    }

    public function toPascalCase($str) {
        return preg_replace_callback('/-[A-Z0-9]/', function($el) {
            return strtoupper(substr($el[0], 1));
        }, $str);
    }

    public function toScreamingSnakeCase($str) {
        return strtoupper($this->toSnakeCase($str));
    }

    public function toSnakeCase($str) {
        return strtolower(preg_replace_callback('/-[A-Z0-9]/', function($el) {
            return '_' . substr($el[0], 1);
        }, $str));
    }

    public function toTrainCase($str) {
        return $str;
    }
}
