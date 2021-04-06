<?php

namespace AtmCode\ArPhpLaravel;

trait SearchAr
{
    public function scopeSearchAr($query, $field, $search)
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setQueryStrFields($field);
        $Arabic->setQueryMode(1);
        $strCondition = $Arabic->arQueryWhereCondition($search);

        $query->whereRaw($strCondition);

        return $query;
    }
}
