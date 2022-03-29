<!DOCTYPE html>
<html lang="en">

<head>
    <title>Palindrom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>

<body>
    <div style="width: 400px; display: flex; justify-content: center; align-items: center; height: 100vh" class="container-sm">
        <div class="container">
            <div class="row text-center">
                <h3>Palindrom</h3>
            </div>
            <div class="row">
                <?php
                if ($_POST) {
                    $text = $_POST['teext'];
                    $hurufbesar = strtoupper($text);
                    $jmlhhuruf = strlen($text);
                    $check = strrev($hurufbesar);
                    if ($text == NULL) {
                        echo '<div class="alert alert-danger alert-dismissable" id="flash-msg">
                <h6><i class="icon fa fa-check"></i>Text masih kosong!</h6></div>';
                    } else if ($jmlhhuruf <= 2) {
                        echo '<div class="alert alert-danger alert-dismissable" id="flash-msg">
                <h6><i class="icon fa fa-check"></i>Buatlah kata dengan minimal 3 huruf!</h6></div>';
                    } else if ($hurufbesar == $check) {
                        echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
                <h6><i class="icon fa fa-check"></i>Text ' . $text . ' merupakan Palindrom!</h6></div>';
                    } else {
                        echo '<div class="alert alert-warning alert-dismissable" id="flash-msg">
                <h6><i class="icon fa fa-check"></i>Text ' . $text . ' Bukan Palindrom!</h6></div>';
                    }
                }
                ?>
                <div class="text-center">
                    <form method="post">
                        Masukan Text atau Nomor : <input class="form-control" type="text" name="teext" /><br>
                        <button class="btn btn-primary" type="submit">Check</button>
                    </form>

                </div>
            </div>
        </div>
</body>

</html>