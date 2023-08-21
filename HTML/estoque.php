<?php include_once "head.php"; 
require_once "../PHP/conexao.php";

$conexao = new Conexao();

$sql = "SELECT * FROM cadastro_produto";

$stmt = $conexao->executarQuery($sql);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <section>
        <h2>Visualize aqui todos os produtos disponíveis em estoque !</h2>
    </section>
</main>

<hr color="white">
<main>
    <table>
        <thead>
            <tr>
                <th>Id do Produto</th>
                <th>Nome</th>
                <th>Data de Validade</th>
                <th>Preço</th>
            </tr>
        </thead>

        <tbody>
        <?php if($stmt->rowCount() > 0){
                            foreach($resultado as $row){ ?>
                                
                                <tr>
                                <td><?php echo $row['id_produto']; ?></td>
                                <td><?php echo $row['nome_produto']; ?></td>
                                <td><?php echo $row['validade_produto']; ?></td>
                                <td><?php echo $row['preco_produto']; ?></td>
                                <td class = "icon"><a id="atualizar"class = "icon" href="../PHP/atualizar_produto.php?id_produto=<?php
                                echo $row['id_produto']; ?>"><img src="../images/atualizar.png" alt="atualizar" width="32px"></a></td>
                                <td class = "icon"><a id="excluir" class = "icon" ><img src="../images/excluir.png" alt="excluir" width="32px"></a></td>
                                </tr> 
                                <?php }
                            }
                        else{
                            echo "Nehum registro encontrado";
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
                window.location.href = "../PHP/excluir_produto.php?id_produto=<?php echo $row['id_produto'];?>";
               
            }
        })
    }
</script>

</main>
