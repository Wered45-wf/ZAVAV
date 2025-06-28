<?php
include 'temp/headr.php';
$products_query = $conect->query('select * from tovar');
?>
<h3>Наши яхты</h3>
<div class="row">
    <?php while ($product = $products_query->fetch_array()): ?>
        
        <div class="col-4 card m-3" style="width: 18rem;">
            <div class="card-body">
                <img src="<?=$product['img']?>" width="100%" alt="">
                <h5 class="card-title"><?=$product['name_tovar']?></h5>
                <p class="card-text"><?=$product['price']?> руб.</p>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php
include 'temp/footer.php';
?>