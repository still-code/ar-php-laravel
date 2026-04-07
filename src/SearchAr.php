<?php

namespace StillCode\ArPhpLaravel;

use ArPHP\I18N\Arabic;

trait SearchAr
{
    public function scopeSearchAr(mixed $query, string $field, string $search): mixed
    {
        $Arabic = new Arabic;
        $Arabic->setQueryStrFields($field);
        $Arabic->setQueryMode(1);
        $strCondition = $Arabic->arQueryWhereCondition($search);

        $query->whereRaw($strCondition);

        return $query;
    }
}
