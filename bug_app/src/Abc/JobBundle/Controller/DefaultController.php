<?php
namespace App\JobBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\JobBundle\Helper\ClpProvider;

class DefaultController extends AbstractController
{
    public function __construct(ClpProvider $clpProvider)
    {
        $this->_clpProvider = $clpProvider;
    }
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        echo __FILE__.'<pre>❗❗❗'; print_r($this->_clpProvider); exit;
    }

}
