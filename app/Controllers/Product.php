<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product_model;

class Product extends Controller
{
     public function index()
     {
          $model = new Product_model();
          $data['product'] = $model->getProduct();
          echo view('product_view', $data);
     }

     public function add()
     {
          echo view('product_add');
     }

     public function save()
     {
          $model = new Product_model();
          $data = array(
               'product_name' => $this->request->getPost('nama'),
               'product_price' => $this->request->getPost('price')
          );
          $model->saveProduct($data);
          return redirect()->to('/product');
     }

     public function edit($id)
     {
          $model = new Product_model();
          $data['product'] = $model->getProduct($id)->getRow();
          echo view('product_edit', $data);
     }

     public function update()
     {
          $model = new Product_model();
          $id = $this->request->getPost('product_id');
          $data = array(
               'product_name'  => $this->request->getPost('product_name'),
               'product_price' => $this->request->getPost('product_price'),
          );
          $model->updateProduct($data, $id);
          return redirect()->to('/product');
     }

     public function delete($id)
     {
          $model = new Product_model();
          $model->deleteProduct($id);
          return redirect()->to('/product');
     }
}
