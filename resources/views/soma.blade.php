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
    </style>
</head>
<body>
    
    <div class = "container">
        
        <div class="row mt-2"> Cabeçalho</div>
        
        <div class="row"> <h1>Calculadora</h1></div>

        <div class= "row mt-2">
            
            <div class="row">
                <form>
                    <div class="mb-3 mt-2">
                        <label for="primeiroValor" class="form-label">Primeiro valor</label>
                        <input type="number" class="form-control" id="primeiroValor" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="segundoValor" class="form-label">Segundo valor</label>
                        <input type="number" class="form-control" id="segundoValor">
                    </div>
                    <button type="soma" class="btn btn-primary">Somar</button>
                </form>
            </div>
            
        </div>
        <div class="row mt-2">
            rodapé
        </div>        

    </div>
    
</body>
</html>