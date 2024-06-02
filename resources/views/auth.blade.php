<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VitaBand | Профиль</title>
    <link rel="stylesheet" href="{{url('css/css/main.css')}}" />
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/alerts.css">
  </head>
    <style type="text/css">
        .btn {
            display: flex  !important; 
            align-items: center  !important;
            justify-content: center  !important;
            width: 100% !important;
            max-width: 390px !important;
            padding: 12px 20px !important;
            font-size: 16px !important;
            line-height: 24px !important;
            border: 1px solid #00efc4 !important;
            /* border-radius: 8px !important; */
            outline: none !important;
            transition: all 0.3s ease-in-out !important;
            cursor: pointer !important;
            }
            .btn--default {
            color: #00efc4 !important;
            background-color: rgba(0, 239, 196, 0.1) !important;
            }
            .btn--default:hover, .btn--default:focus {
            color: #000 !important;
            background-color: #00efc4 !important;
        }
    </style>
  <body class="user" style="background: #1c1c1e !important;">
  @if (\Session::has('success'))
        <label>
        <input type="checkbox" class="alertCheckbox" autocomplete="off" />
        <div class="alert notice">
            <span class="alertClose">X</span>
            <span class="alertText">{{ \Session::get('success') }}
            <br class="clear"/></span>
        </div>
        </label>
    @elseif(\Session::has('error'))
        <label>
        <input type="checkbox" class="alertCheckbox" autocomplete="off" />
        <div class="alert error">
            <span class="alertClose">X</span>
            <span class="alertText">{{ \Session::get('error') }}
            <br class="clear"/></span>
        </div>
        </label>
    @endif
    <section class="section-header section-outer">
      <div class="section-inner vertical-indent--s">
        <h1 class="header__title">
          <a href="/">
            <span>VitaBand</span>
            <svg
              width="32"
              height="32"
              viewBox="0 0 94 80"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M28.7778 10.4065C19.2729 10.4065 11.5679 18.1208 11.5679 27.6368C11.5679 36.8394 17.0801 46.2639 25.0352 54.3069C32.2881 61.6404 40.8536 67.0878 46.9995 69.5279C50.6576 68.075 55.244 65.5289 59.9565 62.0661C62.2105 60.4105 65.3781 60.897 67.0323 63.1532C68.686 65.4098 68.2 68.5812 65.9466 70.2374C59.9312 74.6575 53.7341 78.0209 48.5965 79.7303C47.5598 80.0754 46.4402 80.0754 45.4035 79.7308C37.4227 77.0753 26.6397 70.3342 17.8414 61.4382C9.09273 52.5925 1.44446 40.7324 1.44446 27.6368C1.44446 12.5232 13.6822 0.270996 28.7778 0.270996C35.7807 0.270996 42.1676 2.91038 47 7.23986C51.8324 2.91038 58.2193 0.270996 65.2222 0.270996C80.3178 0.270996 92.5556 12.5232 92.5556 27.6368C92.5556 31.8162 91.7715 35.8679 90.4393 39.7118C89.5226 42.3561 86.6384 43.7553 83.9977 42.8381C81.3565 41.9203 79.959 39.0327 80.8751 36.3889C81.889 33.4648 82.4321 30.538 82.4321 27.6368C82.4321 18.1208 74.7271 10.4065 65.2222 10.4065C59.4058 10.4065 54.2616 13.2906 51.1385 17.7308C50.1904 19.0788 48.6466 19.8808 47 19.8808C45.3534 19.8808 43.8096 19.0788 42.8615 17.7308C39.7385 13.2906 34.5942 10.4065 28.7778 10.4065Z"
                fill="#FF3F79"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M67.9648 36.81C69.7951 37.073 71.3369 38.3136 71.9863 40.0473L74.7925 47.5394L75.2516 46.9186C76.2058 45.6284 77.7152 44.8672 79.3192 44.8672H87.4939C90.289 44.8672 92.5557 47.136 92.5557 49.935C92.5557 52.7339 90.289 55.0027 87.4939 55.0027H81.8688L77.3887 61.0597C76.2847 62.5516 74.4544 63.3199 72.6175 63.062C70.7811 62.804 69.2327 61.5614 68.5813 59.8226L65.7518 52.2682L65.2223 52.9756C64.2662 54.2517 62.7659 55.0027 61.1729 55.0027H53.0742C50.2786 55.0027 48.0125 52.7339 48.0125 49.935C48.0125 47.136 50.2786 44.8672 53.0742 44.8672H58.6421L63.1976 38.7859C64.3067 37.3051 66.1344 36.5475 67.9648 36.81Z"
                fill="url(#paint0_linear_102_256)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_102_256"
                  x1="95.086"
                  y1="50.9485"
                  x2="49.5305"
                  y2="50.9485"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#00FFD1" />
                  <stop offset="1" stop-color="#00FFD1" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </a>
        </h1>
      </div>
    </section>

    <div class="container w-50">
        <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="btn btn--default active"
      style="border-radius: 8px 0 0 8px"
      id="tab-login"
      data-mdb-pill-init
      href="#pills-login"
      role="tab"
      aria-controls="pills-login"
      aria-selected="true"
      >Логин</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="btn btn--default"
      style="border-radius: 0 8px 8px 0"
      id="tab-register"
      data-mdb-pill-init
      href="#pills-register"
      role="tab"
      aria-controls="pills-register"
      aria-selected="false"
      >Регистрация</a
    >
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div
    class="tab-pane fade show active"
    id="pills-login"
    role="tabpanel"
    aria-labelledby="tab-login"
  >
    <form method="post" action="/auth/login">
        @csrf
        <p class="inputWrap">
            <input type="text" class="input" name="email" placeholder="Почта"/>
        </p>
        <p class="inputWrap">
            <input type="password" class="input" name="password" placeholder="Пароль"/>
        </p>
        <div class="d-flex justify-content-center">
            <button type="accept" class="btn btn--default">Войти</button>
        </div>

    </form>
  </div>
  <div
    class="tab-pane fade"
    id="pills-register"
    role="tabpanel"
    aria-labelledby="tab-register"
  >
    <form method="post" action="/auth/register">
        @csrf
        <p class="inputWrap">
            <input type="text" class="input" name="name" placeholder="Имя"/>
        </p>
        <p class="inputWrap">
            <input type="text" class="input" name="email" placeholder="Почта"/>
        </p>
        <p class="inputWrap">
            <input type="text" class="input" name="password" placeholder="Пароль"/>
        </p>
        <p class="inputWrap">
            <input type="text" class="input" name="password_confirmation" placeholder="Повторный пароль"/>
        </p>
        <div class="d-flex justify-content-center">
            <button data-mdb-ripple-init type="accept" class="btn btn--default">Зарегестрироваться</button>
        </div>
    </form>
  </div>
</div>
<!-- Pills content -->
    </div>

<!--     
    <h1>Login</h1>
    <form action="/auth/login" method="post">
        @csrf
        <input type="text" name='email' placeholder="email">
        <input type="text" name='password' placeholder="password">
        <button type="accept">login</button>
    </form>
    <h1>Register</h1>
    <form action="/auth/register" method="post">
        @csrf
        <input type="text" name='name' placeholder="name">
        <input type="text" name='email' placeholder="email">
        <input type="text" name='password' placeholder="password">
        <input type="text" name='password_confirmation' placeholder="password confirmation">
        <button type="accept">register</button>
    </form> -->
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.umd.min.js"
></script>
</body>
</html>