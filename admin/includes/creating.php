<script>
    tinymce.init({
        selector: 'textarea#enunciado',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 bold italic align fontsize fontfamily strikethrough blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
    });
    tinymce.init({
        selector: '#altA',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
    tinymce.init({
        selector: '#altB',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
    tinymce.init({
        selector: '#altC',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
    tinymce.init({
        selector: '#altD',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
    tinymce.init({
        selector: '#altE',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
</script>


<?php
try {
    $con = new PDO("sqlite:../db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}

//$consulta = "SELECT MAX(q_num) as maior FROM" . $_GET['test'];
//$execucao_consulta = $con->prepare($consulta);
//$execucao_consulta->execute();
//$result = $execucao_consulta->fetchAll(PDO::FETCH_ASSOC);
//var_dump($result);
//echo $result['maior'];


$sql = "SELECT * FROM id_tests WHERE nome_bd_prova='". $_GET['test'] . "'";
$stmt = $con->prepare($sql);
$stmt->execute();

foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $rowling){
    print_r($rowling);
    $codigo = $rowling['codigo'];
    $nome_da_prova_client = $rowling['nome_bo_prova'];
    $nome_da_prova_bd = $rowling['nome_bd_prova'];
}

if (strlen($codigo) == 1){
    $codigo = 0 . $codigo;
    //echo $codigo;
}


$sql_prova = "SELECT * FROM " . $_GET['test'];
$ir = $con->prepare($sql_prova);

// Execute statement.
$ir->execute(); // ID between 1 and 3.

// Get the results.
$iremos = $ir->fetchAll(PDO::FETCH_ASSOC);
if($iremos) {
foreach($iremos as $irei){
    $number = $irei['q_num'];
} 
$numero_da_questao = $number + 1; 
} else {
    $numero_da_questao = 1;
}


switch  (strlen($numero_da_questao)){
    case 1:
        $questao_num = 00 . $numero_da_questao;
        break;
    case 2:
        $questao_num = 0 . $numero_da_questao;
        break;
    case 3:
        $questao_num = $numero_da_questao;
        break;
}
$global = $codigo . $questao_num ;

?>

<div class="container mt-4 mb-4">
    <?php echo $return; ?>
    <h1>Prova: <?php echo $nome_da_prova_client; ?></h1>
    <div class="border bg-dark text-white"> Criando quest??o: <?php echo $numero_da_questao; ?>  <br> Global: <?php echo $global ?> </div>
    <!--Bootstrap classes arrange web page components into columns and rows in a grid -->
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-8">
            <h1 class="h2 mb-4">Submit issue</h1>
            <label>Describe the issue in detail</label>
            <div class="form-group" class="border border-primary">
                <p id="lugar"></p>
                <script>
                    console.log("diz")
                </script>
                <script>
                    console.log("asd")
                    $.getJSON("conteudos.json", function(data) {
                        console.log(data);
                        data.Biologia.forEach((value) => {
                            //$('#lugar').append(value)
                            value[0].forEach((value2)=>{
                                console.log(value2)
                            })
                        })
                    });

                    function logArrayElements(element, index, array) {
                        console.log("a[" + index + "] = " + element);
                    }
                    //const obj = JSON.parse(text);
                </script>

                <form action="criando.php" method="POST" id="criarForm">

                    <input type="text" value="<?php echo $global; ?>" name="globals" style="display: none;">
                    <input type="text" value="<?php echo $_GET['test']; ?>" name="test" style="display: none;">

                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Selecione uma disciplina</option>
                        <option value="0">Biologia</option>
                        <option value="1">Filosofia</option>
                        <option value="2">F??sica</option>
                        <option value="3">Geografia</option>
                        <option value="4">Hist??ria</option>
                        <option value="5">Literatura</option>
                        <option value="6">Matem??tica</option>
                        <option value="7">Portugu??s</option>
                        <option value="8">Qu??mica</option>
                        <option value="9">Sociologia</option>
                        <option value="10">Espanhol</option>
                        <option value="11">Ingl??s</option>
                        <option value="12">Arte</option>
                    </select>



                    <div class="my-5">
                        <p>Enunciado</p>
                        <textarea name="enun" id="enunciado"></textarea>
                    </div>
                    <div class="my-5">
                        <p>Alternativa A:</p>
                        <input type="text" id="altA" name="alA">
                    </div>

                    <div class="my-5">
                        <p>Alternativa B:</p>
                        <input type="text" id="altB" name="alB" style="height:170px;">
                    </div>

                    <div class="my-5">
                        <p>Alternativa C:</p>
                        <input type="text" id="altC" name="alC">
                    </div>

                    <div class="my-5">
                        <p>Alternativa D:</p>
                        <input type="text" id="altD" name="alD">
                    </div>

                    <div class="my-5">
                        <p>Alternativa E:</p>
                        <input type="text" id="altE" name="alE">
                    </div>

                    <br>
                    <div class="my-5">
                        <p>Alternativa Correta: </p>
                        <p> <label for="alternativa_A" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_A" value="A"> Alternativa A
                            </label> </p>
                        <p> <label for="alternativa_B" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_B" value="B"> Alternativa B
                            </label> </p>
                        <p> <label for="alternativa_C" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_C" value="C"> Alternativa C
                            </label> </p>
                        <p> <label for="alternativa_D" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_D" value="D"> Alternativa D
                            </label> </p>
                        <p> <label for="alternativa_E" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_E" value="E"> Alternativa E
                            </label> </p>
                    </div>
            </div>




            <button type="submit" onclick="inserirData()" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>



<?php


// if(isset($_POST['enun']) && isset($nome_da_prova_bd)) {
//     $enunciado = $_POST['enun'];

//     $altA = $_POST['alA'];
//     $altB = $_POST['alB'];
//     $altC = $_POST['alC'];
//     $altD = $_POST['alD'];
//     $altE = $_POST['alE'];

//     $correta = $_POST['alt'];

//     $materia = isset($_POST['materia']) ? $_POST['materia'] : null;

//     $conteudo = isset($_POST['conteudo']) ? $_POST['conteudo'] : null;


//      //00 000

//     $sql_inserir = "INSERT INTO $nome_da_prova_bd (
//         q_global,
//         q_enum,
//         q_alt_a,
//         q_alt_b,
//         q_alt_c,
//         q_alt_d,
//         q_alt_e,
//         q_correct,
//         q_materia,
//         q_conteudo) VALUES ($global, '$enunciado', '$altA', '$altB', '$altC', '$altD', '$altE', '$correta', '$materia', '$conteudo');";

// $inserir = $con->prepare($sql_inserir);
// $inserir->execute();

// foreach($_POST as $chave) {
//     unset($_POST[$chave]);
// }

//$this->refresh();
//echo "<script> location.reload(); </script>";

//}