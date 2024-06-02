<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VitaBand | Профиль</title>
    <link rel="stylesheet" href="{{url('css/css/main.css')}}" />
    <link rel="icon" type="image/png" href="{{url('favicon.png')}}" />

  </head>
  <body class="user">
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
        <div class="user-btns">
          @if(!Auth()->user())
            <a href="/auth" class="user-btn">Авторизация</a>
          @endif
        </div>
        <div class="header__btns">
          @if(Auth()->user())
            @if(Auth()->id() == $user->id)
              <a href="/profile/edit" class="header__btn"
                >
                <svg
                  width="56"
                  height="32"
                  viewBox="0 0 56 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    x="0.5"
                    y="0.5"
                    width="55"
                    height="31"
                    rx="7.5"
                    fill="#00EFC4"
                    fill-opacity="0.06"
                  />
                  <rect
                    x="0.5"
                    y="0.5"
                    width="55"
                    height="31"
                    rx="7.5"
                    stroke="#00EFC4"
                  />
                  <path
                    d="M31.9892 9.83567L33.3734 8.45066C33.6619 8.16211 34.0533 8 34.4614 8C34.8694 8 35.2608 8.16211 35.5493 8.45066C35.8379 8.73921 36 9.13057 36 9.53864C36 9.94672 35.8379 10.3381 35.5493 10.6266L23.7595 22.4164C23.3258 22.85 22.7908 23.1686 22.203 23.3436L20 24L20.6564 21.797C20.8314 21.2092 21.15 20.6742 21.5836 20.2405L31.99 9.83567H31.9892ZM31.9892 9.83567L34.1537 12.0002"
                    stroke="#00EFC4"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            @endif
          @endif
          <button class="header__btn">
            <svg
              width="56"
              height="32"
              viewBox="0 0 56 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <rect
                x="0.5"
                y="0.5"
                width="55"
                height="31"
                rx="7.5"
                fill="#00EFC4"
                fill-opacity="0.06"
              />
              <rect
                x="0.5"
                y="0.5"
                width="55"
                height="31"
                rx="7.5"
                stroke="#00EFC4"
              />
              <path
                d="M23.2 13.6V8H32.8V13.6"
                stroke="#00EFC4"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M23.2 20.8H21.6C21.1757 20.8 20.7687 20.6314 20.4686 20.3314C20.1686 20.0313 20 19.6244 20 19.2V15.2C20 14.7757 20.1686 14.3687 20.4686 14.0686C20.7687 13.7686 21.1757 13.6 21.6 13.6H34.4C34.8243 13.6 35.2313 13.7686 35.5314 14.0686C35.8314 14.3687 36 14.7757 36 15.2V19.2C36 19.6244 35.8314 20.0313 35.5314 20.3314C35.2313 20.6314 34.8243 20.8 34.4 20.8H32.8"
                stroke="#00EFC4"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M32.8 17.6H23.2V24H32.8V17.6Z"
                stroke="#00EFC4"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
          <button class="header__btn">
            <svg
              width="56"
              height="32"
              viewBox="0 0 56 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <rect
                x="0.5"
                y="0.5"
                width="55"
                height="31"
                rx="7.5"
                fill="#00EFC4"
                fill-opacity="0.06"
              />
              <rect
                x="0.5"
                y="0.5"
                width="55"
                height="31"
                rx="7.5"
                stroke="#00EFC4"
              />
              <path
                d="M33 24C33.6365 24 34.247 23.7471 34.6971 23.2971C35.1471 22.847 35.4 22.2365 35.4 21.6C35.4 20.9635 35.1471 20.353 34.6971 19.9029C34.247 19.4529 33.6365 19.2 33 19.2C32.3635 19.2 31.753 19.4529 31.3029 19.9029C30.8529 20.353 30.6 20.9635 30.6 21.6C30.6 22.2365 30.8529 22.847 31.3029 23.2971C31.753 23.7471 32.3635 24 33 24ZM33 12.8C33.6365 12.8 34.247 12.5471 34.6971 12.0971C35.1471 11.647 35.4 11.0365 35.4 10.4C35.4 9.76348 35.1471 9.15303 34.6971 8.70294C34.247 8.25286 33.6365 8 33 8C32.3635 8 31.753 8.25286 31.3029 8.70294C30.8529 9.15303 30.6 9.76348 30.6 10.4C30.6 11.0365 30.8529 11.647 31.3029 12.0971C31.753 12.5471 32.3635 12.8 33 12.8ZM23.4 18.4C24.0365 18.4 24.647 18.1471 25.0971 17.6971C25.5471 17.247 25.8 16.6365 25.8 16C25.8 15.3635 25.5471 14.753 25.0971 14.3029C24.647 13.8529 24.0365 13.6 23.4 13.6C22.7635 13.6 22.153 13.8529 21.7029 14.3029C21.2529 14.753 21 15.3635 21 16C21 16.6365 21.2529 17.247 21.7029 17.6971C22.153 18.1471 22.7635 18.4 23.4 18.4Z"
                stroke="#00EFC4"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M31 11.6L25.4 14.8M25.4 17.2L31 20.4"
                stroke="#00EFC4"
                stroke-width="1.5"
              />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <main class="section-main section-outer">
      <div class="section-inner vertical-indent--s">
        <div class="infoBlock">
          <div class="description">
            <p class="name">
              {{$user->surname}} {{$user->name}}
              <span>
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.9625 0.459351C13.0219 0.459351 13.8844 1.32185 13.8844 2.38123C13.8844 3.4406 13.0219 4.3031 11.9625 4.3031C10.9031 4.3031 10.0406 3.4406 10.0406 2.38123C10.0406 1.32185 10.9031 0.459351 11.9625 0.459351ZM14.3812 4.79998H9.58124C8.24999 4.79998 7.18124 5.86873 7.18124 7.19998V13.0687C7.18124 13.5281 7.54687 13.9125 8.02499 13.9125C8.50312 13.9125 8.86874 13.5469 8.86874 13.0687V7.6781C8.86874 7.54685 8.98124 7.43435 9.11249 7.43435C9.24374 7.43435 9.35624 7.54685 9.35624 7.6781V22.2281C9.35624 22.95 9.89062 23.5406 10.5562 23.5406C11.2219 23.5406 11.7562 22.95 11.7562 22.2281V13.9312C11.7562 13.8 11.8687 13.6875 12 13.6875C12.1312 13.6875 12.2437 13.8 12.2437 13.9312V22.2281C12.2437 22.95 12.7781 23.5406 13.4437 23.5406C14.1094 23.5406 14.6437 22.95 14.6437 22.2281V7.6781C14.6437 7.54685 14.7562 7.43435 14.8875 7.43435C15.0187 7.43435 15.1312 7.54685 15.1312 7.6781V13.0781C15.1312 13.5375 15.4969 13.9219 15.975 13.9219C16.4531 13.9219 16.8187 13.5562 16.8187 13.0781V7.19998C16.7812 5.86873 15.6844 4.79998 14.3812 4.79998Z"
                    fill="#0094ff"
                  />
                </svg>
              </span>
            </p>
            <ul class="list">
              @if($user->phone)
              <li class="item"><span>Телефон:</span>{{$user->phone}}</li>
              @endif
              <li class="item"><span>Email:</span>{{$user->email}}</li>
              @if(Auth()->user())
                @if(Auth()->user()->role > 1)
                  <li class="item"><span>ИИН:</span>{{$user->iin}}</li>
                @endif
              @endif
              @if($user->blood_type)
              <li class="item"><span>Группа крови:</span>{{$user->blood_type}}</li>
              @endif
            </ul>
          </div>
        </div>
        <div class="infoBlock">
          <p class="title">
            Мед. учреждение
            <svg
              width="25px"
              height="25px"
              viewBox="0 0 1024 1024"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M959.2 931.3c0 4.2-3.5 7.7-7.7 7.7H72c-4.2 0-7.7-3.5-7.7-7.7v-27.6c0-4.2 3.5-7.7 7.7-7.7h879.5c4.2 0 7.7 3.5 7.7 7.7v27.6z"
                fill="#333E48"
              />
              <path
                d="M951.5 896H540.4v43h411.1c4.2 0 7.7-3.5 7.7-7.7v-27.6c0-4.3-3.4-7.7-7.7-7.7z"
                fill="#00AD68"
              />
              <path d="M133.6 183.6h432v712.3h-432z" fill="#D1D3D3" />
              <path d="M133.6 183.6h432v98.6h-432z" fill="" />
              <path d="M187.6 613.8h324v87.8h-324z" fill="#FFFFFF" />
              <path d="M187.6 613.8h324v32.3h-324z" fill="" />
              <path d="M335.3 613.8h28.6v87.8h-28.6z" fill="#333E48" />
              <path
                d="M201.9 687.3h295.3v-59.2H201.9v59.2zM511.6 716h-324c-7.9 0-14.3-6.4-14.3-14.3v-87.8c0-7.9 6.4-14.3 14.3-14.3h324c7.9 0 14.3 6.4 14.3 14.3v87.8c0 7.8-6.4 14.3-14.3 14.3z"
                fill="#0071CE"
              />
              <path d="M187.6 469h324v87.8h-324z" fill="#FFFFFF" />
              <path d="M187.6 469h324v32.3h-324z" fill="" />
              <path d="M335.3 469h28.6v87.8h-28.6z" fill="#333E48" />
              <path
                d="M201.9 542.5h295.3v-59.2H201.9v59.2z m309.7 28.7h-324c-7.9 0-14.3-6.4-14.3-14.3V469c0-7.9 6.4-14.3 14.3-14.3h324c7.9 0 14.3 6.4 14.3 14.3v87.8c0 8-6.4 14.4-14.3 14.4z"
                fill="#0071CE"
              />
              <path d="M187.6 324.2h324V412h-324z" fill="#FFFFFF" />
              <path d="M187.6 324.2h324v32.3h-324z" fill="" />
              <path d="M335.3 324.2h28.6V412h-28.6z" fill="#333E48" />
              <path
                d="M201.9 397.8h295.3v-59.2H201.9v59.2z m309.7 28.6h-324c-7.9 0-14.3-6.4-14.3-14.3v-87.8c0-7.9 6.4-14.3 14.3-14.3h324c7.9 0 14.3 6.4 14.3 14.3v87.8c0 7.9-6.4 14.3-14.3 14.3z"
                fill="#0071CE"
              />
              <path d="M266.1 772.8h167V896h-167z" fill="#FFFFFF" />
              <path d="M335.3 772.8h28.6V896h-28.6z" fill="#333E48" />
              <path
                d="M447.4 896h-28.6V787.1H280.4V896h-28.6V772.8c0-7.9 6.4-14.3 14.3-14.3h167c7.9 0 14.3 6.4 14.3 14.3V896z"
                fill="#0071CE"
              />
              <path
                d="M579.1 148.5H444.4v-44.1c0-10.5-8.6-19.1-19.1-19.1H273.9c-10.5 0-19.1 8.6-19.1 19.1v44.1H120.1c-10.5 0-19.1 8.6-19.1 19.1v74.5c0 10.5 8.6 19.1 19.1 19.1h459c10.5 0 19.1-8.6 19.1-19.1v-74.5c0-10.5-8.6-19.1-19.1-19.1z"
                fill="#FF5959"
              />
              <path
                d="M395.8 151.3h-24.1v-24.1c0-5.3-4.3-9.5-9.5-9.5H337c-5.3 0-9.5 4.3-9.5 9.5v24.1h-24.1c-5.3 0-9.5 4.3-9.5 9.5v25.1c0 5.3 4.3 9.5 9.5 9.5h24.1v24.1c0 5.3 4.3 9.5 9.5 9.5h25.1c5.3 0 9.5-4.3 9.5-9.5v-24.1h24.1c5.3 0 9.5-4.3 9.5-9.5v-25.1c0.1-5.2-4.1-9.5-9.4-9.5z"
                fill="#FFFFFF"
              />
              <path d="M565.6 571.3h324.2V896H565.6z" fill="#D1D3D3" />
              <path d="M619.7 662.4h216v87.8h-216z" fill="#FFFFFF" />
              <path d="M619.7 662.4h216v32.3h-216z" fill="" />
              <path d="M713.4 662.4H742v87.8h-28.6z" fill="#333E48" />
              <path
                d="M634 735.9h187.3v-59.2H634v59.2z m201.7 28.7h-216c-7.9 0-14.3-6.4-14.3-14.3v-87.8c0-7.9 6.4-14.3 14.3-14.3h216c7.9 0 14.3 6.4 14.3 14.3v87.8c0 7.8-6.4 14.3-14.3 14.3z"
                fill="#0071CE"
              />
              <path
                d="M565.6 515.4h341.7c10.5 0 19.1 8.6 19.1 19.1v36.6c0 10.5-8.6 19.1-19.1 19.1H565.6v-74.8z"
                fill="#FF5959"
              />
              <path
                d="M601.7 590.2v-74.8h-36.1V896h36.1V626.6h288.1v-36.4z"
                fill=""
              />
              <path
                d="M819.5 896c0-33.8-27.4-61.1-61.1-61.1-33.8 0-61.1 27.4-61.1 61.1h122.2z"
                fill="#218649"
              />
            </svg>
          </p>
          <div class="description">
            <ul class="hospitalList">
              <li class="hospitalItem">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15.7895 4H4V20H15.7895V4Z"
                    stroke="#00EFC4"
                    strokeWidth="1.5"
                    strokeLinejoin="round"
                  />
                  <path
                    d="M15.7895 10.7368H20V20H15.7895"
                    stroke="#00EFC4"
                    strokeWidth="1.5"
                    strokeLinecap="round"
                    strokeLinejoin="round"
                  />
                  <path
                    d="M7.36842 10.7368H12.4211"
                    stroke="#00EFC4"
                    strokeWidth="1.5"
                    strokeLinecap="round"
                  />
                  <path
                    d="M9.89474 8.21053V13.2632"
                    stroke="#00EFC4"
                    strokeWidth="1.5"
                    strokeLinecap="round"
                  />
                </svg>
                <div class="hospitalItemInfo">
                  {{$user->hospital->name}}
                </div>
              </li>
            </ul>
            <!-- <a href="#" class="mapLink">
              <button class="btn btn--default">Показать на карте</button>
            </a> -->
          </div>
        </div>
        @if($user->allergies->count() > 0)
        <div class="infoBlock">
          <p class="title">
            Аллергии и непереносимости
          </p>
          <div class="description">
            <ul class="illnessesList">
              @foreach($user->allergies as $allergy)
              <li class="illnessesItem">{{$allergy->name}}</li>
              @endforeach
            </ul>
          </div>
        </div>
        @endif
        @if($user->diseases->count() > 0)
        <div class="infoBlock">
          <p class="title">Хронические заболевания</p>
          <div class="description">
            <ul class="illnessesList">
              @foreach($user->diseases as $disease)
                <li class="illnessesItem">{{$disease->name}}</li>
              @endforeach
            </ul>
          </div>
        </div>
        @endif
        @if($user->contacts->count() > 0)
        <div class="contacts">
          <p class="title">Контакты на случай ЧП</p>
          <ul class="contactsList">
            @foreach($user->contacts as $contact)
              <li class="contactsItem">
                <div class="contact">
                  <span class="relationship">{{$contact->family_type}}:</span>
                  {{$contact->phone}} ({{$contact->name}})
                </div>
                <div class="contactsBtns">
                  <a href="tel:{{$contact->phone}}" class="contactsBtn">
                    <svg
                      width="56"
                      height="32"
                      viewBox="0 0 56 32"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <rect
                        x="0.5"
                        y="0.5"
                        width="55"
                        height="31"
                        rx="7.5"
                        fill="#2ED912"
                        fill-opacity="0.1"
                      />
                      <rect
                        x="0.5"
                        y="0.5"
                        width="55"
                        height="31"
                        rx="7.5"
                        stroke="#2ED912"
                      />
                      <path
                        d="M24.3521 8C24.7076 8 25.0351 8.1928 25.2077 8.50363L26.4048 10.6599C26.5615 10.9423 26.5688 11.2838 26.4244 11.5726L25.2712 13.879C25.2712 13.879 25.6054 15.5972 27.0041 16.9959C28.4027 18.3946 30.1152 18.723 30.1152 18.723L32.4213 17.57C32.7103 17.4254 33.052 17.4329 33.3345 17.5899L35.4969 18.7922C35.8074 18.9648 36 19.2922 36 19.6475V22.13C36 23.3942 34.8257 24.3074 33.6278 23.9031C31.1676 23.073 27.3487 21.4924 24.9281 19.0719C22.5075 16.6513 20.927 12.8324 20.0968 10.3722C19.6927 9.17429 20.6058 8 21.87 8H24.3521Z"
                        fill="#2ED912"
                      />
                    </svg>
                  </a>
                  <a href="sms:{{$contact->phone}}" class="contactsBtn">
                    <svg
                      width="56"
                      height="32"
                      viewBox="0 0 56 32"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <rect
                        x="0.5"
                        y="0.5"
                        width="55"
                        height="31"
                        rx="7.5"
                        fill="#0094FF"
                        fill-opacity="0.1"
                      />
                      <rect
                        x="0.5"
                        y="0.5"
                        width="55"
                        height="31"
                        rx="7.5"
                        stroke="#0094FF"
                      />
                      <path d="M20 9H36V21H30L28 23L26 21H20V9Z" fill="#0094FF" />
                      <path
                        d="M27.6 15H28.401"
                        stroke="#192834"
                        stroke-width="2"
                        stroke-linecap="round"
                      />
                      <path
                        d="M31.6004 15H32.4"
                        stroke="#192834"
                        stroke-width="2"
                        stroke-linecap="round"
                      />
                      <path
                        d="M23.6004 15H24.4"
                        stroke="#192834"
                        stroke-width="2"
                        stroke-linecap="round"
                      />
                    </svg>
                  </a>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
        @endif
      </div>
    </main>
  </body>
</html>
