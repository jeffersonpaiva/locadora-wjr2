<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT LOC_CODIGO, CAR_MODELO, CLI_NOME, LOC_DATA_LOCACAO, LOC_DATA_ENTREGA, LOC_CAR_CODIGO, LOC_CLI_CODIGO, LOC_FUN_CODIGO, FUN_FUNCIONARIO, PAGAMENTO_PAGAMENTO, LOC_ODOMETRO_INICIAL, LOC_ODOMETRO_FINAL
    FROM tb_locacoes 
    inner join tb_carros c on LOC_CAR_CODIGO = CAR_CODIGO
    inner join tb_clientes  on CLI_CODIGO = LOC_CLI_CODIGO
    inner join tb_funcionarios  on FUN_CODIGO = LOC_FUN_CODIGO
    inner join tb_forma_pagamento on PAGAMENTO_CODIGO = LOC_PAGAMENTO_CODIGO");
?>

<body>

    <div class="container">

        <div class="card">
            <div class="card-header">
                Locações em andamento
            </div>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Data da locação</th>
                        <th>Carro</th>
                        <th>Odômetro inicial</th>
                        <th>Cliente</th>
                        <th>Forma de Pagamento</th>
                        <th>Funcionário</th>                
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($locacao = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr>
                            <td>
                                <?php echo $locacao['LOC_CODIGO']; ?>
                            </td>
                            <td>
                                <?php echo $locacao['LOC_DATA_LOCACAO']; ?>
                            </td>
                            <td>
                                <?php echo $locacao['CAR_MODELO']; ?>
                            </td>
                            <td>
                                <?php echo $locacao['LOC_ODOMETRO_INICIAL'].' Km'; ?>
                            </td>
                            <td>
                                <?php echo $locacao['CLI_NOME']; ?>
                            </td>
                            <td>
                                <?php echo $locacao['PAGAMENTO_PAGAMENTO']; ?>
                            </td>
                            <td>
                                <?php echo $locacao['FUN_FUNCIONARIO']; ?>
                            </td>
                            <td>
                                <a href=<?php echo "/locadora/?pagina=app/paginas/locacoes/exclusao.php&loc_codigo={$locacao['LOC_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="card-footer">
                <a href=<?php echo "/locadora/?pagina=app/paginas/locacoes/cadastro.php"; ?> class="btn btn-primary btn-sm">Nova locação</a>
            </div>
        </div>
    </div>