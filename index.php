<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Опрос</title>
  </head>
  <body>
    <div class="container">
        <h1>Опрос</h1>
        <form>
            <div class="form-group">
                <label for="name">Ваше имя<span class="red-star">*</span></label>
                <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control"required>
            </div>
            <div class="form-group">
                <label for="email">Ваш email<span class="red-star">*</span></label>
                <input type="email" name="email" id="email" placeholder="Введите email" class="form-control" required>
            </div>
            <div class="form-group">
               <label for="poll1">Что добавляет возраст?<span class="red-star">*</span></label>
               <select class="form-control" id="poll1" required>
                 <option value="Ответ_№1">Чистый классический стиль</option>
                 <option value="Ответ_№2">Чистый спортивный стиль</option>
                 <option value="Ответ_№3">Смесь классики и спорта</option>
               </select>
            </div>
            <div class="form-group">
               <label for="poll2">Стоит ли взрослой женщине одеться полностью в романтическом стиле?<span class="red-star">*</span></label>
               <select class="form-control" id="poll2" required>
                 <option value="Ответ_№1">Да, особенно когда идешь на свидание</option>
                 <option value="Ответ_№2">Нет, это будет выглядеть глупо. Надо добавлять долю романтики к другим стилям</option>
                 <option value="Ответ_№3">Можно, если такой образ был на манекене</option>
               </select>
            </div>
            <div class="form-group">
               <label for="poll3">Когда включать тренды в свой гардероб?<span class="red-star">*</span></label>
               <select class="form-control" id="poll3" required>
                 <option value="Ответ_№1">Разобраться с долгими и короткими трендами. Долгих трендов брать чуть побольше. Коротких - на один сезон, чтобы сделать образы острыми и интересными</option>
                 <option value="Ответ_№2">Не трогать тренды - в них тяжело разобраться, подходит только молодежи, зачем позориться</option>
                 <option value="Ответ_№3">Смотреть модные показы и полностью копировать понравившиеся образы с подиумов</option>
               </select>
            </div>
            <button type="button" name="sendPoll" id="sendPoll" class="btn btn-primary">Отправить</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>