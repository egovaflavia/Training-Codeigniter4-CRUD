<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
     <div class="container">
          <form action="/product/save" method="POST">
               <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
               </div>
               <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control">
               </div>
               <div class="form-group">
                    <button class="btn btn-sm btn-primary">Save</button>
               </div>
          </form>
     </div>
</body>

</html>