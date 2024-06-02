<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="/">
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
    <!-- Left links -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="/admin/doctors">Врачи</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/users">Пользователи</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
    <div class="dropdown">
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
            <li>
                <a class="dropdown-item" href="#">Some news</a>
            </li>
            <li>
                <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
                <a class="dropdown-item" href="#">Something else here</a>
            </li>
        </ul>
    </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          data-mdb-dropdown-init
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          aria-expanded="false"
        >
        @php
            if($user->role == 1) $image = 'doctor.png';
            elseif ($user->role == 2) $image = 'headPhysician.png';
            else $image = 'admin.png';
        @endphp
          <img
            src="/{{ $image }}"
            class="rounded-circle"
            height="25"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->