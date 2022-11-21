<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Your public IP Address</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Your public IP Address">
        <meta name="author" content="jhx (jhx0x00@gmail.com)">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <link href="style.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <div class="cover-container d-flex h-100 mx-auto flex-column">
            <main role="main" class="inner cover h-100 d-flex align-items-center justify-content-center">
                <h1 class="cover-heading"><?php include "ip.php"; echo get_public_ip(); ?></h1>
            </main>

            <footer class="footer mt-auto">
                <div class="inner">
                    <p>Created by <a href="https://jhx0.github.io/">jhx</a>.</p>
                </div>
            </footer>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>