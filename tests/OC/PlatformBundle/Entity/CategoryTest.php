<?php
/**
 * Created by PhpStorm.
 * User: Anas
 * Date: 07/06/2018
 * Time: 00:49
 */

namespace Tests\OC\PlatformBundle\Entity;

use OC\PlatformBundle\Entity\Category;

use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    /**
     * @test
     */
    public function category()
  {

      $category = new Category();
      $result = $category->setName("Test");

      $this->assertEquals('Test', $category->getName());
  }
}