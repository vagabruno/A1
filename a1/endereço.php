<?php
include('class/ClassEstados.php');
$objEstados = new ClassEstados();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, blue, orange);
            text-align: center;
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 100%;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
    <select name="estado" id="estado">
        <option value="">Selecione o Estado</option>
      <?php foreach ($objEstados->getEstados() as $estado) { ?>
            <option value="<?php echo $estado->id;  ?>"><?php echo $estado->nome; ?></option>
      <?php } ?>
    </select>

    <br><br>

    <select name="cidade" id="cidade" disabled="disabled">
        <option value="">Selecione a Cidade</option>
    </select>
    <script src="assets/js/javascript.js"></script>
    <br><br>
    <a href="index.php"><button>Enviar</button></a> </body>
      </div>
</body>
</html>