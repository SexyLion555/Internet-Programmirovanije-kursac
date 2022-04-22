<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/error_bar.css">
    <title>Oops.</title>
</head>
<body>
    <div class="errbar">
        <?php
            try {
                $config_file_path = ('http://wlsecurebuying');
                throw new Exception("Website (http://wlsecurebuying) is not found. Error 404");
            } 
            catch (Exception $e) {
                echo $e->getMessage();
            }
        ?> 
    </div>
</body>
</html>
