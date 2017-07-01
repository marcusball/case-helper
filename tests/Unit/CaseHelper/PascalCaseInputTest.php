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
            '12Test12' => '12Test12',
            'DontL👀kAtMeLikeThat' => 'DontL👀kAtMeLikeThat',
            'My🍕IsGood' => 'My🍕IsGood',
            "Friday🍺sForever" => 'Friday🍺sForever'
        ));
    }

    public function testItConvertsPascalCaseToSpaceCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'IAmSoPascalCased' => 'i am so pascal cased',
            'LookAtMe' => 'look at me',
            'EverythingIsAlright' => 'everything is alright',
            '1CheckThisOut2' => '1 check this out 2',
            'DontL👀kAtMeLikeThat' => 'dont l👀k at me like that',
            'My🍕IsGood' => 'my🍕 is good',
            "Friday🍺sForever" => 'friday🍺s forever'
        ));
    }

    public function testItConvertsPascalCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            'MyStuffIsGood' => 'myStuffIsGood',
            'ILikeThisALot' => 'iLikeThisALot',
            '123Meow456' => '123Meow456',
            'DontL👀kAtMeLikeThat' => 'dontL👀kAtMeLikeThat',
            'My🍕IsGood' => 'my🍕IsGood',
            "Friday🍺sForever" => 'friday🍺sForever'
        ));
    }

    public function testItConvertsPascalCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            'MyPascalInput' => 'my-pascal-input',
            'SomethingOtherAlright' => 'something-other-alright',
            'yup123' => 'yup-1-2-3',
            'DontL👀kAtMeLikeThat' => 'dont-l👀k-at-me-like-that',
            'My🍕IsGood' => 'my🍕-is-good',
            "Friday🍺sForever" => 'friday🍺s-forever'
        ));
    }

    public function testItConvertsPascalCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            'YopOkay' => 'Yop-Okay',
            'LetsTryThisOne' => 'Lets-Try-This-One',
            '234Okay' => '2-3-4-Okay',
            'DontL👀kAtMeLikeThat' => 'Dont-L👀k-At-Me-Like-That',
            'My🍕IsGood' => 'My🍕-Is-Good',
            "Friday🍺sForever" => 'Friday🍺s-Forever'
        ));
    }

    public function testItConvertsPascalCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            'ASneakySnake' => 'A_Sneaky_Snake',
            'WowThatsAwesome' => 'Wow_Thats_Awesome',
            'DontL👀kAtMeLikeThat' => 'Dont_L👀k_At_Me_Like_That',
            'My🍕IsGood' => 'My🍕_Is_Good',
            "Friday🍺sForever" => 'Friday🍺s_Forever'
        ));
    }

    public function testItConvertsPascalCaseToScreamingSnakeCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            'SupernaturalAndParanormal' => 'SUPERNATURAL_AND_PARANORMAL',
            'TestAllTheThings' => 'TEST_ALL_THE_THINGS',
            '4TestWithNumbers3' => '4_TEST_WITH_NUMBERS_3',
            'DontL👀kAtMeLikeThat' => 'DONT_L👀K_AT_ME_LIKE_THAT',
            'My🍕IsGood' => 'MY🍕_IS_GOOD',
            "Friday🍺sForever" => 'FRIDAY🍺S_FOREVER'
        ));
    }
}
