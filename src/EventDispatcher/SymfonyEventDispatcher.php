<?php declare(strict_types = 1);

namespace JDR\EventRecorderBundle\EventDispatcher;

use JDR\EventRecorder\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Event Dispatcher using the symfony event dispatcher component
 */
class SymfonyEventDispatcher implements EventDispatcher
{
    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * Dispatch an event
     *
     * @param object $event
     */
    public function dispatch($event)
    {
        $listeners = $this->eventDispatcher->getListeners(get_class($event));

        foreach ($listeners as $listener) {
            call_user_func($listener, $event, $this);
        }
    }
}
