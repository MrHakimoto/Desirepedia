<head>
  <link rel="stylesheet" href="css/nav.css">
  <style>
    .aberto {
      transform: none !important;
    }
  </style>
</head>

<header class="main-header d-none d-sm-block">
  <div class="container">
    <nav class="navbar navbar-expand-lg main-nav px-0">
      <a class="navbar-brand" href="/mojo">
        <img src="http://rajeshdas.com/assets/images/logo.svg" alt="desirepedia.com">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar icon-bar-1"></span>
        <span class="icon-bar icon-bar-2"></span>
        <span class="icon-bar icon-bar-3"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="mainMenu">
        <ul class="navbar-nav ml-auto text-uppercase f1">
          <li>
            <a href="#home" class="active active-first">home</a>
          </li>
          <li>
            <a href="#about">Redação</a>
          </li>
          <li>
            <a href="#service">Serviços</a>
          </li>
          <li>
            <a href="#project">EXTRA </a>
          </li>
          <li>
            <a href="criators/"> Time </a>
          </li>
          <li>
            <a href="#testimony">ENEM </a>
          </li>
          <li>
            <a href="#contact">
              <div class="flex-shrink-0 dropdown">
                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow userDown" aria-labelledby="dropdownUser2">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Configurações</a></li>
                  <li><a class="dropdown-item" href="user/profile.php">Perfil</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- /.container -->
</header>
<header class="d-block d-sm-none menu-mobile">


  <!-- <nav role="navigation"> -->


  <div id="menuToggle">
    <label class="oto" for="menu-mobile-dropdown">
      <div class="fixed left-fixed menu-lado-esquerdo p-3 text-center"> <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"> </div>
      <input type="checkbox" id="menu-mobile-dropdown" />
    </label>
    <!-- <span></span>
      <span></span>
      <span></span> -->
    <div id="userDropTop" class="fixed" style="position: fixed; z-index: 1; display: none;">
      <div class="flex-shrink-0 dropdown">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow userDown" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Configurações</a></li>
          <li><a class="dropdown-item" href="user/profile.php">Perfil</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="user/logout.php">Sign out</a></li>
        </ul>
      </div>
    </div>
    <ul id="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">Redação</a></li>
      <li><a href="#">Serviços</a></li>
      <li><a href="criators/">Time</a></li>
      <li><a href="#">EXTRA</a></li>
      <li><a href="#">enem</a></li>

    </ul>
  </div>
  <!-- </nav> -->

</header>
<script>
  const $menu = $('#menu')
  const $menuuser =  $("#userDropTop")
  //aberto
  const onMouseUp = e => {
    if (!$menu.is(e.target) && $menu.has(e.target).length === 0 && !$menuuser.is(e.target) && $menuuser.has(e.target).length === 0) {
      $menu.removeClass('aberto')
      
      $("#userDropTop").css("display", "none");
    }
  }

  $('#menu-mobile-dropdown').on('click', () => {
    console.log("toma em cabss");
    $("#userDropTop").show(700);
    //$("#userDropTop").css("display", "inline-block");
    $menu.toggleClass('aberto').promise().done(() => {
      if ($menu.hasClass('aberto')) {
        $(document).on('mouseup', onMouseUp) // ele espera o mouse se mover 
      } else {
        $(document).off('mouseup', onMouseUp) // else remove listener.
      }
    })
  })


  // var v = 0;
  // var patifaria = false;
  // console.log("tamo aq")

  // function chama() {
  //   if ($("#menu").className === 'aberto') {


  //   } else {
  //     $("#menu").css('transform', 'none');
  //     $("#menu").addClass('aberto')
  //     patifaria = true;
  //     console.log("ABRIU")
  //   }


  // }
  // $(".aberto").click(function(event) {
  //   event.stopPropagation();
  //   $(".fixed-nav-header").fadeToggle();
  // })
  // $(document).click(function() {
  //   if ($(".aberto").is(":visible")) {
  //     $(".aberto").fadeOut();
  //   }
  // });

  // function fechar() {
  //   $("#menu").css('transform', 'translate(-100%, 0)');
  //   $("#menu").removeClass('aberto')
  //   patifaria = false;
  //   console.log("fechou")
  //document.documentElement.removeEventListener('click', closing);
  //  v = 0

  //}
  // document.documentElement.addEventListener('click', closing) 
  // function closing(e) {

  //   if (patifaria) {
  //   const path = e.composedPath();
  //     console.log(path)
  //         // check if it has the menu element
  //         if (path.some(elem => elem.className === 'aberto')) {
  //             // terminate this function if it does
  //             return;
  //         }
  //         fechar()

  //         console.log("fechando", v)

  //       }

  //         v++ 
  // }
</script>