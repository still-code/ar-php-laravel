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
}
