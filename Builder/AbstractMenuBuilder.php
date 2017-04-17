<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 16/04/17
 * Time: 17:11
 */

namespace Miky\Bundle\MenuBundle\Builder;


use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class AbstractMenuBuilder
{
    /**
     * @var FactoryInterface
     */
    protected $factory;

    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @param FactoryInterface         $factory
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(
        FactoryInterface $factory,
        EventDispatcherInterface $eventDispatcher
    ) {
        $this->factory = $factory;
        $this->eventDispatcher = $eventDispatcher;
    }
}