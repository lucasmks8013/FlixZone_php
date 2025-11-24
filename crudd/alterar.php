 <?php if( !isset($_SESSION["filmes"]) ) : ?>
            <blockquote>Nenhum filme adicionado</blockquote>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>|Id|</th>
                        <th>|Nome|</th>
                        <th>|Lançamento|</th>
                        <th>|Gênero|</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="informacoes">
                    <?php for( $i=0; $i < count($_SESSION["filmes"]); $i++) : ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= $_SESSION["filmes"][$i]["titulo"] ?></td>
                            <td><?= $_SESSION["filmes"][$i]["anoLancamento"] ?></td>
                            <td><?= $_SESSION["filmes"][$i]["generoFilme"] ?></td>
                            <td id="btn-apagar" onclick='apagar("<?= $_SESSION["filmes"][$i]["titulo"] ?>", <?= $i ?>)'>✂️</td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
            <button onclick="apagarTudo()">Excluir lista de filmes</button>
        <?php endif ?>
    </div>

    <script>
        function apagar(nome,id) {
            if(confirm("Excluir " + nome + "?")) {
                window.location.href="apagar_item.php?id=" + id;
            }
        }

        function apagarTudo() {
            if(confirm("Excluir todos os itens abaixo?")) {
                window.location.href="limpar_lista.php";
            }
        }
    </script>
