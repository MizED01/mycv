<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style/main.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <title>My first sait/CV</title>
</head>

<body>
  <div class="container">
    <!-- <?php require "blocks/header.php" ?> -->
    <div class="info">
      <img src="images/Photo.jpg" alt="My photo">
      <div class="info-text">
        <h2>Мизюркин Егор</h2>
        <p>Ученик КузГТУ</p>
        <p>Будущий it-специалист</p>
        <p>+7(951)587-84-83</p>
      </div>
    </div>

    <div class="social">
      <h4><em>Мои социальные сети</em></h4>
      <ul>
        <li><a href="https://t.me/Miz_ed" target="_blank">Telegram</a></li>
        <li><a href="https://vk.com/mizyurkin" target="_blank">Vkontakte</a></li>
        <li><a href="https://instagram.com/mizyurkin_ed" target="_blank">Instagram</a></li>
      </ul>
    </div>

    <hr>

    <div class="card">
      <div class="education">
        <h2>Образование</h2>
        <table class="tb">
          <tr>
            <td>МБНОУ Гимназия №18</td>
            <td>Среднее общее</td>
            <td>2008-2019</td>
            <td>Ленинск-Кузнецкий</td>
          </tr>
          <tr>
            <td>НГТУ</td>
            <td>Неоконченное высшее</td>
            <td>2019-2022</td>
            <td>Новосибирск</td>
          </tr>
          <tr>
            <td>КузГТУ</td>
            <td></td>
            <td>2022-н.в.</td>
            <td>Кемерово</td>
          </tr>
        </table>
      </div>
    </div>

    <div class="card">
      <div class="work">
        <h2>Опыт работы</h2>
        <p>Пока нигде не работал</p>
      </div>
    </div>

    <div class="card">
      <div class="hobby">
        <h2>Мои хобби</h2>
        <ol class="list">
          <li>Езда на машине</li>
          <li>Спорт</li>
          <li>Компьютерные игры</li>
        </ol>
      </div>
    </div>

    <hr>

    <div class="feedback">
      <h2>Связаться со мной</h2>
      <form action="php/forms.php" method="post" target="_blank">
        <div class="rows">
          <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input type="text" name="name" placeholder="Введите имя" required>
          </div>
          <div class="form-group">
            <label for="email">Ваш email:</label>
            <input type="email" name="email" placeholder="Введите email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="message">Ваше сообщение:</label>
          <textarea name="message" rows="4" cols="20" placeholder="Напишите Ваше сообщение" required></textarea>
        </div>
        <input class="btn" type="submit" id="send" value="Отправить">
      </form>
    </div>
  </div>
</body>

</html>
