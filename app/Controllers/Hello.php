<?php

namespace App\Controllers;

class Hello extends BaseController
{
     public function index()
     {
          $data['title'] = 'Hello World From Codeigniter 4';
          echo view('hello_view', $data);
     }

     //--------------------------------------------------------------------

}
