<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class HomeController extends Controller {
    /**
     * @Route("/", name="homepage")
     * @Route("/", name="user_index", methods="GET")
     */
    public function index(AuthorizationCheckerInterface $authChecker)
    {
        //Path handling for authenticated users
        if ($authChecker->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('reporting_index'));
        } else if ($authChecker->isGranted('ROLE_PILOTE')) {
            return $this->redirect($this->generateUrl('reporting_index'));
        } else if ($authChecker->isGranted('ROLE_CLIENTFINAL')) {
            return $this->redirect($this->generateUrl('intervention_index'));
        }

    }
}