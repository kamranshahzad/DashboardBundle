<?php

namespace Kamran\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Dashboard controller.
 *
 * @Route("/technology")
 */

class TechnologyController extends Controller{


    /**
     * @Route("/", name="technology_index")
     * @Template()
     */
    public function indexAction()
    {

    }


    /**
     * @Route("/php", name="technology_php")
     * @Template()
     */
    public function phpAction()
    {
        return array();
    }

    /**
     * @Route("/php/{name}", name="technology_php_types")
     * @Template()
    */
    public function phpTechnologyAction()
    {
        return array();
    }




}