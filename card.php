<?php
include __DIR__ . '/DB.php';
include __DIR__ . '/sqlFuncties.php';

function cardTemplate($productID, $productName, $productPrice, $description)
{
    ?>
    <link rel="stylesheet" href="css/custom.css"/>
        <div class="col-lg-3">
            <div class="card h-100">
                <img class="card-img-top" src="images/no-image.jpg" alt="Card image cap">
                <div class="card-body">
                    <div class="card-title">
                        <h5><?php echo $productName ?></h5>
                    </div>
                    <div class="card-text">
                        <?php echo $description; ?>
                    </div>
                    <div class="card-text text-danger align-bottom">
                        <?php echo "€ " . $productPrice; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
}

?>
