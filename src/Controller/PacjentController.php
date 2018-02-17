<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Classes\Hash;
use App\Classes\Checked;
use App\Classes\Instances;

class PacjentController extends Controller
{
    /**
     * @Route("/hospital/panel_pacjenta/", name="panel_pacjenta")
     */
    public function panelPacjenta(SessionInterface $session)
    {
        $id = $session->get('pacjent_id');
        if(empty($id)) {
            return $this->redirectToRoute('login');
        }
        else {

        }

        return $this->render('@Maker/demoPage.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }
}
