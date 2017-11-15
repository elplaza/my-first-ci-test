<?php

namespace Films\Tests\Action;

class JohnWickTest extends \PHPUnit\Framework\TestCase
{

    public function testClassExistence()
    {
        $this->assertInstanceOf(\Films\Action\JohnWick::class, new \Films\Action\JohnWick());
    }
}