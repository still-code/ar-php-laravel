<?php

namespace StillCode\ArPhpLaravel;

class ArPhpLaravel
{
    private static function Arabic()
    {
        return new \ArPHP\I18N\Arabic();
    }

    public static function isArabic($text)
    {
        return self::Arabic()->isArabic($text);
    }

    public static function int2str($integer, $numberFeminine = 1, $numberFormat = 1, $setNumberOrder = null)
    {
        self::Arabic()->setNumberFeminine($numberFeminine);
        self::Arabic()->setNumberFormat($numberFormat);
        if ($setNumberOrder !== null) {
            self::Arabic()->setNumberOrder($setNumberOrder);
        }

        return self::Arabic()->int2str($integer);
    }

    public static function str2int($number)
    {
        return self::Arabic()->str2int($number);
    }

    public static function arSentiment($text)
    {
        return (self::Arabic()->arSentiment($text) > 0)
            ? __('arPhpLaravel::arPhpLaravel.positive')
            : __('arPhpLaravel::arPhpLaravel.negative');
    }

    public static function en2ar($text)
    {
        return self::Arabic()->en2ar($text);
    }

    public static function ar2en($text)
    {
        return self::Arabic()->ar2en($text);
    }

    public static function isFemale($text)
    {
        return self::Arabic()->isFemale($text);
    }

    public static function guessGender($text)
    {
        return (self::Arabic()->isFemale($text) === true)
            ? __('arPhpLaravel::arPhpLaravel.female')
            : __('arPhpLaravel::arPhpLaravel.male');
    }

    public static function strtotime($text, $time, $format = 'l dS F Y')
    {
        $int = self::Arabic()->strtotime($text, $time);

        return date($format, $int);
    }

    public static function standard($text)
    {
        return self::Arabic()->standard($text);
    }

    public static function arSummary($text, $keywords, $int, $mode, $output, $style = null)
    {
        return self::Arabic()->arSummary($text, $keywords, $int, $mode, $output, $style);
    }

    public static function money2str($number, $iso = 'SAR', $lang = 'ar')
    {
        return self::Arabic()->money2str($number, $iso, $lang);
    }

    public static function int2indic($number)
    {
        return self::Arabic()->int2indic($number);
    }

    public static function utf8Glyphs($text)
    {
        return self::Arabic()->utf8Glyphs($text);
    }

    public static function plural($singular, $count, $plural2 = null, $plural3 = null, $plural4 = null)
    {
        $text = self::Arabic()->arPlural($singular, $count, $plural2, $plural3, $plural4);

        return str_replace('%d', $count, $text);
    }

    public static function translate($text)
    {
        return self::Arabic()->ar2en($text);
    }
}
