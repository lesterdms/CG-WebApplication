<?php 
include('functions/userfunctions.php');
include('includes/header.php');
include('includes/slider.php');

?>
    
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
                <h4>Popular Dish</h4>
                <div class="mb-2"></div>
                <div class="owl-carousel">
                    <?php 
                        $popularProducts = getAllPopular();
                        if(mysqli_num_rows($popularProducts) > 0){
                            foreach ($popularProducts as $item) {
                                ?>
                                    <div class="item">
                                        <a href="viewproduct.php?product=<?= $item['slug']; ?>">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                                                    <h6 class="text-center"><?= $item['name']; ?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="py-5 bgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
                <h4>About Us</h4>
                <div class="mb-2"></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis sapiente error voluptates nulla, repellendus doloribus dolorum corrupti alias reprehenderit mollitia!
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis sapiente error voluptates nulla, repellendus doloribus dolorum corrupti alias reprehenderit mollitia!
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis sapiente error voluptates nulla, repellendus doloribus dolorum corrupti alias reprehenderit mollitia!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="text-white">Chubby Gourmet</h4>
                <div class="mb-2"></div>
                <a href="index.php" class="text-white"><i class="fa fa-angle-right"></i> Home</a> <br>
                <a href="#" class="text-white"><i class="fa fa-angle-right"></i> About Us</a> <br>
                <a href="category.php" class="text-white"><i class="fa fa-angle-right"></i> Menu</a> <br>
                <a href="cart.php" class="text-white"><i class="fa fa-angle-right"></i> Cart</a> <br>
            </div>
            <div class="col-md-3 text-white">
                <h4>Address</h4>
                <p>
                    Laguna
                </p>
                <a href="tel: +6309123456789" class="text-white"><i class="fa fa-phone"> +63 912 345 6789</i></a> <br>
                <a href="mailto: chubbygourmet@gmail.com" class="text-white"><i class="fa fa-envelope"> chubbygourmet@gmail.com</i></a>
            </div>
        </div>
    </div>
</div>
<div class="py-2 bg-success">
    <div class="text-center text-white">
        <p class="mb-0">All rights reserved. Copyright @ HighTable - <?= date('Y') ?></p>
    </div>
</div>
    
<?php include('includes/footer.php');  ?>   
<script>

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
});

</script>