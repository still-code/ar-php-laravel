# laravel package for the Ar-PHP Project
[![Latest Version on Packagist](https://img.shields.io/packagist/v/atm-code/ar-php-laravel)](https://packagist.org/packages/atm-code/ar-php-laravel)
[![Build Status](https://img.shields.io/travis/com/atm-code/ar-php-laravel)](https://travis-ci.com/atm-code/ar-php-laravel)
[![StyleCI](https://github.styleci.io/repos/354853609/shield?branch=main)](https://github.styleci.io/repos/354853609?branch=main)
[![Total Downloads](https://img.shields.io/packagist/dt/atm-code/ar-php-laravel)](https://packagist.org/packages/atm-code/ar-php-laravel)
[![Github Stars](https://img.shields.io/github/stars/atm-code/ar-php-laravel)](https://github.com/atm-code/ar-php-laravel)

this is just a wrapper to use with laravel for the Ar-PHP Library, for more details checkout [khaled-alshamaa: ar-php](https://github.com/khaled-alshamaa/ar-php) 
## Installation
You can install the package via composer:
```bash
composer require atm-code/ar-php-laravel
```

### Available functions
#### Spell Numbers in the Arabic Idiom
``` php
dump(ArPhpLaravel::int2str(123)); // مئة و ثلاثة و عشرون
dump(ArPhpLaravel::str2int('مئة و ثلاثة و عشرون')); // 123
```

#### English-Arabic Transliteration
``` php
dump(ArPhpLaravel::en2ar('google')); // غوغل
dump(ArPhpLaravel::ar2en('خالِد الشَمعَة')); // Khalid Ash-Sham'ah
```

#### Arabic Gender Guesser
Check the Gender
``` php
dump(ArPhpLaravel::isFemale('محمد')); // false
```
get the gender as string
``` php
dump(ArPhpLaravel::guessGender('محمد')); // Male
```

#### Parse any Arabic textual datetime description into timestamp
``` php
dump(ArPhpLaravel::strtotime('الخميس القادم', time(), 'l dS F Y'))); // Thursday 13th May 2021
```

#### Arabic Sentiment Analysis
``` php
dump(ArPhpLaravel::arSentiment(TEXT));
```

#### Arabic Text Standardize
``` php
dump(ArPhpLaravel::standard(TEXT));
```

#### Arabic Auto Summarize
``` php
dump(ArPhpLaravel::arSummary(TEXT));
```

#### Convert Money to string
``` php
dump(ArPhpLaravel::money2str(123, 'SAR', 'ar')); // مئة و ثلاثة و عشرون ريالا
dump(ArPhpLaravel::money2str(123, 'SAR', 'en')); // 123 Riyal
dump(ArPhpLaravel::money2str(123, 'EGP', 'ar')); // مئة و ثلاثة و عشرون جنيها
```

#### Spell Numbers in the Arabic Idiom
``` php
dump(ArPhpLaravel::int2indic(123)); // ١٢٣
```

#### Arabic Glyphs to Render Arabic Text
``` php
dump(ArPhpLaravel::utf8Glyphs(1229));
```


### Search with Eloquent and query Builder
Using search for arabic letters with Eloquent Builder
```php
Model::searchAr('content','فلسطين')->get();
```


you can use the same with Query Builder:
```php
DB::table('table_name')->searchAr('content','فلسطين')->get();
```


you can set the search mode `OR` (default) or `AND`
```php
DB::table('table_name')->searchAr('content','فلسطين','OR')->get();
```


and it will find result for any of the words:
>فلسطينيون فلسطيني فلسطينية فلسطينيتين فلسطينيين فلسطينيان فلسطينيات فلسطينيوا

you can also sort the results by using:
```php
DB::table('table_name')->orderAr('content','فلسطين')->get();
```

### Testing
``` bash
composer test
```

### Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits
- [Khaled Alshamaa](https://github.com/khaled-alshamaa)
- [All Contributors](../../contributors)

## Todo
- write more tests
- add more functions from the main package
- add helpers for the Facade

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
