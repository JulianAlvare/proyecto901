<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto - Venta de Casas</title>

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
        <?php include 'navbar.php'; ?><!-- row -->

        <div class="row tm-row-margin-b tm-content-boxes-row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 mx-auto">
                <div class="tm-content-box">
                    <h3 class="tm-content-title">Contáctanos</h3>
                    <form action="send_contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
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
