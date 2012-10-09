<?php

namespace spec\Gaufrette\Adapter;

use PHPSpec2\ObjectBehavior;

class MogileFS extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('http://domain.com', array('localhost'));
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('Gaufrette\Adapter\MogileFS');
        $this->shouldHaveType('Gaufrette\Adapter');
    }
}
