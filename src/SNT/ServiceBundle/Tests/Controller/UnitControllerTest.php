<?php

namespace SNT\ServiceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UnitControllerTest extends WebTestCase
{
    public function testListemployers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listEmployers');
    }

    public function testListservices()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListServices');
    }

    public function testAddemployer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AddEmployer');
    }

    public function testAddservice()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AddService');
    }

    public function testUpdateemployers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/UpdateEmployers');
    }

    public function testUpdateservice()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/UpdateService');
    }

    public function testFindemployer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/FindEmployer');
    }

    public function testFindservice()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/FindService');
    }

    public function testDeleteemployer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DeleteEmployer');
    }

    public function testDeleteservice()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DeleteService');
    }

}
