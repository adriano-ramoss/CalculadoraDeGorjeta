<?php 

include_once 'Conta.php';


if(isset($_POST['valor'])){
    
$valor = $_POST['valor'];
$gorjeta = $_POST['gorjeta'];


$conta = new Conta();

$conta->setValor($valor);
$conta->setGorjeta($gorjeta);



$valor = $conta->getValor() * $conta->getGorjeta();
$gorjeta = ($conta->getValor() * $conta->getGorjeta()) - $conta->getValor();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora De Gorjeta</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    <div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center m-4">Calculadora De Gorjeta</h2>
            <form method="POST">
                
                <div class="form-group">
                    <label for="valor">Valor Da Conta:</label>
                    <input type="number" name="valor" autocomplete="on" class="form-control"  >
                </div>

                <div class="form-group">
                    <label for="mensagem">Gorjeta:</label>
                        <select name="gorjeta" class="form-control">
                            <option value="1.10">Excelente – 10%</option>
                            <option value="1.08">Ótimo – 8%</option>
                            <option value="1.05">Bom – 5%</option>
                            <option value="1.02">Ruim – 2%</option>
                        </select>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>

                <div class="form-group">
                       <label for="Valor da Gorjeta" class="mt-5">Valor da Gorjeta</label>
                        <input type="number" autocomplete="off" class="form-control" value="<?= $gorjeta ?>" name="valor" disabled="">
        
                        <label for="Valor total" class="mt-2">Valor Total</label>
                        <input type="number" autocomplete="off" class="form-control" value="<?= $valor ?>" name="gorjeta" disabled="">
                   </div>
            </form>
        </div>
    </div>
</div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>