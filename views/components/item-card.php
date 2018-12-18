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
                       <a href="#" class="btn btn-success">Buy</a>
                    <?php } else if ($location == '/cart') { ?>
                        <a href="#" class="btn btn-danger">Delete</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        console.log('ready!');
    });
    // $.post('/foo.php', { key1: 'value1', key2: 'value2' }, function(result) {
    //     alert('successfully posted key1=value1&key2=value2 to foo.php');
    // });
</script>
