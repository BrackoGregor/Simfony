<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{

    public function index()
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }

    public function discipline()
    {
        return $this->render('discipline.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }

    public function rezultati()
    {
        return $this->render(
            'rezultati.html.twig',
            array('results'=>$this->izpis())
        );
    }

    private function izpis()
    {
        $results = [];
        $conn = $this->getDoctrine()->getManager()
            ->getConnection();
        $sql = 'SELECT * FROM udelezenec LIMIT 25';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        while($row = $stmt->fetch())
        {
           $results[] = $row;
        }
        return $results;
    }

}
