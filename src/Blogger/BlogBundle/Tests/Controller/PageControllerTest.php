<?php

namespace Blogger\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * PageControllerTest
 */
class PageControllerTest extends WebTestCase
{
    /**
     * test index page.
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('title:contains("symblog")')->count() > 0);
    }
}
