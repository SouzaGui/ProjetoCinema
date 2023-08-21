<?php include_once "head.php"; 
    require_once "../PHP/conexao.php";

$conexao = new Conexao();

$sql = "SELECT * FROM cadastro_funcionario";

$stmt = $conexao->executarQuery($sql);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<header>
    <h3>Visualize o quadro de funcionários !</h3>
    <p>Atualize e delete os cadastros</p>
</header>


<hr color="white">
<main>
    <table>
        <thead>
            <tr>
                <th>Id do Funcionário</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>CPF</th>
            </tr>
        </thead>

        <tbody>
                  <?php if($stmt->rowCount() > 0){
                            foreach($resultado as $row){ ?>
                                
                                <tr>
                                <td><?php echo $row['id_funcionario']; ?></td>
                                <td><?php echo $row['nome_funcionario']; ?></td>
                                <td><?php echo $row['cargo_funcionario']; ?></td>
                                <td><?php echo $row['cpf_funcionario']; ?></td>
                                <td class = "icon"><a id="atualizar"class = "icon" href="../PHP/atualizar_filme.php?id_funcionario=<?php
                                echo $row['id_funcionario']; ?>"><img src="../images/atualizar.png" alt="atualizar" width="32px"></a></td>
                                <td class = "icon"><a id="excluirFuncionario" class = "icon" ><img src="../images/excluir.png" alt="excluir" width="32px"></a></td>
                                </tr> 
                                <?php }
                            }
                        else{
                            echo "Nehum registro encontrado";
                        } ?>

        </tbody>
    </table>

    <script>
    document.getElementById('excluirFuncionario').onclick = function() {
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
                window.location.href = "../PHP/excluir_funcionario.php?id_funcionario=<?php echo $row['id_funcionario'];?>";
               
            }
        })
    }
</script>


</main>
