<?php
namespace Kwn\NumberToWords\Language\Ukrainian\Transformer;

use Kwn\NumberToWords\Language\Ukrainian\Dictionary\Number as NumberDictionary;

class NumberTransformerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerToWords
     */
    public function testToWords($expectedValue, $number)
    {
        $transformer = new NumberTransformer(new NumberDictionary());
        $this->assertEquals($expectedValue, $transformer->toWords($number));
    }

    public function providerToWords()
    {
        return [
            ['нуль', 0],
            ['три', 3],
            ['три', 3.00],
            ['вісім', 8.0],
            ['десять', 10],
            ['двадцять', 20],
            ['п\'ятдесят', 50],
            ['дев\'яносто', 90],
            ['дванадцять', 12],
            ['двадцять п\'ять', 25],
            ['п\'ятдесят вісім', 58],
            ['дев\'яносто дев\'ять', 99],
            ['сто', 100],
            ['сто два', 102],
            ['сто тринадцять', 113],
            ['двісті двадцять дев\'ять', 229.0],
            ['п\'ятсот', 500.00],
            ['шістсот шістдесят шість', 666],
            ['шістсот шістдесят', 660],
            ['одна тисяча', 1000],
            ['одна тисяча один', 1001],
            ['одна тисяча десять', 1010],
            ['одна тисяча п\'ятнадцять', 1015],
            ['одна тисяча сто', 1100],
            ['одна тисяча сто одинадцять', 1111],
            ['чотири тисячі п\'ятсот тридцять вісім', 4538],
            ['п\'ять тисяч двадцять', 5020],
            ['одинадцять тисяч один', 11001],
            ['двадцять одна тисяча п\'ятсот дванадцять', 21512],
            ['дев\'яносто тисяч', 90000],
            ['дев\'яносто дві тисячі сто', 92100],
            ['двісті дванадцять тисяч сто дванадцять', 212112],
            ['сімсот двадцять тисяч вісімнадцять', 720018],
            ['один мільйон одна тисяча один', 1001001],
            ['три мільйони двісті сорок вісім тисяч п\'ятсот вісімнадцять', 3248518],
        ];
    }
}
