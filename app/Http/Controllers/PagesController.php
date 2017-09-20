<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; 

use Mail;

use App\Team;

use Session;

use App\page;


class PagesController extends Controller
{

    
     public function show($slug)
    {

        $page = Page::findBySlug($slug);
        return view('page.show', ['page'=> $page]);
    }


     public function about()
    {
        return view('about');
    }


   public function contact()
    {
        return view('contact');
    }
   
 }
