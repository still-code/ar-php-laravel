<?php

namespace AtmCode\ArPhpLaravel;

class ArPhpLaravel
{
    public static function int2str($integer, $numberFeminine = 1, $numberFormat = 1, $setNumberOrder = null)
    {
        $Arabic = new \ArPHP\I18N\Arabic();

        $Arabic->setNumberFeminine($numberFeminine);
        $Arabic->setNumberFormat($numberFormat);
        if ($setNumberOrder !== null) {
            $Arabic->setNumberOrder($setNumberOrder);
        }

        return $Arabic->int2str($integer);
    }

    public static function str2int($number)
    {
        $Arabic = new \ArPHP\I18N\Arabic();

        return $Arabic->str2int($number);
    }

    public static function arSentiment($text)
    {
        $Arabic = new \ArPHP\I18N\Arabic();

        return ($Arabic->arSentiment($text) > 0)
            ? __('arPhpLaravel::arPhpLaravel.positive')
            : __('arPhpLaravel::arPhpLaravel.negative');
    }

    public static function en2ar($text)
    {
        return ( new \ArPHP\I18N\Arabic() )->en2ar($text);
    }

    public static function ar2en($text)
    {
        return ( new \ArPHP\I18N\Arabic() )->ar2en($text);
    }

    public static function isFemale($text)
    {
        return ( new \ArPHP\I18N\Arabic() )->isFemale($text);
    }

    public static function guessGender($text)
    {
        $Arabic = new \ArPHP\I18N\Arabic();

        return ($Arabic->isFemale($text) === true)
            ? __('arPhpLaravel::arPhpLaravel.female')
            : __('arPhpLaravel::arPhpLaravel.male');
    }

    public static function strtotime($text, $time, $format = 'l dS F Y')
    {
        $Arabic = new \ArPHP\I18N\Arabic();

        $int = $Arabic->strtotime($text, $time);

        return date($format, $int);
    }

    public static function standard($text)
    {
        return ( new \ArPHP\I18N\Arabic() )->standard($text);
    }

    public static function arSummary($text, $keywords, $int, $mode, $output, $style = null)
    {
        return ( new \ArPHP\I18N\Arabic() )->arSummary($text, $keywords, $int, $mode, $output, $style);
    }

    public static function money2str($number, $iso = 'SAR', $lang = 'ar')
    {
        return ( new \ArPHP\I18N\Arabic() )->money2str($number, $iso, $lang);
    }

    public static function int2indic($number)
    {
        return ( new \ArPHP\I18N\Arabic() )->int2indic($number);
    }

    public static function utf8Glyphs($text)
    {
        return ( new \ArPHP\I18N\Arabic() )->utf8Glyphs($text);
    }

    public static function plural($singular, $count, $plural2 = null, $plural3 = null, $plural4 = null)
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $text = $Arabic->arPlural($singular, $count, $plural2, $plural3, $plural4);

        return str_replace('%d', $count, $text);
    }

    public static function translate($text)
    {
        return ( new \ArPHP\I18N\Arabic() )->ar2en($text);
    }
}
