<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-dark">
    <div class="container bg-dark">
         <div class="card col-md-10 offset-md-1 bg-dark">
               <div class="card-title">
                   <h1 class="text-light">scsvs: Simple CSV Exporter</h1>
               </div>
	       <div class="card-body">
                    <div class="form-group">
<form action="exporter.php" method="post">
    <p>
        <input class="form-control" type="text" name="table" placeholder="Enter Table Name" />
    </p>
    <p>
        <input class="form-control" type="text" name="database" placeholder="Enter Database Name" />
    </p>
    <p>
    <p>
        <input class="form-control" type="text" name="username" placeholder="Enter MySQL Username" />
    </p>

        <input class="form-control" type="text" name="hostname" placeholder="Enter Hostname" />
    </p>
    <p>
<!-- I used type text for the password.  If you're worried about someone
looking over your shoulder, change it to type password or skip this file
and store db variables in a config file -->
        <input class="form-control" type="text" name="password" placeholder="Enter Password" />
    </p>
    <p>
        <input class="form-control btn btn-secondary" type="Submit" />
    </p>
</form>
</body>
</html>
