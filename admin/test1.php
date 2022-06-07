<?php




?>
<head>
<script src="https://cdn.tiny.cloud/1/9m7br97tvi49do4krkoz9z47u4t5vto64qqgrfcty65xqocr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<form action="" id="form1">

    <p>Nome</p>
    <input type="text" id="campo"> <br>
    <p>Comentario</p>
    <input type="text" id="comment"> <br>


    <input type="submit" form="form1" value="Enviar">
</form>

<div class="container" >
<table class="table" id="content">




</table>




</div>



<script>


    $("#form1").submit(function(e){
        e.preventDefault();
        comment
        var campo = $('#campo').val();
        var comment = $('#comment').val();
        console.log(campo);
        $.ajax({
            url: "http://localhost/Desirepedia/admin/test11.php",
            method: "POST",
            data: {name: campo, comentario: comment},
            dataType: "json"
        }).done(function(r){
            $('#campo').val("");
            $('#comment').val("");
            chama();
            console.log(r)
        })
    })

    function chama() {
        $.ajax({
            url: "http://localhost/Desirepedia/admin/test111.php",
            method: "GET",
            dataType: "json"
        }).done(function(r){
            console.log(r)
            for(var i = 0; i < r.length; i++){
            $('#content').prepend('<tr><td>' + r[i].nome + '</td><td> ' + r[i].comentario + '</td></tr>');
            }

        })
    }
    chama();
</script>
