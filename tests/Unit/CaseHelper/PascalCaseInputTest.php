<?php

namespace CaseHelper\Test\Unit\CaseHelper;

use CaseHelper\CaseHelperFactory;


/**
 * Tests all conversions with input of type PascalCase.
 */
class PascalCaseInputTest extends TestCase {

    public function setUp() {
        $this->caseHelper = CaseHelperFactory::make(CaseHelperFactory
                ::INPUT_TYPE_PASCAL_CASE);
    }

    public function testItConvertsPascalCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            'PascalCasedWord' => 'PascalCasedWord',
            'AnotherOne' => 'AnotherOne',
            'IThinkSo' => 'IThinkSo',
            '12Test12' => '12Test12'
        ));
    }

    public function testItConvertsPascalCaseToSpaceCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'IAmSoPascalCased' => 'i am so pascal cased',
            'LookAtMe' => 'look at me',
            'EverythingIsAlright' => 'everything is alright',
            '1CheckThisOut2' => '1 check this out 2'
        ));
    }

    public function testItConvertsPascalCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            'MyStuffIsGood' => 'myStuffIsGood',
            'ILikeThisALot' => 'iLikeThisALot',
            '123Meow456' => '123Meow456'
        ));
    }

    public function testItConvertsPascalCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            'MyPascalInput' => 'my-pascal-input',
            'SomethingOtherAlright' => 'something-other-alright',
            'yup123' => 'yup-1-2-3'
        ));
    }

    public function testItConvertsPascalCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            'YopOkay' => 'Yop-Okay',
            'LetsTryThisOne' => 'Lets-Try-This-One',
            '234Okay' => '2-3-4-Okay'
        ));
    }

    public function testItConvertsPascalCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            'ASneakySnake' => 'A_Sneaky_Snake',
            'WowThatsAwesome' => 'Wow_Thats_Awesome'
        ));
    }

    public function testItConvertsPascalCaseToScreamingSnakeCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            'SupernaturalAndParanormal' => 'SUPERNATURAL_AND_PARANORMAL',
            'TestAllTheThings' => 'TEST_ALL_THE_THINGS',
            '4TestWithNumbers3' => '4_TEST_WITH_NUMBERS_3'
        ));
    }
}
