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




<div class="container mt-4 mb-4">
    <div class="border bg-dark">as</div>
    <!--Bootstrap classes arrange web page components into columns and rows in a grid -->
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-8">
            <input type="text" id="prova" value="<?php echo $_GET['test']; ?>" readonly style="display: block;"> <br>
            <h1 class="h2 mb-4">Editando> Quest??o <?php echo $n_questao; ?></h1>
            <label>Describe the issue in detail</label>
            <div class="form-group" class="border border-primary">
                <form action="" method="POST" id="alter-question">
                    <div class="my-5">
                        <p>Enunciado</p>
                        <textarea name="enun" id="enunciado"> <?php echo $enunciado; ?> </textarea>
                    </div>
                    <div class="my-5">
                        <p>Alternativa A:</p>
                        <input type="text" id="altA" name="alA" value="<?php echo $value_a; ?>">
                    </div>

                    <div class="my-5">
                        <p>Alternativa B:</p>
                        <input type="text" id="altB" name="alB" style="height:170px;" value="<?php echo $value_b; ?>">
                    </div>

                    <div class="my-5">
                        <p>Alternativa C:</p>
                        <input type="text" id="altC" name="alC" value="<?php echo $value_c; ?>">
                    </div>

                    <div class="my-5">
                        <p>Alternativa D:</p>
                        <input type="text" id="altD" name="alD" value="<?php echo $value_d; ?>">
                    </div>

                    <div class="my-5">
                        <p>Alternativa E:</p>
                        <input type="text" id="altE" name="alE" value="<?php echo $value_e; ?>">
                    </div>

                    <br>
                    <div class="my-5">
                        <p>Alternativa Correta: </p>
                        <p> <label for="alternativa_A" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_A" value="A" <?php if (isset($certo_a)) { echo $certo_a; } ?>> Alternativa A
                            </label> </p>
                        <p> <label for="alternativa_B" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_B" value="B" <?php if (isset($certo_b)) { echo $certo_b; } ?>> Alternativa B
                            </label> </p>
                        <p> <label for="alternativa_C" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_C" value="C" <?php if (isset($certo_c)) { echo $certo_c; } ?>> Alternativa C
                            </label> </p>
                        <p> <label for="alternativa_D" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_D" value="D" <?php if (isset($certo_d)) { echo $certo_d; } ?>> Alternativa D
                            </label> </p>
                        <p> <label for="alternativa_E" class="d-block p-2">
                                <input class="mr-1" type="radio" name="alt" id="alternativa_E" value="E" <?php if (isset($certo_e)) { echo $certo_e; } ?>> Alternativa E
                            </label> </p>
                    </div>
            </div>




            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

<script>
   $("#alter-question").submit(function(e){
        e.preventDefault();
        
        var prova = $('#prova').val(); 

        var num = "<?php echo $n_questao; ?>";
        var enunciado = $('#enunciado').val();
        var altA = $('#altA').val();
        var altB = $('#altB').val();
        var altC = $('#altC').val();
        var altD = $('#altD').val();
        var altE = $('#altE').val();
        
        var correct = $("input[name='alt']:checked").val();
        
        $.ajax({
            url: "http://localhost/Desirepedia/admin/includes/operatorEditing.php",
            method: "POST",
            data: {
                prova: prova,
                num: num,
                enunciado: enunciado,
                altA: altA,
                altB: altB,
                altC: altC,
                altD: altD,
                altE: altE,
                correct: correct
            },
            dataType: "json"
        }).done(function(r){

        })
    })

</script>