<?php

namespace SNT\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UnitController extends Controller
{
    /**
     * @Route("/listEmployers")
     */
    public function listEmployersAction()
    {
        return $this->render('SNTServiceBundle:Unit:list_employers.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ListServices")
     */
    public function ListServicesAction()
    {
        return $this->render('SNTServiceBundle:Unit:list_services.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/AddEmployer")
     */
    public function AddEmployerAction()
    {
        return $this->render('SNTServiceBundle:Unit:add_employer.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/AddService")
     */
    public function AddServiceAction()
    {
        return $this->render('SNTServiceBundle:Unit:add_service.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/UpdateEmployers")
     */
    public function UpdateEmployersAction()
    {
        return $this->render('SNTServiceBundle:Unit:update_employers.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/UpdateService")
     */
    public function UpdateServiceAction()
    {
        return $this->render('SNTServiceBundle:Unit:update_service.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/FindEmployer")
     */
    public function FindEmployerAction()
    {
        return $this->render('SNTServiceBundle:Unit:find_employer.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/FindService")
     */
    public function FindServiceAction()
    {
        return $this->render('SNTServiceBundle:Unit:find_service.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/DeleteEmployer")
     */
    public function DeleteEmployerAction()
    {
        return $this->render('SNTServiceBundle:Unit:delete_employer.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/DeleteService")
     */
    public function DeleteServiceAction()
    {
        return $this->render('SNTServiceBundle:Unit:delete_service.html.twig', array(
            // ...
        ));
    }

}
