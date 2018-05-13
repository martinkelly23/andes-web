<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewsController extends Controller
{
    public function home()
    {
      return $this->render('index.html.twig');
    }
}
