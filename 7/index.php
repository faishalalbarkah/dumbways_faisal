<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>
        <?php 
        include 'koneksi.php';
        ?>
        <div class="container" style="margin-top:100px">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Product</h2>
                    
                </div>
                <div class="col-lg-3 ">
                    <a href="add_product.php" class="btn btn-sm btn-info">Add Product</a>
                    <a href="add_suppliers.php" class="btn btn-sm btn-info">Add Supplier</a>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        $array = $con->query("SELECT suppliers_tb.company_name,suppliers_tb.address,suppliers_tb.phone,products_tb.product_name,products_tb.id FROM products_tb JOIN suppliers_tb ON products_tb.supplier_id = suppliers_tb.id GROUP BY products_tb.id") ?>
                        <?php foreach ($array as $value) { ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $value["product_name"]; ?></td>
                            <td><?php echo $value["company_name"]; ?></td>
                            <td><?php echo $value["address"]; ?></td>
                            <td><?php echo $value["phone"]; ?></td>
                            <td><a href="update_product.php?id=<?php echo $value['id']; ?>" class="btn btn-sm btn-warning">Update</a> <a href="delete.php?id=<?php echo $value['id']; ?>" onclick="return confirm('Yakin data ingin dihapus?')" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="index_supplier.php" class="btn btn-sm btn-primary">Lihat Data Supplier</a>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>