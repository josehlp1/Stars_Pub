<?php
include_once("inc/scripts/conexao.php");
include_once("inc/header.php");
?>
</script>

<main>


    <div class="container">
        <div class="row">
            <div class="col-sm-6 name-empresa">
                <h2 id="empresaName"></h2>
            </div>
            <div class="col-sm-6 row infos-empresa d-flex align-items-center">
                <div class="col-sm-4">
                    <p>TEMPO DE ENTREGA</p>
                    <p style="font-weight: bold;">A partir de 30 min</p>
                </div>
                <div class="col-sm-4">
                    <p>TAXA DE ENTREGA</p>
                    <p style="font-weight: bold;"> A partir de R$ 2,00</p>
                </div>
                <div class="col-sm-4">
                    <p>FECHADO</p>
                    <p style="font-weight: bold;">Abriremos às 18:30</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top:50px;">

        <?php
        $sql_list_product = "SELECT * FROM sp_products";
        $sql_list = mysqli_query($conn, $sql_list_product);
        
        while ($row = $sql_list -> fetch_array()) {
        ?>

            <div class="card col-sm-3" style="width: 18rem; margin:10px; margin-top:10px;">
                <img class="card-img-top" src="<?php echo $row['product_img']; ?>" alt="Card image cap">
                <div class="card-body" style="padding: 0px;">
                    <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                    <p class="card-text"><?php echo $row['product_desc']; ?></p>
                    <a href="#" class="btn btn-primary" style=" margin-bottom: 10px; ">Comprar - R$<?php echo $row['product_price']; ?>,00</a>
                </div>
            </div>
        <?php } ?>

        </div>


    </div>
</main>


<script>
    var app = document.getElementById('empresaName');

    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter.typeString("Star's Pub!")
        .pauseFor(2000)
        .deleteAll()
        .typeString('De dia!')
        .pauseFor(500)
        .deleteChars(5)
        .typeString(' noite!')
        .pauseFor(500)
        .start();
</script>

<?php
include_once("inc/footer.php");
?>