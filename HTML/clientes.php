<?php include_once "head.php"; 

require_once "../PHP/conexao.php";

$conexao = new Conexao();

$sql = "SELECT * FROM cadastro_user";

$stmt = $conexao->executarQuery($sql);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<header>
    <h3>Visualize o cadastro dos clientes</h3>
<p>Atualize e exclua o cadastro dos clientes</p>
</header>
<hr color="white">
<main>
    <table>
        <thead>
            <tr>
                <th>Id do cliente</th>
                <th>Nome do Cliente</th>
                <th>Email do cliente</th>
            </tr>
        </thead>

        <tbody>
<?php if ($stmt->rowCount() > 0) {
    foreach ($resultado as $row) { ?>
        <tr>
            <td><?php echo $row['id_user']; ?></td>
            <td><?php echo $row['nome_user']; ?></td>
            <td><?php echo $row['email_user']; ?></td>
            <td class="icon">
                <a id="atualizar" class="icon" href="javascript:void(0);" onclick="redirecionar('<?php echo $row['id_user']; ?>');">
                    <img src="../images/atualizar.png" alt="atualizar" width="32px">
                </a>
            </td>
            <td class="icon">
                <a id="excluir" class="icon">
                    <img src="../images/excluir.png" alt="excluir" width="32px">
                </a>
            </td>
        </tr> 
    <?php }
} else {
    echo "Nenhum registro encontrado";
} ?>

        </tbody>
    </table>

    <script>
    document.getElementById('excluir').onclick = function() {
        Swal.fire({
            title: 'Você tem certeza ?',
            text: "Não será possível reverter esta ação !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, deletar !'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../PHP/excluir_usuario.php?id_user=<?php echo $row['id_user'];?>";
               
            }
        })
    }



    function redirecionar(id) {
    window.parent.location.href = "atualizar-Cliente.php?id_user=" + id;
}
</script>


</main>


