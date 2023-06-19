<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-12">
            <div class="card shadow mt-5">
                <div class="card-header">
                    <h5>User Dashboard</h5>
                </div>
                <div class="card-body">
                    <p class="h5">Welcome <?php echo $_GET["name"]; ?></p>
                    <p>Your email address is: <?php echo $_GET["email"]; ?></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script
</body>
</html>