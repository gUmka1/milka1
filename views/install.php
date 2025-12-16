<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Install Milka CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Milka CMS Installation</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <p>This will initialize the database and create the necessary tables for the CMS.</p>
                            <p class="mt-2"><strong>Database configuration:</strong></p>
                            <ul class="mt-1">
                                <li>Host: <?php echo DB_HOST; ?></li>
                                <li>Database: <?php echo DB_NAME; ?></li>
                                <li>User: <?php echo DB_USER; ?></li>
                            </ul>
                        </div>
                        
                        <form method="POST" action="/milka/install/run">
                            <button 
                                type="submit" 
                                class="w-100 btn btn-primary btn-lg"
                            >
                                Install Milka CMS
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>