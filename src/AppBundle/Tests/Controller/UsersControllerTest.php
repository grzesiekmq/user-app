<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UsersControllerTest extends WebTestCase
{
    public function testListusers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/users');
    }

}
