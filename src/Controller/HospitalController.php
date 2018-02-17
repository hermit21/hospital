<?php

namespace App\Controller;

use App\Entity\Pacjenci;
use App\Entity\Pracownicy;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Classes\Hash;
use App\Classes\Checked;
use App\Classes\Instances;

class HospitalController extends Controller
{
    /**
     * @Route("/hospital", name="hospital")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('hospital/index.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

    /**
     * @Route("/hospital/login", name="login")
     */
    public function login(Request $request, SessionInterface $session)
    {
        $hash_obj = new Hash();
        $em = $this->getDoctrine();


        if($request->request->get('login_pacjent')) {
            $obj_pacjent = $hash_obj->sanetizeVariables($request->request);

            $pacjent = $em->getRepository('AppBundle:Pacjenci')->findOneBy(
                array('username'=>$obj_pacjent->username)
            );

            if(!empty($pacjent) && ($pacjent->getPassword() == $hash_obj->makeHash($obj_pacjent->password, $pacjent->getSalt()))) {
                $checked = new Checked();
                if($checked->checkAccountStatus($pacjent->getAccessToken())) {

                    $session->set('pacjent_id', $pacjent->getUsername());

                    return $this->redirectToRoute('panel_pacjenta');

                } else {
                    //konto jest nie aktywne

                    return $this->redirectToRoute('activate_token');
                }

            } else {
                //pacjent nie isnieje
            }

        }
        else if($request->request->get('login_pracownik')) {
            $obj_pracownik = $hash_obj->sanetizeVariables($request->request);

        }

        // replace this line with your own code!
        return $this->render('hospital/login.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

    /**
     * @Route("/hospital/register_pacjent", name="register_pacjent")
     */
    public function registerPacjent(Request $request)
    {
        $hash_obj = new Hash();

        if($request->request->get('register_pacjent')) {
            $obj_pacjent = $hash_obj->sanetizeVariables($request->request);
            $em = $this->getDoctrine();

            $check_pacjent = $em->getRepository('AppBundle:Pacjenci')->findBy(
                array('username' => $obj_pacjent->username)
            );
            if(empty($check_pacjent)) {
                //stwórz usera
                $obj_pacjent->salt = $hash_obj->generateToken(30);
                $obj_pacjent->access_token = $hash_obj->generateToken(15);
                $obj_pacjent->password_token =  $hash_obj->generateToken(15);

                $obj_instance = new Instances();
                $pacjent = $obj_instance->setPacjent($obj_pacjent);
                $em_pacjent = $em->getManager();

                $em_pacjent->persist($pacjent);
                $em_pacjent->flush();


            } else {
                //user istnieje
            }
        }

        return $this->render('hospital/register_pacjent.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

    /**
     * @Route("/hospital/register_pracownik", name="register_pracownik")
     */
    public function registerPracownik(Request $request)
    {
        $obj_hash = new Hash();

        if($request->request->get('register_pracownik')) {
            $pracownik_data = $obj_hash->sanetizeVariables($request->request);

            $em = $this->getDoctrine();
            $check_user = $em->getRepository('AppBundle:Pracownicy')->findBy(
                array('username' => $pracownik_data->username)
            );

            if(empty($check_user)) {
                //stworz usera
                $pracownik_data->salt = $obj_hash->generateToken(30);
                $pracownik_data->access_token = $obj_hash->generateToken(15);
                $pracownik_data->password_token = $obj_hash->generateToken(15);

                $obj_instance = new Instances();
                $pracownik = $obj_instance->setPracownik($pracownik_data);

                $em_pracownik = $em->getManager();
                $em_pracownik->persist($pracownik);
                $em_pracownik->flush();
            }
            else {
                //user juz istnieje
            }
        }

        return $this->render('hospital/register_pracownik.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

    /**
     * @Route("/hospital/back_password", name="back_password")
     */
    public function backPassword(Request $request)
    {

        return $this->render('hospital/back_password.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);

    }

    /**
     * @Route("/hospital/activate_token", name="activate_token")
     */
    public function activateToken(Request $request)
    {
        $hash_obj = new Hash();
        if($request->request->get('activate_pacjent')) {
            $pacjent_data = $hash_obj->sanetizeVariables($request->request);

            $em = $this->getDoctrine();
            $em_pacjent = $em->getRepository('AppBundle:Pacjenci')->findOneBy(
                array('username' => $pacjent_data->username_pacjent)
            );
            if(!empty($em_pacjent)) {
                $checked = new Checked();

                if(!$checked->checkAccountStatus($em_pacjent->getAccessToken()) && $checked->checkToken($em_pacjent->getAccessToken(), $pacjent_data->access_token_pacjenta) ) {

                    $em_manager = $em->getManager();
                    $pacjenci = new Pacjenci();

                    $pacjenci->setAccessToken("activate");
                    $em_manager->flush();

                    return $this->redirectToRoute('login');
                }

                } else {
                //pacjent nie istnieje
            }
        }
        else if($request->request->get('activate_pracownik')) {
            $pracownik = $hash_obj->sanetizeVariables($request->request);

            $em = $this->getDoctrine();

            $em_pracownik = $em->getRepository('AppBundle:Pracownicy')->findOneBy(
                array(
                    'username' => $hash_obj->username_pracownika,
                    'employee_key' => $hash_obj->numer_pracownika,
                ));
            if(!empty($em_pracownik)) {
                $checked = new Checked();
                if(!$checked->checkAccountStatus($em_pracownik->getAccessToken()) && $checked->checkToken($em_pracownik->getAccessToken(), $pracownik->access_token_pracownika) ) {

                    $em_manager = $em->getManager();
                    $employee = new Pracownicy();

                    $employee->setAccessToken("activate");
                    $em_manager->flush();

                    return $this->redirectToRoute('login');
                }

            } else {
                //nie istnieje pracownik
            }
        }

        return $this->render('hospital/activate_account.html.twig');
    }

}
