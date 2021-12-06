# Boatrace Analytics Cherry Blossom Crawler

[![Build Status](https://github.com/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler/workflows/tests/badge.svg)](https://github.com/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler/actions?query=workflow%3Atests)
[![Coverage Status](https://coveralls.io/repos/github/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler/badge.svg?branch=master)](https://coveralls.io/github/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler?branch=master)
[![Latest Stable Version](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler/v/stable)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler/v/unstable)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler)
[![License](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler/license)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler)

## Installation
```
$ composer require boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-crawler
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Analytics\Cherry\Blossom\Crawler;

var_dump(Crawler::crawlProgram('2017-03-31')); // 2017年03月31日, 出走表
var_dump(Crawler::crawlProgram('2017-03-31', 24)); // 2017年03月31日, 大村, 出走表
var_dump(Crawler::crawlProgram('2017-03-31', 24, 1)); // 2017年03月31日, 大村, 1R, 出走表

var_dump(Crawler::crawlNotice('2017-03-31')); // 2017年03月31日, 直前情報
var_dump(Crawler::crawlNotice('2017-03-31', 24)); // 2017年03月31日, 大村, 直前情報
var_dump(Crawler::crawlNotice('2017-03-31', 24, 1)); // 2017年03月31日, 大村, 1R, 直前情報

var_dump(Crawler::crawlOdds('2017-03-31')); // 2017年03月31日, オッズ
var_dump(Crawler::crawlOdds('2017-03-31', 24)); // 2017年03月31日, 大村, オッズ
var_dump(Crawler::crawlOdds('2017-03-31', 24, 1)); // 2017年03月31日, 大村, 1R, オッズ

var_dump(Crawler::crawlResult('2017-03-31')); // 2017年03月31日, 結果
var_dump(Crawler::crawlResult('2017-03-31', 24)); // 2017年03月31日, 大村, 結果
var_dump(Crawler::crawlResult('2017-03-31', 24, 1)); // 2017年03月31日, 大村, 1R, 結果
```

## License
The Boatrace Analytics Cherry Blossom Crawler is open source software licensed under the [MIT license](LICENSE).
