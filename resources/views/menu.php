<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
        body{
            font-family: 'Ubuntu', sans-serif;
        }
        
        /* div{
            border: solid 1px black
        }  */
        
    </style>
</head>
<body>
    
    <div class=container>
        <div class="row"><h1>Página inicial</h1></div>

        <div class="mx-auto" style="width:200px; height:500px;">
                <div class="mt-5 mb-5">
                <div class="btn-group-vertical" role="group">
                    <form method="GET" action="soma"><button type="submit" class="btn btn-dark">Somar</button></form>
                    <form method="GET" action="subtracao"><button type="submit" class="btn btn-dark">Subtrair</button></form>
                    <form method="GET" action="multiplicacao"><button type="submit" class="btn btn-dark">Multiplicar</button></form>
                    <form method="GET" action="divisao"><button type="submit" class="btn btn-dark">Dividir</button></form>
                </div>     

            </div>
        </div>
        
        <div style="height: 50px; background-color: rgb(242, 242, 242); border: solid 1px black;"class="d-flex justify-content-center">Todos os direitos reservados - Pedro Lucas Oliveira Parêde</div>
        
         
    </div>
</body>
</html>