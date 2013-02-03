<?php

namespace WuCore\ResourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use \lessc as Less;

class CSSController extends Controller {

    /**
     * @Route("/css/less-{name}.css")
     * @Template()
     */
    public function LessCompileAction($name) {
        $file = realpath(__DIR__.'/../Resources/private/less/'.$name.'.less');
        $less = new Less();
        if($file){
        $content = $less->compileFile($file);
        } else {
            throw new \Exception('file '.$name.'.less was not found.');
        }
        $header['Content-type'] = 'text/css';
        return new Response($content, 200, $header);
    }

}
