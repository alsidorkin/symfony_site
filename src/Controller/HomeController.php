<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    


    // public function __construct(){
    //     $user=new User();
    //     $user->createTable();
    
    //     $pages =new PageModel();
    //     if($pages->createTable()){
    //       // если создалась таблица
    //       $pages->insertPages();
    
    //     }
    //   }
      #[Route('/', name: 'app_home')]
      public function index(): Response
      {



return $this->redirectToRoute('app_my_entity_index');

       // $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
            //   $taskModel=new TaskModel();
            //   $tasks=$taskModel->getAllTasksByIdUser($user_id);
            //   $taskJson=json_encode($tasks);
    
          // return $this->render('home/index.html.twig', [
          //     'controller_name' => 'HomeController',
          // ]);
      }
            // public function index(){
            //   $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
            //   $taskModel=new TaskModel();
            //   $tasks=$taskModel->getAllTasksByIdUser($user_id);
            //   $taskJson=json_encode($tasks);
    
            //  include 'app/views/index.php';
            // }
        
        
}
