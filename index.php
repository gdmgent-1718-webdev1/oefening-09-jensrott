<?php 


$isSubmitted = isset($_REQUEST['submit']);

if ($isSubmitted) {

    $input = $_GET['input'];
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Oefening 9</title>
</head>
<body>

<div class = "container">


<!-- Als is isSubmitted werkt, dan toont het scherm hello, username -->
<?php if ($isSubmitted): ?>
    <h1>Zoekresultaten voor zoekopdracht: <?= $input ?></h1>


<?php else: ?>

    <!-- GET method -->
    <form action= "" method = "GET">
            <div class="form-group row">
            <label for = "input">Vul iets in</label>

            <!-- required zorgt ervoor dat we een foutmelding krijgen als het niet is ingevuld -->
            <input class = "form-control" id="input" type="text" name = "input" required>
            </div>

            <div class="row">
                <input class="btn btn-primary" id="submit-name" type = "submit" name = "submit" value = "Verzenden">
            </div>
    </form>
</div>
    
<?php endif; ?>

</body>
</html>