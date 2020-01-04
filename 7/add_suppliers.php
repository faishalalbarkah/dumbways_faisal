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

        if (isset($_POST['add_supplier'])) {
            $company_name = $_POST['company_name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $con->query("INSERT INTO suppliers_tb VALUES('','$company_name','$address','$phone')");
            echo "<script>alert('Data Supplier Berhasil Disimpan');window.location='index_supplier.php'</script>";
        }
        ?>
        <div class="container" style="margin-top:100px">
            <form action="" method="post">
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="company_name">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone">
                </div>
                <button type="submit" name="add_supplier" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>