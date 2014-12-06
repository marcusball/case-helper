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
            'watEva' => 'watEva'
        ));
    }

    public function testItConvertsCamelCaseToSpaceCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'someCamelCasedStr' => 'some camel cased str',
            '1Is4Real2' => '1 is 4 real 2',
            'alrightThen' => 'alright then'
        ));
    }

    public function testItConvertsCamelCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            'mySuperCoolTest' => 'MySuperCoolTest',
            'iAmSoUnsureOfMyCase' => 'IAmSoUnsureOfMyCase'
        ));
    }

    public function testItConvertsCamelCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            'ohItsCool' => 'oh-its-cool',
            'letMeTryAnotherOneOk?' => 'let-me-try-another-one-ok?',
            'kebabMe' => 'kebab-me'
        ));
    }

    public function testItConvertsCamelCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            'someCamelStuff' => 'Some-Camel-Stuff',
            'whatchaGonnaDo?' => 'Whatcha-Gonna-Do?',
            'iHaveNoIdeaWhatImDoing12' => 'I-Have-No-Idea-What-Im-Doing-1-2'
        ));
    }

    public function testItConvertsCamelCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            'itsRainingBeCareful' => 'its_raining_be_careful',
            'iWillThinkAboutItOk?' => 'i_will_think_about_it_ok?',
            'snakeMe' => 'snake_me',
            'withNumber9' => 'with_number_9'
        ));
    }

    public function testItConvertsCamelCaseToScreamingSnakeCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            'someCamelCaseAsUsual' => 'SOME_CAMEL_CASE_AS_USUAL',
            'ohHiCaptainCapslock' => 'OH_HI_CAPTAIN_CAPSLOCK',
            '4You' => '4_YOU'
        ));
    }
}
