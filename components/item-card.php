<div class="col-12 col-sm-6 col-md-4 col-xl-3 card-wrapper">
    <div class="card">
        <img class="card-img-top img-fluid" src="<?= $item['img']?>" alt="<?= $item['title']?>">
        <div class="card-body">
            <h5 class="card-title"><?= $item['title']?></h5>
            <p class="card-text">Price: <?= $item['price']?></p>
            <p class="simple-text">Material: <?= $item['material']?></p>
            <p class="simple-text">Sizes: <?= $item['sizes']?></p>
            <p class="card-text"><?= $item['description']?></p>
            <div class="row justify-content-between">
                <div class="col text-left">
                    <a href="/product?id=<?= $item['id']?>" class="btn btn-primary">Details</a>
                </div>
                <div class="col text-right">
                    <!-- using $location to switch buttons-->
                    <?php if($location == '/catalog') { ?>
                       <button id="<?= $item['id']?>" class="btn btn-success" onclick="addToCart(<?= $item['id']?>, <?= $_SESSION['user']['id']?>)">Buy</button>
                    <?php } else if ($location == '/cart') { ?>
                        <button id="<?= $item['id']?>" class="btn btn-danger" onclick="removeFromCart(<?= $item['id']?>, <?= $_SESSION['user']['id']?>)">Delete</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        this.addToCart = function(product_id, user_id) {
            $.post('sales/addToCart.php', {product_id: product_id, user_id: user_id}, function (result) {
                if(result) alert('added!');
            });
        };
        this.removeFromCart = function(product_id, user_id) {
            $.post('sales/removeFromCart.php', {product_id: product_id, user_id: user_id}, function (result) {
                if(result) alert('removed!');
            });
        }
    });
</script>
