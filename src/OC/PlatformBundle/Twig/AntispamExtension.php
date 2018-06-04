<?php
/**
 * Created by PhpStorm.
 * User: Anas
 * Date: 04/06/2018
 * Time: 12:25
 */

namespace OC\PlatformBundle\Twig;

use OC\PlatformBundle\Antispam\OCAntispam;

class AntispamExtension extends \Twig_Extension
{
    /**
     * @var OCAntispam
     */
    private $ocAntispam;

    public function __construct(OCAntispam $ocAntispam)
    {
        $this->ocAntispam = $ocAntispam;

    }

    public function checkIfArgumentIsSpam($text)
    {
        return $this->ocAntispam->isSpam($text);
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('checkIfSpam', array($this,'checkIfArguementIsSpam'))
        );
    }

    public function getName()
    {
        return 'OCAntispam';
    }

}