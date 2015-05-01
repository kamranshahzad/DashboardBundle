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
 * @Route("/")
 */

class IndexController extends Controller
{


    /**
     * @Route("/", name="index_default")
     * @Template()
    */
    public function indexAction()
    {

        /*
        $user = $this->container->get('security.context')->getToken()->getUser();

        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        */

        $bridge = $this->get('pi.bridge_service_collector');
        $bridge->playGround();


       // $builder = new MenuBuilder();

        //$builder->addMenuItem('technology_stack','php');




        /*
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException();
        }
        $subscribers = $this->get('kamran_dashboard.dashboard_builder');
        */

       // echo $subscribers->getApplicationTitle();

        /*foreach($subscribers as $key => $val ){
            echo $val->pull();
        }*/

        return array();
    }

    /**
     * @Route("/home", name="home_index")
     * @Template()
     */
    public function homeAction()
    {
        $bridge = $this->get('pi.bridge_service_collector');
        $bridge->playGround();

        return array();
    }





}