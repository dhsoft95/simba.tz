<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function about(){

    return view("pages.about");

   }

   public function contact(){
 
    return view("pages.contact");
   }

   public function events(){

 
      return view("pages.events");
   }
   public function singe_events(){

 
      return view("pages.events");
   }
   public function management(){

    return view("pages.management-teams");
   }
   public function member_single(){

      return view("pages.member-single");
     }
}
