<!DOCTYPE html>
<html lang="en">

<head>
    <title>Anagram</title>
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
                <h3>Anagram</h3>
            </div>
            <div class="row align-items-center">
                <?php
                if ($_POST) {
                    $x1 = $_POST['teext1'];
                    $x2 = $_POST['teext2'];
                    $hurufbesar1 = strtoupper($x1);
                    $hurufbesar2 = strtoupper($x2);
                    $text1 = count_chars($hurufbesar1, 1);
                    $text2 = count_chars($hurufbesar2, 1);
                    $simply = [$text1, $text2];

                    if ($simply == NULL) {
                        echo '<div class="alert alert-danger alert-dismissable" id="flash-msg">
                        <h6><i class="icon fa fa-check"></i>Text masih kosong!</h6></div>';
                    } else if ($text1 == $text2) {
                        echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
                        <h6><i class="icon fa fa-check"></i>Text ' . $x1 . ' dan ' . $x2 . ' merupakan Anagram!</h6></div>';
                    } else {
                        echo '<div class="alert alert-warning alert-dismissable" id="flash-msg">
                        <h6><i class="icon fa fa-check"></i>Text ' . $x1 . ' dan ' . $x2 . ' Bukan Anagram!</h6></div>';
                    }
                }
                ?>
                <div class="text-center">
                    <form method="post">
                        Masukan Text 1 :
                        <input class="form-control" type="text" name="teext1" /> <br>
                        Masukan Text 2 :
                        <input class="form-control" type="text" name="teext2" /> <br>
                        <button class="btn btn-primary" type="submit">Check</button>
                    </form>

                </div>
            </div>
        </div>
</body>

</html>