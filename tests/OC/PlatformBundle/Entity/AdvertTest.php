<?php
/**
 * Created by PhpStorm.
 * User: Anas
 * Date: 07/06/2018
 * Time: 00:12
 */

namespace Tests\OC\PlatformBundle\Entity;

use OC\PlatformBundle\Entity\Advert;
use PHPUnit\Framework\TestCase;

class AdvertTest extends TestCase
{
    /**
     * @test
     */
    public function advert()
    {


        $advert = new Advert();
        $result = $advert->setTitle("Bonjour test unitaire");
            $advert->setDate(new \DateTime());
           $advert->setAuthor("John");
            $advert->setContent('Ceci un test unitaire pour entité advert pour assure le bon fonctionnement');
            $advert->setPublished(true);
        $this->assertEquals('Bonjour test unitaire', $advert->getTitle());
        $this->assertTrue($advert->getPublished());
        $this->assertEquals('John', $advert->getAuthor());
    }

}