<?php

return [
    'Crawler' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Crawler')->constructor(
        \DI\get('MainCrawler')
    ),
    'MainCrawler' => function ($container) {
        return $container->get('\Boatrace\Analytics\Cherry\Blossom\MainCrawler');
    },
    'NoticeCrawler' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Crawlers\NoticeCrawler')->constructor(
        \DI\get('Goutte')
    ),
    'OddsCrawler' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Crawlers\OddsCrawler')->constructor(
        \DI\get('Goutte')
    ),
    'ProgramCrawler' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Crawlers\ProgramCrawler')->constructor(
        \DI\get('Goutte')
    ),
    'ResultCrawler' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Crawlers\ResultCrawler')->constructor(
        \DI\get('Goutte')
    ),
    'StadiumCrawler' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Crawlers\StadiumCrawler')->constructor(
        \DI\get('Goutte')
    ),
    'Goutte' => function ($container) {
        return $container->get('\Goutte\Client');
    },
];
