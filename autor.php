<?php
include('biblioteca.php');
?>

<form method="post" id="novoAutor">
    <fieldset>
        <legend> Novo Autor</legend>
        Nome: <input type="text" name="autor"><br>
        <button>Cadastrar </button>
</fieldset>
</form>
<?php
    if(isset($_POST['autor'])){
        CadastrarAutor($_POST['autor']);
    }
    ?>
    <h1> Autores Cadastrados</h1>
    <table>
        <tr>
            <td>Nome</td>
            <td>#</td>
</tr>
<?php
        
        echo "<table>
        <tr>
        <th>Código</th>
        <th>Nome</th>
        </tr>
        ";
        MostrarAutor();
        echo "
        </table>";
    
?>