<?php

namespace Films\Tests\Action;

class JohnWick2Test extends \PHPUnit\Framework\TestCase
{

    public function testClassExistence()
    {
        $this->assertInstanceOf(\Films\Action\JohnWick2::class, new \Films\Action\JohnWick2());
    }
}