<?php

namespace WuCore\ResourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use WuCore\ResourcesBundle\Services\timthumb as Thumb;

class ImagesController extends Controller {

    /**
     * @Route("/images/{zc}/{width}x{height}/{name}")
     * @Template()
     */
    public function imageCropAction($width, $height, $name, $zc) {
        $picture = $this->get('doctrine')->getEntityManager()->getRepository('WuCoreResourcesBundle:Picture')->findOneByPath($name);
        $process = true;
        if ($picture && count($picture->getCredentials())) {
            $process = false;
            if ($user = $this->getUser()) {
                foreach ($picture->getCredentials() as $role) {
                    $process = $process || $user->hasRole($role);
                }
            }
        }
        if ($process) {
            $cropper = new Thumb(array('w' => $width, 'h' => $height, 'src' => $picture ? $picture->getAbsolutePath() : 'null', 'zc' => $zc, 'q' => 100));
        } else {
            $cropper = new Thumb(array('w' => $width, 'h' => $height, 'src' => null, 'zc' => $zc, 'q' => 100));
        }
        return $cropper->start();
        //$cropper->
        return new Response('', 200);
        return array('name' => $name);
    }

}
