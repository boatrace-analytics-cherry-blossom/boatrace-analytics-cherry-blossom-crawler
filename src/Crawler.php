<?php

namespace Boatrace\Analytics\Cherry\Blossom;

use DI\Container;
use DI\ContainerBuilder;

/**
 * @author shimomo
 */
class Crawler
{
    /**
     * @var \Boatrace\Analytics\Cherry\Blossom\MainCrawler
     */
    protected $crawler;

    /**
     * @var \Boatrace\Analytics\Cherry\Blossom\Crawler
     */
    protected static $instance;

    /**
     * @var \DI\Container
     */
    protected static $container;

    /**
     * @param  \Boatrace\Analytics\Cherry\Blossom\MainCrawler  $crawler
     * @return void
     */
    public function __construct(MainCrawler $crawler)
    {
        $this->crawler = $crawler;
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->crawler, $name], $arguments);
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return call_user_func_array([self::getInstance(), $name], $arguments);
    }

    /**
     * @return \Boatrace\Analytics\Cherry\Blossom\Crawler
     */
    public static function getInstance(): Crawler
    {
        return self::$instance ?? self::$instance = (
            self::$container ?? self::$container = self::getContainer()
        )->get('Crawler');
    }

    /**
     * @return \DI\Container
     */
    public static function getContainer(): Container
    {
        $builder = new ContainerBuilder;

        $builder->addDefinitions(__DIR__ . '/../config/definitions.php');

        return $builder->build();
    }
}
