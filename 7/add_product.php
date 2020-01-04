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
        
        if (isset($_POST['add_product'])) {
            $product_name = $_POST['product_name'];
            $supplier = $_POST['supplier_id'];
            $con->query("INSERT INTO products_tb VALUES('','$product_name','$supplier')");
            echo "<script>alert('Data Product Berhasil Disimpan');window.location='index.php'</script>";
        }
        
        ?>
        <div class="container" style="margin-top:100px">
            <form action="" method="post">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Choose Supplier</label>
                    <select name="supplier_id" class="form-control" id="exampleFormControlSelect1">
                        <?php 
                        $supplier = $con->query("SELECT id,company_name FROM suppliers_tb");
                        foreach ($supplier as $sp) { 
                        ?>
                        <option value="<?php echo $sp['id']?>"><?php echo $sp['company_name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" name="add_product" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>