<head>
  <link rel="stylesheet" href="css/nav.css">
  <style>
    .aberto {
      transform: none !important;
    }
  </style>
</head>
<?php function url()
{
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

url();




function conter($palavra)
{
  $local = $_SERVER['PHP_SELF'];
  $calc = str_contains($local, $palavra);
  if ($calc) {
    return true;
  }
}

$lista = array("extra", "time", "enem", "redacao", "services");


$opcao = "home";
$lenght = count($lista);
$vhs = 0;
for ($i = 0; $lenght > $i; $i++) {
  if (conter($lista[$i])) {
    $opcao = $lista[$i];
    $vhs++;
  }
  if ($vhs == 5) {
    $opcao = "home";
  }
}

switch ($opcao) {
  case "home":
    $adicionar_class = "1";
    // echo "<script> alert('FELA') </script>";
    break;
  case "redacao":
    $adicionar_class = "2";
    // echo "<script> alert('redacao') </script>";
    break;
  case "services":
    $adicionar_class = "3";
    //echo "<script> alert('services') </script>";
    break;
  case "extra":
    $adicionar_class = "4";
    //echo "<script> alert('SALVE') </script>";
    break;

  case "time":
    $adicionar_class = "5";
    // echo "<script> alert('quebrada') </script>";
    break;
  case "enem":
    $adicionar_class = "6";
    // echo "<script> alert('enem') </script>";
    break;
}


$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Desirepedia/functions/imguser.php";
include_once($path);
// require __DIR__ . '../functions/imguser.php';
?>


<header class="main-header d-none d-lg-block ">
  
  <div class="container navbar-Grande">
    <nav id="navbar-Grande" style="transition: 0.5s;" class="navbar navbar-expand-lg main-nav px-0">
      <?php $tuos = $_SERVER['REQUEST_URI']; ?>
      <a class="navbar-brand" href="<?php echo url() ?>/Desirepedia/">
        <?php  ?>
        <img src="http://localhost/Desirepedia/database/LOGO-DESIREPEDIA.png" alt="desirepedia.com">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar icon-bar-1"></span>
        <span class="icon-bar icon-bar-2"></span>
        <span class="icon-bar icon-bar-3"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="mainMenu">
        <ul class="navbar-nav ml-auto text-uppercase f1">
          <li>

            <a id="NLink1" href="<?php echo url() ?>/Desirepedia/" class="active active-first">home</a>
          </li>
          <li>
            <a id="NLink2" href="<?php echo url() ?>/Desirepedia/redacao">Redação</a>
          </li>
          <li>
            <a id="NLink3" href="<?php echo url() ?>/Desirepedia/services">Serviços</a>
          </li>
          <li>
            <a id="NLink4" href="<?php echo url() ?>/Desirepedia/extra">EXTRA </a>
          </li>
          <li>
            <a id="NLink5" href="<?php echo $_SESSION['pathMain']; ?>/time"> Time </a>
          </li>
          <li>
            <a id="NLink6" href="<?php echo url() ?>/Desirepedia/enem">ENEM </a>
          </li>
          <li>
            <a href="#contact">
              <div class="flex-shrink-0 dropdown">
                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo $pathh; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow userDown" aria-labelledby="dropdownUser2">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="<?php echo url() ?>/Desirepedia/user/config.php">Configurações</a></li>
                  <li><a class="dropdown-item" href="<?php echo url() ?>/Desirepedia/user/profile.php">Perfil</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="<?php echo url() ?>/Desirepedia/user/logout.php">Sign out</a></li>
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
<script>
  var number = parseInt("<?php echo $adicionar_class; ?>");
  for (var o = 0; o < 6; o++) {
    var l = $(`#NLink${o}`)
    l.removeClass('active')
    l.removeClass('active-first')
  }

  var ultimaRolagem = window.scrollY;


  window.addEventListener('scroll', () => {
    // var nav_sumir = $("#navbar-Grande");
    var nav_sumir = $("#navbar-Grande")
    if (ultimaRolagem < window.scrollY) {
      // nav_sumir.addClass('navbar-sumiu ')
      document.getElementById("navbar-Grande").style.top = "-160px";
      } else {
      // nav_sumir.removeClass('navbar-sumiu')
      document.getElementById("navbar-Grande").style.top = "0px";
    }
    ultimaRolagem = window.scrollY;
  })


  $(`#NLink${number}`).addClass('active');
  $(`#NLink${number}`).addClass('active-first');
  if (o == number) {
    $(`#NLink${number}`).addClass('active-first');
  }
</script>
<header class="d-block d-lg-none menu-mobile">


  <!-- <nav role="navigation"> -->


  <div id="menuToggle">
    <label class="oto" for="menu-mobile-dropdown">
      <div class="fixed left-fixed menu-lado-esquerdo p-3 text-center"> <img src="<?php echo $pathh; ?>" alt="mdo" width="32" height="32" class="rounded-circle"> </div>
      <input type="checkbox" id="menu-mobile-dropdown" />
    </label>
    <!-- <span></span>
      <span></span>
      <span></span> -->
    <div id="userDropTop" class="fixed" style="position: fixed; z-index: 1; display: none;">
      <div class="flex-shrink-0 dropdown">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?php echo $pathh; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow userDown" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="<?php echo url() ?>/Desirepedia/user/config.php">Configurações</a></li>
          <li><a class="dropdown-item" href="<?php echo url() ?>/Desirepedia/user/profile.php">Perfil</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="<?php echo url() ?>/Desirepedia/user/logout.php">Sign out</a></li>
        </ul>
      </div>
    </div>
    <ul id="menu">
      <li><a href="<?php echo url() ?>/Desirepedia/">Home</a></li>
      <li><a href="<?php echo url() ?>/Desirepedia/redacao">Redação</a></li>
      <li><a href="<?php echo url() ?>/Desirepedia/services">Serviços</a></li>
      <li><a href="<?php echo url() ?>/Desirepedia/criators">Criadores</a></li>
      <li><a href="<?php echo url() ?>/Desirepedia/extra">EXTRA</a></li>
      <li><a href="<?php echo url() ?>/Desirepedia/enem">Enem</a></li>

    </ul>
  </div>
  <!-- </nav> -->

</header>
<script>
  const $menu = $('#menu')
  const $menuuser = $("#userDropTop")
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