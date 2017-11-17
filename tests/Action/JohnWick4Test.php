<?php

namespace Films\Tests\Action;

class JohnWick4Test extends \PHPUnit\Framework\TestCase
{

    public function testClassExistence()
    {
        $this->assertInstanceOf(\Films\Action\JohnWick4::class, new \Films\Action\JohnWick4());
    }
}
