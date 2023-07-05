<?php

use Wmouc\IimTd3\Scrap;
use PHPUnit\Framework\TestCase;

class ScrapTest extends TestCase 
{
    public function testGetValorantAgents()
    {
        $scrappe = new Scrap();

        $this->assertIsArray($scrappe->getValorantAgents());
        
    }
}