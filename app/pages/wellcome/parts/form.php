<?php


// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo valor foi enviado
    if (isset($_POST["valor"])) {
        // Armazena o valor enviado na variável de sessão
        $_SESSION["meu_valor"] = $_POST["valor"];
    }
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="valor">Digite um valor:</label><br>
        <input type="text" id="valor" name="valor"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Exibe o valor armazenado na variável de sessão, se existir
    if (isset($_SESSION["meu_valor"])) {
        echo "O valor armazenado na variável de sessão é: " . $_SESSION["meu_valor"];
    }
    ?>
