<?php

namespace StillCode\ArPhpLaravel\Tests;

use Orchestra\Testbench\TestCase;
use StillCode\ArPhpLaravel\ArPhpLaravel;
use StillCode\ArPhpLaravel\ArPhpLaravelServiceProvider;

class arPhpTest extends TestCase
{
    protected function getPackageProviders()
    {
        return [ArPhpLaravelServiceProvider::class];
    }

    protected function overrideApplicationProviders()
    {
        return [
            'ArPhpLaravel' => 'StillCode\ArPhpLaravel',
        ];
    }

    /** @test */
    public function it_is_not_arabic_text()
    {
        $output = ArPhpLaravel::isArabic('Hello there');

        $this->assertSame(false, $output);
    }

    /** @test */
    public function it_is_arabic_text()
    {
        $output = ArPhpLaravel::isArabic('مرحبا');

        $this->assertSame(true, $output);
    }

    /** @test */
    public function int2str_convert_number_to_text()
    {
        $output = ArPhpLaravel::int2str(123);

        $this->assertSame('مئة وثلاثة وعشرون', $output);
    }

    /** @test */
    public function int2str_cant_convert_text_to_number()
    {
        $output = ArPhpLaravel::int2str('مئة و ثلاثة و عشرون');

        $this->assertSame('', $output);
    }

    /** @test */
    public function str2int_convert_text_to_number()
    {
        $output = ArPhpLaravel::str2int('مئة و ثلاثة و عشرون');

        $this->assertSame(123, $output);
    }

    /** @test */
    public function str2int_cant_convert_number_to_text()
    {
        $output = ArPhpLaravel::str2int(123);

        $this->assertSame(0, $output);
    }

    /** @test */
    public function check_is_not_female()
    {
        $output = ArPhpLaravel::isFemale('محمد');

        $this->assertFalse($output);
    }

    /** @test */
    public function check_is_female()
    {
        $output = ArPhpLaravel::isFemale('خديجة');

        $this->assertTrue($output);
    }

    /** @test */
    public function guess_gender_male()
    {
        $output = ArPhpLaravel::guessGender('محمد');

        $this->assertSame('Male', $output);
    }

    /** @test */
    public function guess_gender_female()
    {
        $output = ArPhpLaravel::guessGender('خديجة');

        $this->assertSame('Female', $output);
    }

    /** @test */
    public function it_convert_mony_to_text()
    {
        $output = ArPhpLaravel::money2str(123, 'SAR', 'ar');

        $this->assertSame('مئة وثلاثة وعشرون ريالا', $output);
    }

    /** @test */
    public function it_can_translate_text()
    {
        $output = ArPhpLaravel::translate('اهلا بالكل');

        $this->assertSame('Ahla Balkl', $output);
    }
}
