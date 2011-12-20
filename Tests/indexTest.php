<?php
/*
 * This file is part of the Best Framework Ever For Benchmark.
 *
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 */

/**
 * UnitTest for index.html.
 *
 * @author Besset Francis <francis.besset@gmail.com>
 */
class indexTest extends \PHPUnit_Framework_TestCase
{
    public function testHello()
    {
        $this->assertEquals(0, strpos($this->loadIndexFile(), 'Hello'));
    }

    public function testWorld()
    {
        $this->assertEquals(6, strpos($this->loadIndexFile(), 'world'));
    }

    private function loadIndexFile()
    {
        return file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'index.html');
    }
}

