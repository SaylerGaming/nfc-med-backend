<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VitaBand | Изменение профиля</title>
    <link rel="stylesheet" href="{{url('css/css/main.css')}}" />
    <link rel="stylesheet" href="{{url('css/css/my-modal.css')}}" />
    <link rel="icon" type="image/png" href="{{url('favicon.png')}}" />
  </head>
  <body>
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

    <main class="section-main section-outer">
      <div class="section-inner vertical-indent--s">
        <div class="infoBlock">
            <form action="/profile/update" method="post" class="form">
              @csrf
              <p class="title">Личная информация:</p>
              <label class="label">
                <span class="heading">Имя: </span>
                <p class="inputWrap">
                  <input type="text" class="input" name="name" value="{{$user->name}}"/>
                </p>
              </label>
              <label class="label">
                <span class="heading">Фамилия: </span>
                <p class="inputWrap">
                  <input type="text" class="input" name="surname" value = "{{$user->surname}}"/>
                </p>
              </label>
              <label class="label">
                <span class="heading">Номер телефона: </span>
                <p class="inputWrap">
                  <input type="tel" class="input" name="phone" value="{{$user->phone}}"/>
                </p>
              </label>
              <label class="label">
                <span class="heading">ИИН (виден только врачам): </span>
                <p class="inputWrap">
                  <input type="text" class="input" name="iin" value="{{$user->iin}}"/>
                </p>
              </label>
              <button type="submit" class="btn btn--default">Изменить</button>
              <br>
            </form>
            <div class="group">
              <p class="title" style="margin-bottom:15px">Группа крови: </p>
              <p>{{$user->blood_type ?? 'Пока не выбрано'}}</p>
              <br>  
              <a href="#m-blood_type" class="link-1 btn btn--default" id="m1-c">Изменить</a>
              <div class="modal-container" id="m-blood_type" style="--m-background: hsla(0, 0%, 0%, .4);">
                <div class="modal checkbox-wrapper-33">
                  <form action="/profile/blood/update" method="post">
                    @csrf
                    <h1 class="modal__title">Выберите вашу группу крови</h1>
                    <br>
                    @php
                      $blood_types = [
                          'первая положительная [O(I) Rh+]',
                          'первая отрицательная [O(I) Rh-]',
                          'вторая положительная [A(II) Rh+]',
                          'вторая отрицательная [A(II) Rh-]',
                          'третья положительная [B (III) Rh+]',
                          'третья отрицательная [B (III) Rh-]',
                          'четвёртая положительная [AB (IV) Rh+]',
                          'четвёртая отрицательная [AB (IV) Rh-]'
                        ];
                    @endphp
                    @foreach($blood_types as $type)
                    <label class="checkbox">
                      <input 
                        class="checkbox__trigger visuallyhidden" 
                        type="radio" 
                        name="blood_type" 
                        value="{{$type}}"
                        @if($user->blood_type == $type)
                          checked
                        @endif
                      />
                      <span class="checkbox__symbol">
                        <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1">
                          <path d="M4 14l8 7L24 7"></path>
                        </svg>
                      </span>
                      <p class="checkbox__textwrapper">{{$type}}</p>
                    </label>
                    @endforeach
                    <br>
                    <button type="submit" class="btn btn--default">Выбрать &rarr;</button>
                  </form>
                  <a href="" class="link-2"></a>
                </div>
              </div>
            </div>
            <div class="group">
              <p class="title" style="margin-bottom:15px">Мед. учреждение: </p>
              <p>{{$user->hospital->name ?? 'Пока не выбрано'}}</p>
              <br>  
              <a href="#m-hospital" class="link-1 btn btn--default" id="m1-c">Изменить</a>
              <div class="modal-container" id="m-hospital" style="--m-background: hsla(0, 0%, 0%, .4);">
                <div class="modal checkbox-wrapper-33">
                  <form action="/profile/hospital/update" method="post">
                    @csrf
                    <h1 class="modal__title">Выберите ваше мед учреждение</h1>
                    <br>
                    <label class="checkbox">
                      <input 
                        class="checkbox__trigger visuallyhidden" 
                        type="radio" 
                        name="hospital_id" 
                        value="0"
                        @if($user->hospital == null)
                          checked
                        @endif
                      />
                      <span class="checkbox__symbol">
                        <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1">
                          <path d="M4 14l8 7L24 7"></path>
                        </svg>
                      </span>
                      <p class="checkbox__textwrapper">Не имеется</p>
                    </label>
                    @foreach($hospitals as $hospital)
                    <label class="checkbox">
                      <input 
                        class="checkbox__trigger visuallyhidden" 
                        type="radio" 
                        name="hospital_id" 
                        value="{{$hospital->id}}"
                        
                      />
                      <span class="checkbox__symbol">
                        <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1">
                          <path d="M4 14l8 7L24 7"></path>
                        </svg>
                      </span>
                      <p class="checkbox__textwrapper">{{$hospital->name}}</p>
                    </label>
                    @endforeach
                    <br>
                    <button type="submit" class="btn btn--default">Выбрать &rarr;</button>
                  </form>
                  <a href="" class="link-2"></a>
                </div>
              </div>
            </div>
            <div class="group">
              <p class="title">Хронические заболевания:</p>
              <ul class="illnessesList">
                @foreach($user->diseases as $disease)
                <li class="illnessesItem">
                  {{$disease->name}}
                  <a href="#m-disease-{{$disease->id}}" class="link-1" id="m1-c">
                    <svg
                      class="illnessesItemDelete"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0,0,256,256"
                      width="10px"
                      height="10px"
                      class="_illnessesItemDelete_142hw_113"
                    >
                      <g
                        fill="#ffffff"
                        fill-rule="nonzero"
                        stroke="none"
                        stroke-width="1"
                        stroke-linecap="butt"
                        stroke-linejoin="miter"
                        stroke-miterlimit="10"
                        stroke-dasharray=""
                        stroke-dashoffset="0"
                        font-family="none"
                        font-weight="none"
                        font-size="none"
                        text-anchor="none"
                        style="mix-blend-mode: normal"
                      >
                        <g style="transform: scale(8.53333, 8.53333)">
                          <path
                            d="M7,4c-0.25587,0 -0.51203,0.09747 -0.70703,0.29297l-2,2c-0.391,0.391 -0.391,1.02406 0,1.41406l7.29297,7.29297l-7.29297,7.29297c-0.391,0.391 -0.391,1.02406 0,1.41406l2,2c0.391,0.391 1.02406,0.391 1.41406,0l7.29297,-7.29297l7.29297,7.29297c0.39,0.391 1.02406,0.391 1.41406,0l2,-2c0.391,-0.391 0.391,-1.02406 0,-1.41406l-7.29297,-7.29297l7.29297,-7.29297c0.391,-0.39 0.391,-1.02406 0,-1.41406l-2,-2c-0.391,-0.391 -1.02406,-0.391 -1.41406,0l-7.29297,7.29297l-7.29297,-7.29297c-0.1955,-0.1955 -0.45116,-0.29297 -0.70703,-0.29297z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                </li>
                <div class="modal-container" id="m-disease-{{$disease->id}}" style="--m-background: hsla(0, 0%, 0%, .4);">
                <div class="modal">
                  <h1 class="modal__title">Вы точно хотите удалить хроническое заболевание "{{$disease->name}}"?</h1>
                  <br>
                  <a href="/profile/disease/delete/{{$disease->id}}" class="btn btn--default">Удалить &rarr;</a>
                  <a href="" class="link-2"></a>
                </div>
              </div>
                @endforeach
              </ul>
              <form class="form" action="/profile/disease/add" method="post">
                @csrf
                <label class="label">
                  <p class="inputWrap">
                    <input type="text" class="input" name="disease_name"/>
                  </p>
                  <button type="submit" class="btn btn--default">Добавить</button>
                </label>
              </form>
            </div>
            <div class="group">
              <p class="title">Аллергии и непереносимости:</p>
              <ul class="illnessesList">
                @foreach($user->allergies as $allergy)
                <li class="illnessesItem">
                  {{$allergy->name}}
                  <a href="#m-allergy-{{$allergy->id}}" class="link-1" id="m1-c">
                    <svg
                      class="illnessesItemDelete"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0,0,256,256"
                      width="10px"
                      height="10px"
                      class="_illnessesItemDelete_142hw_113"
                    >
                      <g
                        fill="#ffffff"
                        fill-rule="nonzero"
                        stroke="none"
                        stroke-width="1"
                        stroke-linecap="butt"
                        stroke-linejoin="miter"
                        stroke-miterlimit="10"
                        stroke-dasharray=""
                        stroke-dashoffset="0"
                        font-family="none"
                        font-weight="none"
                        font-size="none"
                        text-anchor="none"
                        style="mix-blend-mode: normal"
                      >
                        <g style="transform: scale(8.53333, 8.53333)">
                          <path
                            d="M7,4c-0.25587,0 -0.51203,0.09747 -0.70703,0.29297l-2,2c-0.391,0.391 -0.391,1.02406 0,1.41406l7.29297,7.29297l-7.29297,7.29297c-0.391,0.391 -0.391,1.02406 0,1.41406l2,2c0.391,0.391 1.02406,0.391 1.41406,0l7.29297,-7.29297l7.29297,7.29297c0.39,0.391 1.02406,0.391 1.41406,0l2,-2c0.391,-0.391 0.391,-1.02406 0,-1.41406l-7.29297,-7.29297l7.29297,-7.29297c0.391,-0.39 0.391,-1.02406 0,-1.41406l-2,-2c-0.391,-0.391 -1.02406,-0.391 -1.41406,0l-7.29297,7.29297l-7.29297,-7.29297c-0.1955,-0.1955 -0.45116,-0.29297 -0.70703,-0.29297z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                  <div class="modal-container" id="m-allergy-{{$allergy->id}}" style="--m-background: hsla(0, 0%, 0%, .4);">
                    <div class="modal">
                      <h1 class="modal__title">Вы точно хотите удалить аллергию "{{$allergy->name}}"?</h1>
                      <br>
                      <a href="/profile/allergy/delete/{{$allergy->id}}" class="btn btn--default">Удалить &rarr;</a>
                      <a href="" class="link-2"></a>
                    </div>
                  </div>
                </li>
                @endforeach
              </ul>
              <form class="form" action="/profile/allergy/add" method="post">
                @csrf
                <label class="label">
                  <p class="inputWrap">
                    <input type="text" class="input" name="allergy_name"/>
                  </p>
                  <button type="submit" class="btn btn--default">Добавить</button>
                </label>
              </form>
            </div>
            <div class="group">
              <p class="title">Употребляемые Медикаменты:</p>
              <ul class="illnessesList">
                @foreach($user->medications as $medication)
                <li class="illnessesItem">
                  {{$medication->name}}
                  <a href="#m-medication-{{$medication->id}}" class="link-1" id="m1-c">
                    <svg
                      class="illnessesItemDelete"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0,0,256,256"
                      width="10px"
                      height="10px"
                      class="_illnessesItemDelete_142hw_113"
                    >
                      <g
                        fill="#ffffff"
                        fill-rule="nonzero"
                        stroke="none"
                        stroke-width="1"
                        stroke-linecap="butt"
                        stroke-linejoin="miter"
                        stroke-miterlimit="10"
                        stroke-dasharray=""
                        stroke-dashoffset="0"
                        font-family="none"
                        font-weight="none"
                        font-size="none"
                        text-anchor="none"
                        style="mix-blend-mode: normal"
                      >
                        <g style="transform: scale(8.53333, 8.53333)">
                          <path
                            d="M7,4c-0.25587,0 -0.51203,0.09747 -0.70703,0.29297l-2,2c-0.391,0.391 -0.391,1.02406 0,1.41406l7.29297,7.29297l-7.29297,7.29297c-0.391,0.391 -0.391,1.02406 0,1.41406l2,2c0.391,0.391 1.02406,0.391 1.41406,0l7.29297,-7.29297l7.29297,7.29297c0.39,0.391 1.02406,0.391 1.41406,0l2,-2c0.391,-0.391 0.391,-1.02406 0,-1.41406l-7.29297,-7.29297l7.29297,-7.29297c0.391,-0.39 0.391,-1.02406 0,-1.41406l-2,-2c-0.391,-0.391 -1.02406,-0.391 -1.41406,0l-7.29297,7.29297l-7.29297,-7.29297c-0.1955,-0.1955 -0.45116,-0.29297 -0.70703,-0.29297z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                  <div class="modal-container" id="m-medication-{{$medication->id}}" style="--m-background: hsla(0, 0%, 0%, .4);">
                    <div class="modal">
                      <h1 class="modal__title">Вы точно хотите удалить медикамент "{{$medication->name}}"?</h1>
                      <br>
                      <a href="/profile/medication/delete/{{$medication->id}}" class="btn btn--default">Удалить &rarr;</a>
                      <a href="" class="link-2"></a>
                    </div>
                  </div>
                </li>
                @endforeach
              </ul>
              <form class="form" action="/profile/medication/add" method="post">
                @csrf
                <label class="label">
                  <p class="inputWrap">
                    <input type="text" class="input" name="medication_name"/>
                  </p>
                  <button type="submit" class="btn btn--default">Добавить</button>
                </label>
              </form>
            </div>

            <div class="group">
              <p class="title">Контакты:</p>
              <ul class="contactsList">
                <li class="contactsItem">
                  @foreach($user->contacts as $contact)
                  <div class="contact">
                    <span class="relationship">{{$contact->family_type}}: </span>
                    {{$contact->phone}} ({{$contact->name}})
                  </div>
                  <button type="button" class="deleteBtn">
                    <a href="#m-contact-{{$contact->id}}" class="link-1" id="m1-c">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24px"
                      height="24px"
                    >
                      <path
                        d="M 10 2 L 9 3 L 3 3 L 3 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 4.3652344 7 L 5.8925781 20.263672 C 6.0245781 21.253672 6.877 22 7.875 22 L 16.123047 22 C 17.121047 22 17.974422 21.254859 18.107422 20.255859 L 19.634766 7 L 4.3652344 7 z"
                      />
                    </svg>
                  </a>
                  </button>
                  <div class="modal-container" id="m-contact-{{$contact->id}}" style="--m-background: hsla(0, 0%, 0%, .4);">
                    <div class="modal">
                      <h1 class="modal__title">Вы точно хотите удалить контакт "{{$contact->name}}"?</h1>
                      <br>
                      <div style="max-width: fit-content; margin-left: auto; margin-right: auto;">
                        <a href="/profile/contact/delete/{{$contact->id}}" class="btn btn--default" style="max-width: fit-content; margin-left: auto; margin-right: auto;">Удалить &rarr;</a>
                      </div>
                      <a href="" class="link-2"></a>
                    </div>
                  </div>
                  @endforeach
                </li>
              </ul>
              <form action="/profile/contact/add" method="post">
                @csrf
                <div class="contactForm">
                  <label class="label">
                    <span class="heading">Имя:</span>
                    <p class="inputWrap">
                      <input type="text" class="input" name="contact_name"/>
                    </p>
                  </label>
                  <label class="label">
                    <span class="heading">Номер телефона:</span>
                    <p class="inputWrap">
                      <input type="tel" class="input" name="contact_phone"/>
                    </p>
                  </label>
                  <label class="label">
                    <span class="heading">Степень родства:</span>
                    <p class="inputWrap">
                      <input type="text" class="input" name="contact_family_type"/>
                    </p>
                  </label>
                  <button type="submit" class="btn btn--default">
                    Добавить контакт
                  </button>
                </div>
              </form>
            </div>
          </div>
      </div>
    </main>

  </body>
</html>
