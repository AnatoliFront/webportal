<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="stylesheet" href="/css/style.bundle.css" />

    <title>Заголовок | Проект</title>
    @csrf
  </head>
  <body>
    <header id="header">
      <div class="wrapper">
        <div class="navbar">
          <a href="/">
            <img src="/img/logo.png" alt="" class="logo" />
          </a>
          <nav class="nav">
            <ul>
              <li class="nav_item">
                <a href="/activities" class="nav_link">мероприятия</a>
                <a href="/knowledge" class="nav_link">база знаний</a>
                <a href="/organisations" class="nav_link">организации</a>
                <a href="#" class="nav_link login"> регистрация <span class="separator"></span> вход </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="login-popup">
      <form action="" class="login_form" id="login-form">
      @method('POST')
        <h4 class="section_title _form">Войти в личный кабинет</h4>
        <input type="text" name="login" class="request_main_input login_form__input" placeholder="Логин" />
        <input type="password" name="password" class="request_main_input login_form__input" placeholder="Пароль" />
        <input type="submit" class="button login_form__button" value="Авторизоваться" />
        <div class="login_form__close">
          <img src="/img/close.png" alt="close" />
        </div>
        <a href="/registration" class="registration_button">или зарегистрируйтесь!</a>
      </form>
    </div>

    <div class="container">
      <div class="wrapper">
            @yield('content')
      </div>
    </div>

    <footer id="footer">
      <div class="wrapper">
        <h4 class="form_title">
          Есть вопросы? Напишите нам.
        </h4>
        <div class="footer_section">
          <div class="form_container">
            <form action="#" class="footer_form" id="footer-form">
              <input type="text" name="name" class="footer_input" placeholder="Имя" required />
              <input type="email" name="email" class="footer_input" placeholder="E-mail" required/>
              <textarea class="footer_input _area" name="comment" placeholder="Сообщение" required></textarea>
              <input type="submit" class="footer_submit" value="отправить" />
            </form>
          </div>
          <div class="social_container">
            <ul class="social">
              <li class="social_item">
                <img src="/img/mail.png" alt="" class="social_icon" /><a
                  href="mailto:Volunteer.by@mail.ru"
                  class="social_link"
                  >Volunteer.by@mail.ru
                </a>
              </li>
              <li class="social_item">
                <img src="/img/vk.png" alt="" class="social_icon" /><a href="" class="social_link">ВКонтакте</a>
              </li>
              <li class="social_item">
                <img src="/img/instagram.png" alt="" class="social_icon" /><a href="" class="social_link">Инстаграм</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bottom_bar">
        <img src="/img/footer-logo.png" alt="" />
        <p class="bottom_bar__text">Cделаем добро вместе!</p>
      </div>
    
    </footer>

    <script src="/js/script.js"></script>
  </body>
</html>
