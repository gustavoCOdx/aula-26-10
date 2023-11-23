<!DOCTYPE html>
<html>
    <head>
        <title>PDO - Criar um Registro - Tutorial de PHP CRUD</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
<body>
    <div class="conteiner">
        <div class="page-header">
            <h1>Create Product</h1>
        </div>
 
        <?php
        if ($_POST) {
            include 'config/database.php';
            try {
                $query = "INSERT INTO products SET name=:name, description=:description, price=:price, created=:created";
 
                $stmt = $con->prepare($query);
 
                $name = htmlspecialchars(strip_tags($_POST['name']));
                $description = htmlspecialchars(strip_tags($_POST['description']));
                $price = htmlspecialchars(strip_tags($_POST['price']));
 
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':Description', $Description);
                $stmt->bindParam(':price', $price);
 
                $created - date('y-m-d h:i:s');
                $stmt->bindParam(':created', $created);
 
                if ($stmt->execute()) {
                    echo "<div class='alert alert-sucess'>Record was saved.</div>";
                } else {
                    echo "<div class='alert alert-sucess'>Unable to save record.</div>";
                }
            } catch (PDOException $exception) {
                die('ERROR: ' . $exception->getMessage());
            }
        }
 
        ?>
 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table class='table table-houve table-responsive table-bordered'>
                <tr>
                    <td>Name</td>
                    <td><input type='text' name='name' class='form-control' /></td>
                </tr>
 
                <tr>
                    <td>Description</td>
                    <td><textarea name='description' class='form-control' /></td>
                </tr>
 
                <tr>
                    <td>Price</td>
                    <td><input type='text' name='price' class='form-control' /></td>
                </tr>
 
 
                <tr>
                    <td></td>
                    <td>
                        <input type='text' name='name' class='btn btn-primary' />
                        <a href='index.php' class='btn btn-danger'>Back to read products</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"</script>
</body>
 
</html>