<?php

namespace AtmCode\ArPhpLaravel;

class ArPhpLaravel
{
    public function hi()
    {
        return 'back';
    }

    public static function int2str($integer, $numberFeminine = 1, $numberFormat = 1)
    {
        $Arabic = new \ArPHP\I18N\Arabic();

        $Arabic->setNumberFeminine($numberFeminine);
        $Arabic->setNumberFormat($numberFormat);

        return $Arabic->int2str($integer);
    }

    public static function arSentiment($text)
    {
        $Arabic = new \ArPHP\I18N\Arabic();

        return ( $Arabic->arSentiment($text) > 0 )
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

        return ( $Arabic->isFemale($text) === true )
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
}
