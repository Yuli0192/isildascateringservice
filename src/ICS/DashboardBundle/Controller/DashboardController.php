<?php

namespace ICS\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{
    /**
     * @Route("/", name="ics_dashboard_index")
     * @Template("ICSDashboardBundle:Dashboard:index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
}
