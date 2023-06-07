<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./general.scss">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <form action="censura.php" method="GET">
                <label for=""> la parola cattiva sarà :</label>
                <input type="text" name="badWord" id="" placeholder="parola da censurare">
                <label for=""> il testo da censurare sarà :</label>
                <textarea name="paragraph" id="" cols="30" rows="10" placeholder="inserire il testo da censurare"></textarea>
                <button type="submit"> submittalo</button>
            </form>
        </div>
    </main>
</body>
</html>