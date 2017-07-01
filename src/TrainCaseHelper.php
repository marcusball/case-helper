<?php

namespace CaseHelper;


/**
 * Converts Train-Case strings to other formats.
 */
class TrainCaseHelper extends AbstractCaseHelper {

    public function toSpaceCase($str) {
        return mb_strtolower(str_replace('-', ' ', $str), $this->encoding);
    }

    public function toCamelCase($str) {
        return $this->mb_lcfirst($this->toPascalCase($str), $this->encoding);
    }

    public function toKebabCase($str) {
        return mb_strtolower($str, $this->encoding);
    }

    public function toPascalCase($str) {
        return preg_replace_callback('/-./u', function($el) {
            return mb_strtoupper(mb_substr($el[0], 1, parent::INT_MAX, $this->encoding), $this->encoding);
        }, $str);
    }

    public function toScreamingSnakeCase($str) {
        return mb_strtoupper($this->toSnakeCase($str), $this->encoding);
    }

    public function toSnakeCase($str) {
        return mb_strtolower(preg_replace_callback('/-./', function($el) {
            return '_' . mb_substr($el[0], 1, parent::INT_MAX, $this->encoding);
        }, $str), $this->encoding);
    }

    public function toTrainCase($str) {
        return $str;
    }
}
