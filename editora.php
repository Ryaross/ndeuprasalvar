<?php
include('biblioteca.php');
?>

<form method="post" id="novoEditora">
    <fieldset>
        <legend> Nova Editora</legend>
        Nome: <input type="text" name="editora"><br>
        <button>Cadastrar </button>
</fieldset>
</form>
<?php
    if(isset($_POST['editora'])){
        CadastrarEditora($_POST['editora']);
    }
    ?>
    <h1> Editores Cadastrados</h1>
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
        MostrarEditora();
        echo "
        </table>";
    
?>