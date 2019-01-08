<?php
namespace App\Http\Controllers;

class PagesController extends Controller{

  public function getIndex(){
  #process var data or _params
  #talk to the SDO_Model
  #receive from the modal
  #compile or process data from model if needed
  #pass the data to the corect View
  return view('pages.welcome');
  }
  public function getAbout(){
    $first = 'Godfrey';
    $last = 'Damabel';
    $fullname = $first.' '.$last;
    $email = 'damabelg@gmail.com';
    $data =[];
    $data['email']=$email;
    $data['fullname']=$fullname;
    //return view('pages.about')->with("fullname",$fullname)->withEmail($email);
    return view('pages.about')->withData($data);
  }
  public function getContact(){
      return view('pages.contact');
  }
}
 ?>
