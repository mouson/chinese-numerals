<?php
/**
 * Created by PhpStorm.
 * User: mouson
 * Date: 2016/5/4
 * Time: 上午2:29
 */

namespace Mouson\Helpers;

use PHPUnit_Framework_TestCase;

class ChineseNumericHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 測試數字轉中文數字工具，輸入錯誤時，直接回傳 false
     * @group Helper
     */
    public function test_Numeric2Chinese_input_fails_word_should_return_false()
    {
        /** Arrange */
        $sample   = 'pure_word';
        $expected = false;

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入0時，會回傳 零
     * @group Helper
     */
    public function test_Numeric2Chinese_input_0_should_return_零()
    {
        /** Arrange */
        $sample   = 0;
        $expected = '零';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入2，會回傳 二
     * @group Helper
     */
    public function test_Numeric2Chinese_input_2_should_return_二()
    {
        /** Arrange */
        $sample   = 2;
        $expected = '二';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入'2'，會回傳 二
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_2_should_return_二()
    {
        /** Arrange */
        $sample   = '2';
        $expected = '二';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入8，會回傳 八
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_8_should_return_八()
    {
        /** Arrange */
        $sample   = 8;
        $expected = '八';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入9，會回傳 九
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_9_should_return_九()
    {
        /** Arrange */
        $sample   = 9;
        $expected = '九';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入10，會回傳 十
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_10_should_return_十()
    {
        /** Arrange */
        $sample   = 10;
        $expected = '十';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入11，會回傳 十一
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_11_should_return_十一()
    {
        /** Arrange */
        $sample   = 11;
        $expected = '十一';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入20，會回傳 二十
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_20_should_return_二十()
    {
        /** Arrange */
        $sample   = 20;
        $expected = '二十';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入21，會回傳 二十一
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_21_should_return_二十一()
    {
        /** Arrange */
        $sample   = 21;
        $expected = '二十一';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入99，會回傳 九十九
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_99_should_return_九十九()
    {
        /** Arrange */
        $sample   = 99;
        $expected = '九十九';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入100，會回傳 一百
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_100_should_return_一百()
    {
        /** Arrange */
        $sample   = 100;
        $expected = '一百';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入101，會回傳 一百零一
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_101_should_return_一百零一()
    {
        /** Arrange */
        $sample   = 101;
        $expected = '一百零一';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入110，會回傳 一百一十
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_110_should_return_一百一十()
    {
        /** Arrange */
        $sample   = 110;
        $expected = '一百一十';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入111，會回傳 一百一十一
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_111_should_return_一百一十一()
    {
        /** Arrange */
        $sample   = 111;
        $expected = '一百一十一';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入141，會回傳 一百四十一
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_141_should_return_一百四十一()
    {
        /** Arrange */
        $sample   = 141;
        $expected = '一百四十一';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入191，會回傳 一百九十一
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_191_should_return_一百九十一()
    {
        /** Arrange */
        $sample   = 191;
        $expected = '一百九十一';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入532，會回傳 五百三十二
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_532_should_return_五百三十二()
    {
        /** Arrange */
        $sample   = 532;
        $expected = '五百三十二';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入978，會回傳 九百七十八
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_978_should_return_九百七十八()
    {
        /** Arrange */
        $sample   = 978;
        $expected = '九百七十八';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入1000，會回傳 一千
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_1000_should_return_一千()
    {
        /** Arrange */
        $sample   = 1000;
        $expected = '一千';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入1100，會回傳 一千一百
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_1100_should_return_一千一百()
    {
        /** Arrange */
        $sample   = 1100;
        $expected = '一千一百';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入1101，會回傳 一千一百零一
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_1101_should_return_一千一百零一()
    {
        /** Arrange */
        $sample   = 1101;
        $expected = '一千一百零一';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入1111，會回傳 一千一百一十一
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_1111_should_return_一千一百一十一()
    {
        /** Arrange */
        $sample   = 1111;
        $expected = '一千一百一十一';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入1543，會回傳 一千五百四十三
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_1543_should_return_一千五百四十三()
    {
        /** Arrange */
        $sample   = 1543;
        $expected = '一千五百四十三';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入5678，會回傳 五千六百七十八
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_5678_should_return_五千六百七十八()
    {
        /** Arrange */
        $sample   = 5678;
        $expected = '五千六百七十八';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入9876，會回傳 九千八百七十六
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_9876_should_return_九千八百七十六()
    {
        /** Arrange */
        $sample   = 9876;
        $expected = '九千八百七十六';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入10000，會回傳 一萬
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_10000_should_return_一萬()
    {
        /** Arrange */
        $sample   = 10000;
        $expected = '一萬';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入100000，會回傳 十萬
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_100000_should_return_十萬()
    {
        /** Arrange */
        $sample   = 100000;
        $expected = '十萬';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入159，設定大寫，會回傳 壹佰伍拾玖
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_159_should_return_壹佰伍拾玖()
    {
        /** Arrange */
        $sample   = 159;
        $expected = '壹佰伍拾玖';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample, true);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入6543，設定大寫，會回傳 陸仟伍佰肆拾參
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_6543_should_return_陸仟伍佰肆拾參()
    {
        /** Arrange */
        $sample   = 6543;
        $expected = '陸仟伍佰肆拾參';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample, true);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入98765，設定大寫，會回傳 玖萬捌仟柒佰陸拾伍
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_98765_should_return_玖萬捌仟柒佰陸拾伍()
    {
        /** Arrange */
        $sample   = 98765;
        $expected = '玖萬捌仟柒佰陸拾伍';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample, true);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入876543，設定大寫，會回傳 捌拾柒萬陸仟伍佰肆拾參
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_876543_should_return_捌拾柒萬陸仟伍佰肆拾參()
    {
        /** Arrange */
        $sample   = 876543;
        $expected = '捌拾柒萬陸仟伍佰肆拾參';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample, true);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入1234567，設定大寫，會回傳 壹佰貳拾參萬肆仟伍佰陸拾柒
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_1234567_should_return_壹佰貳拾參萬肆仟伍佰陸拾柒()
    {
        /** Arrange */
        $sample   = 1234567;
        $expected = '壹佰貳拾參萬肆仟伍佰陸拾柒';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample, true);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入87654321，設定大寫，會回傳 捌仟柒佰陸拾伍萬肆仟參佰貳拾壹
     * @group Helper
     */
    public function test_Numeric2Chinese_input_string_87654321_should_return_捌仟柒佰陸拾伍萬肆仟參佰貳拾壹()
    {
        /** Arrange */
        $sample   = 87654321;
        $expected = '捌仟柒佰陸拾伍萬肆仟參佰貳拾壹';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample, true);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字如2^32-1也要可以正常輸出
     * @group Helper
     */
    public function test_Numeric2Chinese_input_big_number_2147483648_should_return_二十一億四千七百四十八萬三千六百四十八()
    {
        /** Arrange */
        $sample   = "2147483648";
        $expected = '二十一億四千七百四十八萬三千六百四十八';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字如2^64-1也要可以正常輸出
     * @group Helper
     */
    public function test_Numeric2Chinese_input_big_number_9223372036854775808_should_return_九百二十二京三千三百七十二兆零三百六十八億五千四百七十七萬五千八百零八(
    )
    {
        /** Arrange */
        $sample   = "9223372036854775808";
        $expected = '九百二十二京三千三百七十二兆零三百六十八億五千四百七十七萬五千八百零八';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字如2^64-1也要可以正常輸出
     * @group Helper
     */
    public function test_Number2Chinese_input_big_number_9223372036854775000_should_return_九百二十二京三千三百七十二兆零三百六十八億五千四百七十七萬五千()
    {
        /** Arrange */
        $sample   = '9223372036854775000';
        $expected = '九百二十二京三千三百七十二兆零三百六十八億五千四百七十七萬五千';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字如2^64 要輸出
     * 八百四十四京六千七百四十四兆零七百三十七億零九百五十五萬一千六百一十六
     * @group Helper
     */
    public function test_Number2Chinese_input_big_number_8446744073709551616_should_return_八百四十四京六千七百四十四兆零七百三十七億零九百五十五萬一千六百一十六()
    {
        /** Arrange */
        $sample   = '8446744073709551616';
        $expected = '八百四十四京六千七百四十四兆零七百三十七億零九百五十五萬一千六百一十六';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字如2^100 要輸出
     * 八百四十四京六千七百四十四兆零七百三十七億零九百五十五萬一千六百一十六
     * @group Helper
     */
    public function test_Number2Chinese_input_big_number_1267650600228229401496703205376_should_return_一百二十六穰七千六百五十秭零六千零二垓二千八百二十二京九千四百零一兆四千九百六十七億零三百二十萬零五千三百七十六()
    {
        /** Arrange */
        $sample   = '1267650600228229401496703205376';
        $expected = '一百二十六穰七千六百五十秭零六千零二垓二千八百二十二京九千四百零一兆四千九百六十七億零三百二十萬零五千三百七十六';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字如10^68 要輸出
     * 一無量大數
     * @group Helper
     */
    public function test_Number2Chinese_input_big_number_10p68_should_return_無量大數()
    {
        /** Arrange */
        $sample   = '100000000000000000000000000000000000000000000000000000000000000000000';
        $expected = '一無量大數';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字如10^71 要輸出
     * 一千無量大數
     * @group Helper
     */
    public function test_Number2Chinese_input_big_number_10p71_should_return_千無量大數()
    {
        /** Arrange */
        $sample   = '100000000000000000000000000000000000000000000000000000000000000000000000';
        $expected = '一千無量大數';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字如10^71 要輸出
     * 一千無量大數
     * @group Helper
     */
    public function test_Number2Chinese_input_big_number_999910p71_should_return_九千九百九十九無量大數()
    {
        /** Arrange */
        $sample   = '999900000000000000000000000000000000000000000000000000000000000000000000';
        $expected = '九千九百九十九無量大數';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字如10^72 由於沒有單位無法輸出，
     * 要 return false
     * @group Helper
     */
    public function test_Number2Chinese_input_big_number_10p72_should_return_false()
    {
        /** Arrange */
        $sample   = '1000000000000000000000000000000000000000000000000000000000000000000000000';
        $expected = false;

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過integer可以接受的數字，要能回傳 false
     * @group Helper
     */
    public function test_Number2Chinese_input_big_num_over_PHP_MAX_INT_should_return_false()
    {
        /** Arrange */
        $sample   = 19223372036854775000; // 大過 2^64 次方
        $expected = false;

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入超過float可以接受的數字，要能回傳 false
     * @group Helper
     */
    public function test_Number2Chinese_input_big_float_num_over_PHP_MAX_INT_should_return_false()
    {
        /** Arrange */
        $sample   = 199223372036854775000.55; // 大過 2^64 次方
        $expected = false;

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入有小數點的數字，要能回傳 false
     * @group Helper
     */
    public function test_Number2Chinese_input_point_number_should_return_false()
    {
        /** Arrange */
        $sample   = 12.34;
        $expected = false;

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入有小數點的中文數字，要能回傳 false
     * @group Helper
     */
    public function test_Number2Chinese_input_string_point_number_should_return_false()
    {
        /** Arrange */
        $sample   = '12.34';
        $expected = false;

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入負的數字，要能回傳 false
     * @group Helper
     */
    public function test_Number2Chinese_input_negative_number_should_return_false()
    {
        /** Arrange */
        $sample   = -12;
        $expected = '負十二';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }

    /**
     * 測試數字轉中文數字工具，輸入有小數點的中文數字，要能回傳 false
     * @group Helper
     */
    public function test_Number2Chinese_input_string_negative_number_should_return_false()
    {
        /** Arrange */
        $sample   = '-34';
        $expected = '負三十四';

        /** Act */
        $target = ChineseNumericHelper::Numeric2Chinese($sample);

        /** Assert */
        $this->assertEquals($expected, $target);
    }
}
