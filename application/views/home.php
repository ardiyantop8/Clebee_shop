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
    </style>
</head>

<body>
    <div class="container">
        <ul>
            <li href="#">Home</li>
            <li href="#">Kontak</li>
            <li href="#">FAQ</li>
            <li class="li-login" href="#">Login</li>
        </ul>
    </div>
</body>

</html>