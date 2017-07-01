<?php

namespace CaseHelper\Test\Unit\CaseHelper;

use CaseHelper\CaseHelperFactory;


/**
 * Tests all conversions with input of type space case.
 */
class SpaceCaseInputTest extends TestCase {

    public function setUp() {
        $this->caseHelper = CaseHelperFactory
                ::make(CaseHelperFactory::INPUT_TYPE_SPACE_CASE);
    }

    public function testItConvertsSpaceCaseToSpaceCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toSpaceCase', array(
            'My space case...' => 'My space case...',
            'You should not change me, okay?!' => 'You should not change me, okay?!',
            '123...Test...321' => '123...Test...321',
            'Dont l👀k at me like that' => 'Dont l👀k at me like that',
            'My 🍕 is good' => 'My 🍕 is good',
            "Friday 🍺s forever" => 'Friday 🍺s forever'
        ));
    }

    public function testItConvertsSpaceCaseToCamelCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toCamelCase', array(
            '...convert me to camel, please! ' => 'convertMeToCamelPlease',
            'My space case...' => 'mySpaceCase',
            'yeah; me    too :> #yolo' => 'yeahMeTooYolo',
            'Dont l👀k at me like that' => 'dontLkAtMeLikeThat',
            'My 🍕 is good' => 'myIsGood',
            "Friday 🍺s forever" => 'fridaySForever'
        ));
    }

    public function testItConvertsSpaceCaseToPascalCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toPascalCase', array(
            '  some sentence right here... let\'s see...' => 'SomeSentenceRightHereLetsSee',
            ' another one 23 ' => 'AnotherOne23',
            'dont l👀k at me like that' => 'DontLkAtMeLikeThat',
            'my 🍕 is gOod' => 'MyIsGOod',
            "friday 🍺s foRever" => 'FridaySFoRever'
        ));
    }

    public function testItConvertsSpaceCaseToKebabCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toKebabCase', array(
            ' I wanna be kebab... really# ' => 'i-wanna-be-kebab-really',
            'yes dunno what 2 write' => 'yes-dunno-what-2-write',
            '3 is more than 2' => '3-is-more-than-2',
            'Dont l👀k at me like that' => 'dont-lk-at-me-like-that',
            'My 🍕 is good' => 'my-is-good',
            "Friday 🍺s forever" => 'friday-s-forever'
        ));
    }

    public function testItConvertsSpaceCaseToTrainCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toTrainCase', array(
            ' I see #trains ! ' => 'I-See-Trains',
            'let\'s see...' => 'Lets-See',
            '4 equals 2 times 2' => '4-Equals-2-Times-2',
            'Dont l👀k at me like that' => 'Dont-Lk-At-Me-Like-That',
            'My 🍕 is good' => 'My-Is-Good',
            "Friday 🍺s forever" => 'Friday-S-Forever'
        ));
    }

    public function testItConvertsSpaceCaseToSnakeCase() {

        $this->assertCaseHelperConvertsCasesCorrectly('toSnakeCase', array(
            ' make me snake cased, plz!' => 'make_me_snake_cased_plz',
            'i Just WaNna have phun; ' => 'i_just_wanna_have_phun',
            '42 - that\'s it!' => '42_thats_it'
        ));
    }

    public function testItConvertsSpaceCaseToScreamingSnakeCase() {
        $this->assertCaseHelperConvertsCasesCorrectly('toScreamingSnakeCase', array(
            ' do the Cpt. Capslock for me' => 'DO_THE_CPT_CAPSLOCK_FOR_ME',
            ' i agree ! ' => 'I_AGREE',
            ' 123# Stuff with numbers 456#!' => '123_STUFF_WITH_NUMBERS_456',
            'Dont l👀k at me like that' => 'DONT_LK_AT_ME_LIKE_THAT',
            'My 🍕 is good' => 'MY_IS_GOOD',
            "Friday 🍺s forever" => 'FRIDAY_S_FOREVER'
        ));
    }
}
