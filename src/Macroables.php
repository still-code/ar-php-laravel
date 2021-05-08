<?php

namespace AtmCode\ArPhpLaravel;

class Macroables
{
    public static function setSearchWheres($query, $search, $field, $mode = 'OR')
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setQueryStrFields($field);
        $setMode = ($mode === 'AND') ? 1 : 0;
        $Arabic->setQueryMode($setMode);
        $strCondition = $Arabic->arQueryWhereCondition($search);

        return $query->whereRaw($strCondition);
    }

    public static function setSearchOrder($query, $search, $field)
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setQueryStrFields($field);
        $strCondition = $Arabic->arQueryOrderBy($search);

        return $query->orderByRaw($strCondition);
    }
}
