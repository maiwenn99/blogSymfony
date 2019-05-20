<?php
/**
 * Created by PhpStorm.
 * User: maiwenn
 * Date: 20/05/2019
 * Time: 10:13
 */

namespace App\Controller;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DefaultController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index()
    {
        return $this->render('default.html.twig');
    }
}

