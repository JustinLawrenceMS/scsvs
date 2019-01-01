<html>
<head>
</head>
<body>
<h1>scsvs: Simple CSV Exporter</h1>
<form action="exporter.php" method="post">
    <p>
        <input type="text" name="table" placeholder="Enter Table Name" />
    </p>
    <p>
        <input type="text" name="database" placeholder="Enter Database Name" />
    </p>
    <p>
    <p>
        <input type="text" name="username" placeholder="Enter MySQL Username" />
    </p>

        <input type="text" name="hostname" placeholder="Enter Hostname" />
    </p>
    <p>
<!-- I used type text for the password.  If you're worried about someone
looking over your shoulder, change it to type password or skip this file
and store db variables in a config file -->
        <input type="text" name="password" placeholder="Enter Password" />
    </p>
    <p>
        <input type="Submit" />
    </p>
</form>
</body>
</html>
