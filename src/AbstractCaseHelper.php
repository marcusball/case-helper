<?php

namespace CaseHelper;

abstract class AbstractCaseHelper implements CaseHelperInterface
{
    const INT_MAX = 2147483647;

    protected $encoding;

    public function __construct($encoding)
    {
        $this->encoding = $encoding;
    }

    protected function mb_ucfirst($string, $encoding)
    {
        $strlen    = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then      = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding).$then;
    }

    protected function mb_lcfirst($string, $encoding)
    {
        $strlen    = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then      = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtolower($firstChar, $encoding).$then;
    }
}
