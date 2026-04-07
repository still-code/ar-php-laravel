<?php

namespace StillCode\ArPhpLaravel;

use ArPHP\I18N\Arabic;

class ArPhpLaravel
{
    private static function Arabic(): Arabic
    {
        return new Arabic;
    }

    public static function isArabic(string $text): bool
    {
        return self::Arabic()->isArabic($text);
    }

    public static function int2str(mixed $integer, int $numberFeminine = 1, int $numberFormat = 1, ?int $setNumberOrder = null): string
    {
        self::Arabic()->setNumberFeminine($numberFeminine);
        self::Arabic()->setNumberFormat($numberFormat);
        if ($setNumberOrder !== null) {
            self::Arabic()->setNumberOrder($setNumberOrder);
        }

        return self::Arabic()->int2str($integer);
    }

    public static function str2int(mixed $number): int
    {
        return self::Arabic()->str2int($number);
    }

    public static function arSentiment(string $text): string
    {
        $result = self::Arabic()->arSentiment($text);
        $score = (float) reset($result);

        return ($score > 0)
            ? __('arPhpLaravel::arPhpLaravel.positive')
            : __('arPhpLaravel::arPhpLaravel.negative');
    }

    public static function en2ar(string $text): string
    {
        return self::Arabic()->en2ar($text);
    }

    public static function ar2en(string $text): string
    {
        return self::Arabic()->ar2en($text);
    }

    public static function isFemale(string $text): bool
    {
        return self::Arabic()->isFemale($text);
    }

    public static function guessGender(string $text): string
    {
        return (self::Arabic()->isFemale($text) === true)
            ? __('arPhpLaravel::arPhpLaravel.female')
            : __('arPhpLaravel::arPhpLaravel.male');
    }

    public static function strtotime(string $text, int $time, string $format = 'l dS F Y'): string
    {
        $int = self::Arabic()->strtotime($text, $time);

        return date($format, $int);
    }

    public static function standard(string $text): string
    {
        return self::Arabic()->standard($text);
    }

    public static function arSummary(string $text, string $keywords, int $int, int $mode, int $output): string
    {
        return self::Arabic()->arSummary($text, $keywords, $int, $mode, $output);
    }

    public static function money2str(mixed $number, string $iso = 'SAR', string $lang = 'ar'): string
    {
        return self::Arabic()->money2str($number, $iso, $lang);
    }

    public static function int2indic(mixed $number): string
    {
        return self::Arabic()->int2indic($number);
    }

    public static function utf8Glyphs(string $text): string
    {
        return self::Arabic()->utf8Glyphs($text);
    }

    public static function plural(string $singular, int $count, ?string $plural2 = null, ?string $plural3 = null, ?string $plural4 = null): string
    {
        $text = self::Arabic()->arPlural($singular, $count, $plural2, $plural3, $plural4);

        return str_replace('%d', (string) $count, $text);
    }

    public static function translate(string $text): string
    {
        return self::Arabic()->ar2en($text);
    }
}
