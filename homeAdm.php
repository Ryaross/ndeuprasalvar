<?php
include('biblioteca.php');
?>

<form method="post" id="novoGenero">
    <fieldset>
        <legend> Novo Gênero</legend>
        Nome: <input type="text" name="genero"><br>
        <button>Cadastrar </button>
</fieldset>
</form>
<?php
    if(isset($_POST['genero'])){
        CadastrarGenero($_POST['genero']);
    }
    ?>
    <h1> Gêneros Cadastrados</h1>
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
        MostrarGenero();
        echo "
        </table>";
    
?>

