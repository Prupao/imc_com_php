<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="IMC.css">
    <title> IMC</title>
</head>

<body>
    <?php
        $imc = 0.0;
        $escreva = null;
        if (isset($_POST["Peso"], $_POST["Altura"], $_POST["sexo"])) {
        $altura = $_POST["Altura"];
        $peso = $_POST["Peso"];
        $operacao = $_POST["sexo"];
        switch ($operacao) {
            case 1:
                $imc = $peso / ($altura * $altura);
                if ($imc < 20) {
                    $escreva =  "Abaixo do normal";
                } else if ($imc >= 20 && $imc <= 24.9) {
                    $escreva = "Normal";
                } else if ($imc >= 25 && $imc <= 29.9) {
                    $escreva = "Obesidade Leve";
                } else if ($imc >= 30 && $imc <= 39.9) {
                    $escreva = "Obesidade Moderada";
                } else if ($imc >= 40) {
                    $escreva = "Obesidade Mórbida";
                } else {
                    $escreva = "Impossível calcular, por gentileza informar valores corretamente";
                }
                break;
            case 2:
                $imc = $peso / ($altura * $altura);
                if ($imc < 19) {
                    $escreva =  "Abaixo do normal";
                } else if ($imc >= 19 && $imc <= 23.9) {
                    $escreva = "Normal";
                } else if ($imc >= 24 && $imc <= 28.9) {
                    $escreva = "Obesidade Leve";
                } else if ($imc >= 29 && $imc <= 38.9) {
                    $escreva =  "Obesidade Moderada";
                } else if ($imc >= 39) {
                    $escreva = "Obesidade Mórbida";
                } else {
                    $escreva = "Impossível calcular, por gentileza informar valores corretamente";
                }
                break;
        }
    }

    echo ("<br/>");
    ?>

    <fieldset>
        <div class="titulo-da-pagina">
            <h1>IMC NA RAÇA</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="imc">
                    <form action="index2.php" method="post">
                        <Label for="altura">Altura:</Label>
                        <input type="text" placeholder="Digite sua altura.." name="Altura" id="altura">
                        <br><br>
                        <Label for="peso">Peso:</Label>
                        <input type="text" placeholder="Digite seu peso..." name="Peso" id="peso">
                        <br><br>
                        <label for="sex">Sexo:</label>
                        <select name="sexo" id="sex">
                            <option value="1" selected>Masculino</option>
                            <option value="2">Feminino</option>
                        </select>
                        <input type="submit" name="submit">
                        <input type="reset" name="reset">
                        <br><br>
                    </form>
                </div>
                <p><?php echo("IMC é {$imc} <br/> Tipo é {$escreva}") ?></p>
            </div>
        </div>
    </fieldset>

</body>

</html>