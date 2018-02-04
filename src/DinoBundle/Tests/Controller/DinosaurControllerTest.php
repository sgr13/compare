<?php

namespace DinoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DinosaurControllerTest extends WebTestCase
{
    public function testAdddino()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addDino');
    }

    public function testEditdino()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editDino');
    }

    public function testDeletedino()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteDino');
    }

    public function testShowall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAll');
    }

    public function testChangephoto()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/changePhoto');
    }

}
