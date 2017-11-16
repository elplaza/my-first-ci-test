<?php

namespace Films\Tests\Action;

class JohnWick3Test extends \PHPUnit\Framework\TestCase
{

    public function testClassExistence()
    {
        $this->assertInstanceOf(\Films\Action\JohnWick3::class, new \Films\Action\JohnWick3());
    }
}
