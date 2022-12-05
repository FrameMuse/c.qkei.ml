<!DOCTYPE html>
<html>
    
    <head>
        <title>Введите код чтобы получиь ссылку!</title>
        <meta charset="utf-8">
        <style>
            *, *:after, *:before {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                transition: .3s ease-in;
            }
            html {
                overflow: hidden;
            }
            body {
                background: #1F1F1E;
                color: white;
                font-family: Arial;
            }
            span {
                color: #ccc;
            }
            h2,h4 {
                padding: 20px;
                background: rgba(0,0,0,0.4);
            }
            h4 {
                color: #999999;
                border-bottom: 2px solid #E32636;
                background: #141414;
                box-shadow: inset 0 10px 50px -12px black;
            }
            form {
                text-align: center;
                margin: 100px 0;
            }
            label {
                padding: 10px;
                background: #131313;
                box-shadow: inset -10px 0 30px -8px black;
            }
            input[type="submit"], input[type="text"] {
                padding: 10px;
                background: #E32636;
                border: 0;
                height: inherit;
                color: whitesmoke;
                outline: none;
                font-size: 15px;
            }
            input[type="submit"]:hover {
                cursor: pointer;
            }
            input[type="text"] {
                background: #171717;
            }
        </style>
    </head>
    <body>
            <h2 align="center">Чтобы Получить <span>Ссылку</span> Проди Простой <span>Тест</span></h2>
            <h4 align="center">Всего Два Простых Вопроса</h4>
                <form method="POST">
                    <label aling="center">Сведения: <?
    if (isset($_POST['Go'])) {
        if ($_POST['key'] == "228886641") {
            header('location: ?step=2');
        } else { echo "Данные Не Вырны!"; 
        if ($_POST['ans'] == "ДА" | $_POST['ans'] == "Да" | $_POST['ans'] == "дА" | $_POST['ans'] == "да") {
            echo "Я Конечно Догадывался Но Чтоб Так, Я Не Ожидал Этого От Тебя, Ты Упал В Моих Глазах!";
            echo "<a href='http://xplayyyyyirxui4n.onion/'>Перейти</a>";
        } else {
            echo " Ответ Не Защитан (Не ври себе же)";
        }
    }
    }
?></label><br><br><br>
                    <?
                    if ($_GET['step'] == "2") {?>
                        <label for="2">Ты Масировал Себе Простату Пальцами? (Пальчик В Анальчик)</label><input type="text" name="ans" id="2" placeholder="Ответ"><input type="submit" value="Далее" name="Go">
                    <?} else {?>
                        <label for="1">Введите Код Предоставленный Ранее</label><input type="text" name="key" id="1" placeholder="Ключ"><input type="submit" value="Далее" name="Go">
                    <?}
                    ?>
                </form>
    </body>
</html>