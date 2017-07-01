<?php

namespace CaseHelper\Test\Unit\CaseHelper;

use CaseHelper\CaseHelperFactory;


/**
 * Tests all conversions with input of type camelCase.
 */
class CamelCaseInputTest extends TestCase {

    public function setUp() {
        $this->caseHelper = CaseHelperFactory
                ::make(CaseHelperFactory::INPUT_TYPE_CAMEL_CASE);
    }

    public function testItConvertsCamelCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            'myCamelCase' => 'myCamelCase',
            'otherStuffInCamelCase' => 'otherStuffInCamelCase',
            'watEva' => 'watEva',
            'dontL👀kAtMeLikeThat' => 'dontL👀kAtMeLikeThat',
            'my🍕IsGood' => 'my🍕IsGood',
            "friday🍺sForever" => 'friday🍺sForever'
        ));
    }

    public function testItConvertsCamelCaseToSpaceCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'someCamelCasedStr' => 'some camel cased str',
            '1Is4Real2' => '1 is 4 real 2',
            'alrightThen' => 'alright then',
            'dontL👀kAtMeLikeThat' => 'dont l👀k at me like that',
            'my🍕IsGood' => 'my🍕 is good',
            "friday🍺sForever" => 'friday🍺s forever'
        ));
    }

    public function testItConvertsCamelCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            'mySuperCoolTest' => 'MySuperCoolTest',
            'iAmSoUnsureOfMyCase' => 'IAmSoUnsureOfMyCase',
            'dontL👀kAtMeLikeThat' => 'DontL👀kAtMeLikeThat',
            'my🍕IsGood' => 'My🍕IsGood',
            "friday🍺sForever" => 'Friday🍺sForever'
        ));
    }

    public function testItConvertsCamelCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            'ohItsCool' => 'oh-its-cool',
            'letMeTryAnotherOneOk?' => 'let-me-try-another-one-ok?',
            'kebabMe' => 'kebab-me',
            'dontL👀kAtMeLikeThat' => 'dont-l👀k-at-me-like-that',
            'my🍕IsGood' => 'my🍕-is-good',
            "friday🍺sForever" => 'friday🍺s-forever'
        ));
    }

    public function testItConvertsCamelCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            'someCamelStuff' => 'Some-Camel-Stuff',
            'whatchaGonnaDo?' => 'Whatcha-Gonna-Do?',
            'iHaveNoIdeaWhatImDoing12' => 'I-Have-No-Idea-What-Im-Doing-1-2',
            'dontL👀kAtMeLikeThat' => 'Dont-L👀k-At-Me-Like-That',
            'my🍕IsGood' => 'My🍕-Is-Good',
            "friday🍺sForever" => 'Friday🍺s-Forever'
        ));
    }

    public function testItConvertsCamelCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            'itsRainingBeCareful' => 'its_raining_be_careful',
            'iWillThinkAboutItOk?' => 'i_will_think_about_it_ok?',
            'snakeMe' => 'snake_me',
            'withNumber9' => 'with_number_9',
            'dontL👀kAtMeLikeThat' => 'dont_l👀k_at_me_like_that',
            'my🍕IsGood' => 'my🍕_is_good',
            "friday🍺sForever" => 'friday🍺s_forever'
        ));
    }

    public function testItConvertsCamelCaseToScreamingSnakeCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            'someCamelCaseAsUsual' => 'SOME_CAMEL_CASE_AS_USUAL',
            'ohHiCaptainCapslock' => 'OH_HI_CAPTAIN_CAPSLOCK',
            '4You' => '4_YOU',
            'dontL👀kAtMeLikeThat' => 'DONT_L👀K_AT_ME_LIKE_THAT',
            'my🍕IsGood' => 'MY🍕_IS_GOOD',
            "friday🍺sForever" => 'FRIDAY🍺S_FOREVER'
        ));
    }
}
