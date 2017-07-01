<?php

namespace CaseHelper;


/**
 * Converts SCREAMING_SNAKE_CASE strings to other formats.
 */
class ScreamingSnakeCaseHelper extends AbstractCaseHelper {

    public function toSpaceCase($str) {
        return mb_strtolower(str_replace('_', ' ', $str), $this->encoding);
    }

    public function toCamelCase($str) {
        return preg_replace_callback('/_./u', function($el) {
            return mb_strtoupper(mb_substr($el[0], 1, parent::INT_MAX, $this->encoding), $this->encoding);
        }, mb_strtolower($str, $this->encoding));
    }

    public function toKebabCase($str) {
        return mb_strtolower(preg_replace_callback('/_./u', function($el) {
            return '-' . mb_substr($el[0], 1, parent::INT_MAX, $this->encoding);
        }, $str), $this->encoding);
    }

    public function toPascalCase($str) {
        return $this->mb_ucfirst($this->toCamelCase($str), $this->encoding);
    }

    public function toScreamingSnakeCase($str) {
        return $str;
    }

    public function toSnakeCase($str) {
        return mb_strtolower($str, $this->encoding);
    }

    public function toTrainCase($str) {
        return $this->mb_ucfirst(preg_replace_callback('/_./u', function($el) {
            return '-' . mb_strtoupper(mb_substr($el[0], 1, parent::INT_MAX, $this->encoding), $this->encoding);
        }, mb_strtolower($str, $this->encoding)), $this->encoding);
    }
}
