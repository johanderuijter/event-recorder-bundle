<?php

namespace spec\JDR\EventRecorderBundle\EventDispatcher;

use JDR\EventRecorderBundle\EventDispatcher\SymfonyEventDispatcher;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class SymfonyEventDispatcherSpec extends ObjectBehavior
{
    function let(EventDispatcherInterface $dispatcher)
    {
        $this->beConstructedWith($dispatcher);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SymfonyEventDispatcher::class);
    }
}
