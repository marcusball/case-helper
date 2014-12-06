<?php

namespace CaseHelper\Test\Unit\CaseHelper;

use PHPUnit_Framework_TestCase;


class TestCase extends PHPUnit_Framework_TestCase {

    protected $caseHelper = null;

    /**
     * A shorthand for asserting correct conversions.
     *
     * @param string $methodName
     * @param array $inputsAndExpectations inputs as keys, Expectations as values
     */
    protected function assertCaseHelperConvertsCasesCorrectly($methodName,
            array $inputsAndExpectations) {

        foreach ($inputsAndExpectations as $input => $expected) {
            $this->assertEquals($expected, call_user_func(array(
                $this->caseHelper, $methodName), $input));
        }
    }
}
