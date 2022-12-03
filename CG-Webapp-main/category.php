<?php 
include('functions/userfunctions.php'); 
include('includes/header.php');
?>

<div class="py-3">
    <div class="container">
        <h6>Home / Collections</h6>
    </div>
</div>
    
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Menu</h1>
                <hr>
                <div class="row">
                    <?php
                        $category = getAllActive("category");
                        if(mysqli_num_rows($category) > 0){
                            foreach($category as $item){
                                ?>
                                    <div class="col-md-3 mb-2">
                                        <a href="products.php?category=<?= $item['slug']; ?>">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <img src="uploads/<?= $item['category_image']; ?>" alt="Category Image" class="w-100">
                                                    <h4 class="text-center"><?= $item['category_name']; ?></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    

                                <?php
                            }
                        }
                        else{
                            echo "No data available";
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
<?php include('includes/footer.php');  ?>   