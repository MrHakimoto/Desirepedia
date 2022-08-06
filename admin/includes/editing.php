<?php
$sql_prova = "SELECT * FROM " . $_GET['test'] . " WHERE q_num=" . intval($_GET['q']);
$ir = $con->prepare($sql_prova);

// Execute statement.
$ir->execute(); // ID between 1 and 3.

// Get the results.
$iremos = $ir->fetchAll(PDO::FETCH_ASSOC);
foreach ($iremos as $row) {
    print_r($row);

    $n_questao = $row['q_num'];

    $enunciado = $row['q_enum'];

    $value_a = $row['q_alt_a'];
    $value_b = $row['q_alt_b'];
    $value_c = $row['q_alt_c'];
    $value_d = $row['q_alt_d'];
    $value_e = $row['q_alt_e'];

    switch ($row['q_correct']) {
        case "A":
            $certo_a = "checked";
            break;
        case "B":
            $certo_b = "checked";
            break;
        case "C":
            $certo_c = "checked";
            break;
        case "D":
            $certo_d = "checked";
            break;
        case "E":
            $certo_e = "checked";
            break;
    }
}




echo __DIR__;

?>

<script>
    tinymce.init({
        selector: 'textarea#enunciado',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 bold italic align fontsize fontfamily lineheight strikethrough blockquote bullist outdent indent forecolor backcolor | link image media | removeformat',
        color_map: [
            '000000', 'Black',
            '808080', 'Gray',
            'FFFFFF', 'White',
            'FF0000', 'Red',
            'FFFF00', 'Yellow',
            '008000', 'Green',
            '0000FF', 'Blue'
        ],
        line_height_formats: '0.5 1 1.2 1.4 1.6 2',
        menubar: false,

    });
    tinymce.init({
        selector: '#altA',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough align outdent indent blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
    tinymce.init({
        selector: '#altB',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough align outdent indent blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
    tinymce.init({
        selector: '#altC',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough align outdent indent blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
    tinymce.init({
        selector: '#altD',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough align outdent indent blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
    tinymce.init({
        selector: '#altE',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media',
        toolbar: 'h1 h2 bold fontsize italic strikethrough align outdent indent blockquote bullist numlist backcolor | link image media | removeformat',
        menubar: false,
        height: 150
    });
</script>




<div class="container mt-4 mb-4">
    <div class="border bg-dark">as</div>
    <!--Bootstrap classes arrange web page components into columns and rows in a grid -->
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-8">
            <input type="text" id="prova" value="<?php echo $_GET['test']; ?>" readonly style="display: block;"> <br>
            <h1 class="h2 mb-4">Editando> Questão <?php echo $n_questao; ?></h1>
            <label>Describe the issue in detail</label>
            <div class="form-group" class="border border-primary">
                <form action="operatorEditing.php" method="POST" id="alter-question-operating">
                    <input type="text" id="numero" name="num" value="<?php echo $n_questao; ?>" readonly style="display: block;"> <br>
                    <input type="text" id="prova" name="prova" value="<?php echo $_GET['test']; ?>" readonly style="display: block;"> <br>
                    <div class="my-5">
                        <p>Enunciado</p>
                        <textarea id="enunciado" name="enunciado"> <?php echo $enunciado; ?> </textarea>
                    </div>
                    <div class="my-5">
                        <p>Alternativa A:</p>
                        <textarea  name="altA" id="altA"><?php echo $value_a; ?></textarea>
                    </div>

                    <div class="my-5">
                        <p>Alternativa B:</p>
                        <textarea  name="altB" id="altB"><?php echo $value_b; ?></textarea>
                    </div>

                    <div class="my-5">
                        <p>Alternativa C:</p>
                        <textarea  name="altC" id="altC"><?php echo $value_c; ?></textarea>
                    </div>

                    <div class="my-5">
                        <p>Alternativa D:</p>
                        <textarea  name="altD" id="altD"><?php echo $value_d; ?></textarea>
                    </div>

                    <div class="my-5">
                        <p>Alternativa E:</p>
                        <textarea  name="altE" id="altE"><?php echo $value_e; ?></textarea>
                    </div>

                    <br>
                    <div class="my-5">
                        <p>Alternativa Correta: </p>
                        <p> <label for="alternativa_A" class="d-block p-2">
                                <input class="mr-1" type="radio" name="altCorret" id="alternativa_A" value="A" <?php if (isset($certo_a)) {
                                                                                                                    echo $certo_a;
                                                                                                                } ?>> Alternativa A
                            </label> </p>
                        <p> <label for="alternativa_B" class="d-block p-2">
                                <input class="mr-1" type="radio" name="altCorret" id="alternativa_B" value="B" <?php if (isset($certo_b)) {
                                                                                                                    echo $certo_b;
                                                                                                                } ?>> Alternativa B
                            </label> </p>
                        <p> <label for="alternativa_C" class="d-block p-2">
                                <input class="mr-1" type="radio" name="altCorret" id="alternativa_C" value="C" <?php if (isset($certo_c)) {
                                                                                                                    echo $certo_c;
                                                                                                                } ?>> Alternativa C
                            </label> </p>
                        <p> <label for="alternativa_D" class="d-block p-2">
                                <input class="mr-1" type="radio" name="altCorret" id="alternativa_D" value="D" <?php if (isset($certo_d)) {
                                                                                                                    echo $certo_d;
                                                                                                                } ?>> Alternativa D
                            </label> </p>
                        <p> <label for="alternativa_E" class="d-block p-2">
                                <input class="mr-1" type="radio" name="altCorret" id="alternativa_E" value="E" <?php if (isset($certo_e)) {
                                                                                                                    echo $certo_e;
                                                                                                                } ?>> Alternativa E
                            </label> </p>
                    </div>
            </div>




            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

<script>
    // $("#alter-question-operating").submit(function(e) {
    //     e.preventDefault();

    //     var prova = $('#prova').val();

    //     var num = "<?php echo $n_questao; ?>";
    //     var enunciado = $('#enunciado').val();
    //     var altA = $('#altA').val();
    //     var altB = $('#altB').val();
    //     var altC = $('#altC').val();
    //     var altD = $('#altD').val();
    //     var altE = $('#altE').val();

    //     console.log(prova)
    //     console.log(enunciado)

    //     var correct = $("input[name='altCorret']:checked").val();

    //     $.ajax({
    //         url: "http://localhost/Desirepedia/admin/operatorEditing.php",
    //         method: "POST",
    //         data: {
    //             prova: prova,
    //             num: num,
    //             enunciado: enunciado,
    //             altA: altA,
    //             altB: altB,
    //             altC: altC,
    //             altD: altD,
    //             altE: altE,
    //             altCorret: correct
    //         },
    //         dataType: "json"
    //     }).done(function(r) {
    //         console.log(r)
    //     })
    // })
</script>