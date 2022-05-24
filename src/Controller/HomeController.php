<?php

namespace App\Controller;

use App\Entity\Accueil;
use App\Repository\AccueilRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function index(EntityManagerInterface $manager, AccueilRepository $repo)
    {
        // je créé un nouveau objet que j'appelle Acceuil dans la var perso
        $perso = new Accueil();
        // je donne une valeur au name de l'objet Acceuil
        $perso->setName("soufiane");
        // je persist les donnéees pour envoyer dans la bdd
        $manager->persist($perso);
        // je tir la cahsse d'eau pour envoyer le tout dans la bdd
        $manager->flush();
        // j'affiche le total de la bdd dans la var affiche
        $affiche = $repo->findAll();

        return $this->render('home/index.html.twig', [
            // je retourne le total de la bdd dans la vue avec lalias 'name'
            'name' => $affiche,
        ]);
    }
}
