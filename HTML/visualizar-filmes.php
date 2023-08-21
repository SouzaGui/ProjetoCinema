<?php include_once "head.php"; 

require_once "../PHP/conexao.php";

$conexao = new Conexao();

$sql = "SELECT * FROM cadastro_filme";

$stmt = $conexao->executarQuery($sql);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<header>
    <h3>Visualize os filmes cadastrados</h3>
    <p>Atualize informações sobre os filmes</p>
</header>


<hr color="white">
<main>
    <table>
        <thead>
            <tr>
                <th>Id do Filme</th>
                <th>Nome</th>
                <th>Gênero</th>
                <th>Elenco</th>
                <th>Faixa etária</th>
                <th>Data de Lançamento</th>
            </tr>
        </thead>

        <tbody>
        <?php if($stmt->rowCount() > 0){
                            foreach($resultado as $row){ ?>
                                
                                <tr>
                                <td><?php echo $row['id_filme']; ?></td>
                                <td><?php echo $row['nome_filme']; ?></td>
                                <td><?php echo $row['genero_filme']; ?></td>
                                <td><?php echo $row['elenco_filme']; ?></td>
                                <td><?php echo $row['data_lancamento_filme']; ?></td>
                                <td class = "icon"><a id="atualizar"class = "icon" href="../PHP/atualizar_filme.php?id_filme=<?php
                                echo $row['id_filme']; ?>"><img src="../images/atualizar.png" alt="atualizar" width="32px"></a></td>
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
                window.location.href = "../PHP/excluir_filme.php?id_filme=<?php echo $row['id_filme'];?>";
               
            }
        })
    }
</script>


</main>