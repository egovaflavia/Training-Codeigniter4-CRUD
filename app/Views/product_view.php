<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
     <div class="container mt-5">
          <h2>Codeigniter 4</h2>
          <table class="table table-bordered">
               <thead>
                    <tr>
                         <th>Id</th>
                         <th>Name</th>
                         <th>Price</th>
                         <th>Action</th>
                    </tr>
               </thead>
               <tbody>
                    <?php foreach ($product as $row) : ?>
                         <tr>
                              <td><?= $row['product_id'] ?></td>
                              <td><?= $row['product_name'] ?></td>
                              <td><?= $row['product_price'] ?></td>
                              <td>
                                   <a href="/product/edit/<?= $row['product_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                   <a href="/product/delete/<?= $row['product_id'] ?>" class="btn btn-sm btn-danger">Dxelete</a>
                              </td>
                         </tr>
                    <?php endforeach ?>
               </tbody>
          </table>
     </div>
</body>

</html>