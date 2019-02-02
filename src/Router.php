<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2019-02-02
 * Time: 23:47
 */

namespace Inhere\Console;

use Inhere\Console\Face\CommandInterface;
use Inhere\Console\Face\ControllerInterface;
use Inhere\Console\Face\RouterInterface;

/**
 * Class Router
 * @package Inhere\Console
 */
class Router implements RouterInterface
{
    /**
     * @var array The independent commands
     * [
     *  'name' => [
     *      'handler' => MyCommand::class,
     *      'options' => []
     *  ]
     * ]
     */
    protected $commands = [];

    /**
     * @var array The group commands(controller)
     * [
     *  'name' => [
     *      'handler' => MyController::class,
     *      'options' => []
     *  ]
     * ]
     */
    protected $controllers = [];

    /**
     * Register a app group command(by controller)
     * @param string                     $name The controller name
     * @param string|ControllerInterface $class The controller class
     * @param null|array|string          $option
     * string: define the description message.
     * array:
     *  - aliases     The command aliases
     *  - description The description message
     * @return static
     * @throws \InvalidArgumentException
     */
    public function controller(string $name, $class = null, $option = null)
    {
        // TODO: Implement controller() method.
    }

    /**
     * Register a app independent console command
     * @param string|CommandInterface          $name
     * @param string|\Closure|CommandInterface $handler
     * @param null|array|string                $option
     * string: define the description message.
     * array:
     *  - aliases     The command aliases
     *  - description The description message
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function command(string $name, $handler = null, $option = null)
    {
        // TODO: Implement command() method.
    }

    /**
     * @param string $command
     * @return array
     * [
     *  status,
     *  type,
     *  route info(array)
     * ]
     */
    public function match(string $command): array
    {
        // TODO: Implement match() method.
    }
}
