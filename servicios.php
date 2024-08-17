<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicios - Venta de Casas</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <link rel="stylesheet" href="css/magnific-popup.css">                                     
    <link rel="stylesheet" href="css/templatemo-style.css">                                   
</head>

<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <?php include 'navbar.php'; ?>
        <!-- row -->

        <!-- Formulario para subir una propiedad -->
        <div class="row tm-row-margin-b tm-content-boxes-row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 mx-auto">
                <div class="tm-content-box">
                    <h3 class="tm-content-title">Sube tu propiedad a la venta</h3>
                    <form action="submit_property.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Título de la propiedad</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Imagen de la propiedad</label>
                            <input type="file" class="form-control-file" id="image" name="image" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Ubicación</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Subir propiedad</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div> <!-- container-fluid -->
    
    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>
