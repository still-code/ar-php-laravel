<?php

namespace AtmCode\ArPhpLaravel\Tests;

use AtmCode\ArPhpLaravel\ArPhpLaravel;
use AtmCode\ArPhpLaravel\ArPhpLaravelServiceProvider;
use Orchestra\Testbench\TestCase;

class arPhpTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ArPhpLaravelServiceProvider::class];
    }

    protected function overrideApplicationProviders($app)
    {
        return [
            'ArPhpLaravel' => 'AtmCode\ArPhpLaravel',
        ];
    }

    /** @test */
    public function int2str_convert_number_to_text()
    {
        $output = ArPhpLaravel::int2str(123);

        $this->assertSame('مئة و ثلاثة و عشرون', $output);
    }

    /** @test */
    public function int2str_cant_convert_text_to_number()
    {
        $output = ArPhpLaravel::int2str('مئة و ثلاثة و عشرون');

        $this->assertSame('صفر', $output);
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

        $this->assertSame('مئة و ثلاثة و عشرون ريالا', $output);
    }
}
