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

class LekarzController extends Controller
{
    /**
     * @Route("/hospital/panel_lekarza", name="panel_lekarza")
     */
    public function panelLekarza(SessionInterface $session)
    {
        $id = $session->get('pracownik_id');

        if(empty($id)) {
            return $this->redirectToRoute('login');
        }
        else {

        }

        return $this->render('lekarze/panel.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

    /**
     * @Route("/hospital/panel_lekarza/recepty", name="recepty")
     */
    public function receptyOnline(SessionInterface $session)
    {
        $id = $session->get('pracownik_id');

        if(empty($id)) {
            return $this->redirectToRoute('login');
        }
        else {

        }

        return $this->render('lekarze/recepta.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);

    }

    /**
     * @Route("/hospital/panel_lekarza/wizytacje", name="wizytacje")
     */
    public function wizytacjePacjentow(SessionInterface $session)
    {
        $id = $session->get('pracownik_id');

        if(empty($id)) {
            return $this->redirectToRoute('login');
        }
        else {

        }

        return $this->render('lekarze/wizytacje.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);

    }

    /**
     * @Route("/hospital/panel_lekarza/wnioski_urlopowe", name="wnioski")
     */
    public function wnioskiUrlopowe(SessionInterface $session)
    {
        $id = $session->get('pracownik_id');

        if(empty($id)) {
            return $this->redirectToRoute('login');
        }
        else {

        }

        return $this->render('lekarze/wnioski_urlopowe.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);

    }

    /**
     * @Route("/hospital/panel_lekarza/wyniki_badan", name="wyniki")
     */
    public function wyniki_badan(SessionInterface $session)
    {
        $id = $session->get('pracownik_id');

        if(empty($id)) {
            return $this->redirectToRoute('login');
        }
        else {

        }

        return $this->render('lekarze/wyniki_badan.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);

    }

    /**
     * @Route("/hospital/panel_lekarza/zwolnienia_lakarskie", name="zwolnienia_lakarskie")
     */
    public function zwolnieniaLekarskie(SessionInterface $session)
    {
        $id = $session->get('pracownik_id');

        if(empty($id)) {
            return $this->redirectToRoute('login');
        }
        else {

        }

        return $this->render('lekarze/zwolnienia.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);

    }

    /**
     * @Route("/hospital/panel_lekarza/godziny_pracy", name="godziny_pracy")
     */
    public function godzinyPracy(SessionInterface $session)
    {
        $id = $session->get('pracownik_id');

        if(empty($id)) {
            return $this->redirectToRoute('login');
        }
        else {

        }

        return $this->render('lekarze/godziny_pracy.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);

    }

}
