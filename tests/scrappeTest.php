<?php

use Wmouc\IimTd3\Scrappe;
use PHPUnit\Framework\TestCase;

class ScrappeTest extends TestCase 
{
    public function testGetValorantAgents()
    {
        $scrappe = new Scrap();

        $this->assertIsArray($scrappe->getValorantAgents());
        
    }
}