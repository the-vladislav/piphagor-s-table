<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Таблица Пифагора</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div class="main">
            <form action="piphagor.php" method="post">
                <div class="enterBox">
                    <label for="first">Введите первое число:</label>
                    <input type="number" name="first" id="first" value="0"/>
                </div>
                <div class="enterBox">
                    <label for="second">Введите второе число:</label>
                    <input type="number" name="second" id="second" value="0"/>
                </div>
                <div class="submitBox">
                    <input type="submit" value="Создать таблицу"/>
                </div>
            </form>
        </div>
    </body>
</html>
