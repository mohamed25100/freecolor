<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titre</title>
</head>
<style>
    #box {
        min-height: 60px;
    }

    body {
        text-align: right !important;
        font-size: 200%;
    }

    .bg-red {
        background-color: red;
    }

    .mx-auto {
        margin: 0 auto 0 auto;
    }

    li {
        list-style: none;
    }

    .w-50vw {
        width: 50vw;
    }
    button{padding: 10px 20px 10px 20px;font-weight: bold;}
    input{zoom: 2;}
</style>

<body>
    <div id="box" class="bg-red w-50vw mx-auto text-center"></div>
    <div>ما هو لون المستطيل</div>
    <div class="text-center">
        <form action='freecolor.php' method='post'>
            <fieldset>
                <legend>اختر اللون المناسب</legend>

                <div>
                    <label for="red">red</label>
                    <input type="checkbox" id="red" name="red" value="red">
                    <label for="blue">blue</label>
                    <input type="checkbox" id="blue" name="blue" value="blue"><br>
                    <label for="green">green</label>
                    <input type="checkbox" id="green" name="green" value="green">
                    <label for="yellow">yellow</label>
                    <input type="checkbox" id="yellow" name="yellow" value="yellow">

                </div>
            </fieldset>
            <button type="submit" value="Submit">حفظ</button><br>
        </form>
        <?php
        if ($_POST) {
            echo (join('', $_POST) == 'red') ? 'good answer the color is: <strong>' . join('', $_POST) . '</strong>' : "wrong answer it's " . '<strong>not ' . join(' and ', $_POST) . '</strong>';
        } ?>
    </div>
</body>

</html>