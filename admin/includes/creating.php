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

?>

<div class="container mt-4 mb-4">
    <?php echo $return; ?>
    <div class="border bg-dark text-white"> Editando questão: </div>
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

                <form action="" method="POST">

                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Selecione uma disciplina</option>
                        <option value="0">Biologia</option>
                        <option value="1">Filosofia</option>
                        <option value="2">Física</option>
                        <option value="3">Geografia</option>
                        <option value="4">História</option>
                        <option value="5">Literatura</option>
                        <option value="6">Matemática</option>
                        <option value="7">Português</option>
                        <option value="8">Química</option>
                        <option value="9">Sociologia</option>
                        <option value="10">Espanhol</option>
                        <option value="11">Inglês</option>
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




            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>