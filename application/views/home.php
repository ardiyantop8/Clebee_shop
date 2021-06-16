<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: black;
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
            border-radius: 50px;
        }

        li {
            color: white;
            display: inline-block;
            margin-left: 15px;
        }

        .li-login {
            position: relative;
            color: white;
            background-color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <ul>
            <li><a class="li-login" href="#">Home</a></li>
            <li><a class="li-login" href="#">Kontak</a></li>
            <li><a class="li-login" href="#">FAQ</a></li>
            <li><a class="li-login" href="#">Login</a></li>
        </ul>
    </div>
</body>

</html>