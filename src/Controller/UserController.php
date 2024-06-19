<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\MyEntity;
use App\Repository\MyEntityRepository;
class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(MyEntityRepository $entityRepository , EntityManagerInterface $em): Response
    {
        $entity=$entityRepository ->findOneBy(['id'=>2]);
        $entity->setAge(456);
        $em->flush();exit();
        // $entity=$entityRepository ->findAll();
        // dd($entity);
        $my_entity=(new MyEntity())
            ->setName('mark')
            ->setAge('99')
            ->setWeight('123');
        $em->persist($my_entity);
        $em->flush();
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
