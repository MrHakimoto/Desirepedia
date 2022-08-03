<!-- 
    Todas as provas serão mostradas aqui!
-->

<?php

try {
    $con = new PDO("sqlite:../db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}

session_start();

$prova_escolhida = $_GET['resolver'];

$sql_prova = "SELECT * FROM " . $prova_escolhida;
$ir = $con->prepare($sql_prova);

// Execute statement.
$ir->execute(); // ID between 1 and 3.

// Get the results.
$iremos = $ir->fetchAll(PDO::FETCH_ASSOC);

//$prova = $_GET['prova'];

//$sql = "SELECT * FROM" . $prova;



?>


<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/nav.css">
    <style>
        .alternate {
            border: 1px solid #084d6e;
            border-radius: 50%;
            color: #084d6e;
            display: inline-block;
            font-size: 12px;
            font-weight: 600;
            height: 32px;
            line-height: 30px;
            margin-right: 15px;
            min-width: 32px;
            text-align: center;
            text-transform: uppercase;
            transition: .15s ease-in-out;
            width: 32px;
            float: left;
            box-sizing: border-box;
            background-color: white;

        }

        .alternate:hover {
            background-color: #084d6e;
            color: white;
        }

        .alternativate label:hover~.alternate {
            background-color: #084d6e;
            color: white;
        }
    </style>
</head>


<body>
    <?php

    include_once('../include/navbar.php');

    ?>

    <br><br><br><br>


    <div class="container">

        <h1 class="display-1">Prova</h1>



        <div class="row">

            <div class="col-md-9 col-sm-9 col-xs-12">
                <?php
                foreach ($iremos as $row) {
                    //print_r($row);

                    $global = $row['q_global'];

                    $n_questao = $row['q_num'];

                    $enunciado = $row['q_enum'];

                    $value_a = $row['q_alt_a'];
                    $value_b = $row['q_alt_b'];
                    $value_c = $row['q_alt_c'];
                    $value_d = $row['q_alt_d'];
                    $value_e = $row['q_alt_e'];

                    $correto = $row['q_correct'];


                    echo
                    "
    <div class='card mb-3'>
        <div class='card-header'>
            Questão $n_questao <br> <small class=''> $global </small>
        </div>
        <div class='card-body'>

            <h5 class='card-title'>Special title treatment</h5>
            <p class='card-text'> $enunciado </p>


            <div class='card p-2'>
                <div class='row mb-1 alternativate'>
                    <label for='alt_A_$global' class='p-1' >
                    <div class='p-2' id='label_A_$global'>
                    <input id='alt_A_$global' class='d-none' onclick='questionALT(this)' type='radio' name='opcao_$global' value='A'>
                    <span class='alternate' id='bonitim_A_$global'>A</span>

                    <div> $value_a </div>
                    </div>
                    </label>
                    </div>

                    <div class='row mb-1 alternativate'>
                    <label for='alt_B_$global' class='p-1' >
                    <div class='p-2' id='label_B_$global'>
                    <input id='alt_B_$global' class='d-none' onclick='questionALT(this)' type='radio' name='opcao_$global' value='B'>
                    <span class='alternate' id='bonitim_B_$global'>B</span>

                    <div> $value_b </div>
                    </div>
                    </label>
                    </div>

                    <div class='row mb-1 alternativate'>
                    <label for='alt_C_$global' class='p-1' >
                    <div class='p-2' id='label_C_$global'>
                    <input  id='alt_C_$global' class='d-none' onclick='questionALT(this)' type='radio' name='opcao_$global' value='C'>
                    <span class='alternate' id='bonitim_C_$global'>C</span>

                    <div> $value_c </div>
                    </div>
                    </label>
                    </div>

                    <div class='row mb-1 alternativate'>
                    <label for='alt_D_$global' class='p-1' >
                    <div class='p-2' id='label_D_$global'>
                    <input id='alt_D_$global' class='d-none' onclick='questionALT(this)' onclick='' type='radio' name='opcao_$global' value='D'>
                    <span class='alternate' id='bonitim_D_$global'>D</span>

                    <div> $value_d </div>
                    </div>
                    </label>
                    </div>
                    
                    <div class='row mb-1 alternativate'>
                    <label for='alt_E_$global' class='p-1' >
                    <div class='p-2' id='label_E_$global'>
                    <input id='alt_E_$global' class='d-none' onclick='questionALT(this)' onclick='' type='radio' name='opcao_$global' value='E'>
                    <span class='alternate' id='bonitim_E_$global'>E</span>

                    <div> $value_e </div>
                    </div>
                    </label>
                    </div>
                </div>

        <buttom  id='btn_S_$global' onclick='conferir(this)' class='btn btn-outline-info mt-3'> Responder </buttom>
    </div>
</div>


";
                }
                ?>


                <div class="col-md-3 col-sm-3 col-xs-12 d_questoes_lateral print_no">
                    <p>Vera est</p>
                </div>





            </div>


        </div>
        <script>
            const alternatives = ['A', 'B', 'C', 'D', 'E'];

            function questionALT(x) {
                let valore = x.id
                var number = valore.slice(6, 11)
                // console.log(valore)
                // console.log(valore.length)
                // console.log(valore.slice(6,11))

                alternatives.forEach((v) => {
                    if ($(`#alt_${v}_${number}`).is(':checked')) {
                        console.log("deu bom", v)
                        $(`#bonitim_${v}_${number}`).css('background', '#084d6e');
                        $(`#bonitim_${v}_${number}`).css('color', 'white');
                    } else {
                        console.log("deu ruim", v)
                        $(`#bonitim_${v}_${number}`).css('background', 'none');
                        $(`#bonitim_${v}_${number}`).css('color', '#084d6e');
                    }
                })


            }

            var marcado

            function conferir(b) {
                let valore = b.id
                var number = valore.slice(6, 11)
                // console.log(valore)
                // console.log(valore.length)
                // console.log(valore.slice(6,11))

                alternatives.forEach((v) => {
                    if ($(`#alt_${v}_${number}`).is(':checked')) {
                        console.log("deu bom", v)
                        marcado = v;
                        var test = "<?php echo $prova_escolhida; ?>";
                        $.ajax({
                            url: "http://localhost/Desirepedia/view/conferir.php",
                            method: "POST",
                            data: {
                                prova: test,
                                aternativa: marcado,
                                questao: number
                            },
                            dataType: "json"
                        }).done(function(r) {
                            // $('#campo').val("");
                            // $('#comment').val("");
                            // chama();
                            console.log(r[0])
                            if (r[0]) {
                                $(`#label_${v}_${number}`).css('background', 'green');
                                block(number)
                            } else {
                                $(`#label_${r[1]}_${number}`).css('background', 'green');
                                $(`#label_${v}_${number}`).css('background', 'red');
                                block(number)
                            }


                        })

                    }
                })
                console.log(number);
                console.log(marcado)
                // var test = "<?php echo "enem_ppl_2018"; ?>";
                // $.ajax({
                //     url: "http://localhost/Desirepedia/view/conferir.php",
                //     method: "POST",
                //     data: {
                //         prova: test,
                //         aternativa: marcado,
                //         questao: number
                //     },
                //     dataType: "json"
                // }).done(function(r) {
                //     // $('#campo').val("");
                //     // $('#comment').val("");
                //     // chama();
                //     console.log(r)
                // })

            }

            function block(f) {
                alternatives.forEach((v) => {
                    $(`#alt_${v}_${f}`).attr('disabled', 'disabled');
                })
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>

<!--

 <div class="card">
                    <div class="card-header">
                        Questão < echo $n_questao; ?>
                    </div>
                    <div class="card-body">

                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text"> < echo $enunciado ?> </p>


                    <div class="card p-2">
                        <div class="row mb-1">
                        <label for="alt_A_02204" class="p-3">
                        <input id="alt_A_02204" class="d-none" onclick="questionALT(this)" type="radio" name="opcao_123" value="A">
                        <span class="alternate" id="bonitim_A_02204">A</span>

                        <div> < echo $value_a; ?> </div>
                        </label>
                        </div>

                        <div class="row mb-1">
                        <label for="alt_B_02204" class="p-3">
                        <input id="alt_B_02204" class="d-none" onclick="questionALT(this)" type="radio" name="opcao_123" value="B">
                        <span class="alternate" id="bonitim_B_02204">B</span>

                        <div> < echo $value_b; ?> </div>
                        </label>
                        </div>
                        <div class="row mb-1">
                        <label for="alt_C_02204" class="p-3">
                        <input  id="alt_C_02204" class="d-none" onclick="questionALT(this)" type="radio" name="opcao_123" value="C">
                        <span class="alternate" id="bonitim_C_02204">C</span>

                        <div> < echo $value_c; ?> </div>
                        </label>
                        </div>
                        <div class="row mb-1">
                        <label for="alt_D_02204" class="p-3">
                        <input id="alt_D_02204" class="d-none" onclick="questionALT(this)" onclick="" type="radio" name="opcao_123" value="D">
                        <span class="alternate" id="bonitim_D_02204">D</span>

                        <div> echo $value_d; ?> </div>
                        </label>
                        </div>
                        
                        <div class="row mb-1">
                        <label for="alt_E_02204" class="p-3">
                        <input id="alt_E_02204" class="d-none" onclick="questionALT(this)" onclick="" type="radio" name="opcao_123" value="E">
                        <span class="alternate" id="bonitim_E_02204">E</span>

                        <div>  echo $value_e; ?> </div>
                        </label>
                        </div>
                        </div>
                        </div>

                        <a href="#" class="btn btn-primary"> Responder </a>
                    </div>
                </div>
            </div>
        </div>
        ==>