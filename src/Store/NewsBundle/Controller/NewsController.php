<?php

namespace Store\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('StoreNewsBundle:News'); //вызов метода базового контроллера и получаем объект доктрины, потом вызываем ее метод Manager(). Затем получаем объект репозитория.
        $news = $newsRepo -> findAll(); //записываем в переменную $news все полученные новости из репозитория newsRepo 
        return $this->render('StoreNewsBundle:News:index.html.twig', array('news' => $news));
   
    }
     public function articleAction($slug)
    {
    	$newsRepo = $this->getDoctrine()->getManager()->getRepository('StoreNewsBundle:News'); //вызов метода базового контроллера и получаем объект доктрины, потом вызываем ее метод Manager(). Затем получаем объект репозитория.
        $onenews = $newsRepo -> findOneBy(['slug'=>$slug]); //записываем в переменную y одну новость из репозитория newsRepo 
        return $this->render('StoreNewsBundle:News:article.html.twig', array('onenews' => $onenews));
    }
    public function kategoriaAction()
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('StoreNewsBundle:News'); //вызов метода базового контроллера и получаем объект доктрины, потом вызываем ее метод Manager(). Затем получаем объект репозитория.
        $katnews = $newsRepo -> findAll(); //записываем в переменную $news все полученные новости из репозитория newsRepo 
        return $this->render('StoreNewsBundle:News:kategoria.html.twig', array('katnews' => $katnews));
   
    }
    
}
