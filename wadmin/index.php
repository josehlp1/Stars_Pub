<?php
include_once("inc/scripts/conexao.php");
include_once("inc/header.php");

?>
</script>

<main>
    <div class="container">
        <div>
            <br>
            <br>
            <h1>Adicionar Produto</h1>
            <form class="form-register-product" action="inc/scripts/register_product.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input name="product_name" type="text" class="form-control" placeholder="Nome do produto">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Descrição:</label>
                    <input name="product_desc" type="text" class="form-control" placeholder="Desc do produto">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Preço:</label>
                    <input name="product_price" type="text" class="form-control" placeholder="Preço">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Img URL:</label>
                    <input type="text" name="product_img" class="form-control" placeholder="IMG">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <div>
            </form>
        </div>
        <br>
        <hr>
        <h1>Lista de Produtos</h1>

        <table class="table table-products" style="text-align: center;">
            <tr style=" font-size: 20px; color: #f89500; ">
                <td>Imagem</td>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Preço</td>
            </tr>

            <?php
            $sql_list_product = "SELECT * FROM sp_products";
            $sql_list = mysqli_query($conn, $sql_list_product);
            while ($row = $sql_list->fetch_array()) {
            ?>
                <tr style=" border-top: 1px solid #f89500; ">
                    <td><img src="<?php echo $row['product_img']; ?>" style="width: 75px;"></td>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['product_desc']; ?></td>
                    <td><?php echo $row['product_price']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </div>
</main>

<?php include_once("inc/footer.php"); ?>