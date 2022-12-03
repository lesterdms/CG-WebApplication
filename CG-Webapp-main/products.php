<?php 
include('functions/userfunctions.php'); 
include('includes/header.php');

if(isset($_GET['category']))
{

    $category_slug = $_GET['category'];
    $category_data = getSlugActive("category",$category_slug);
    $category = mysqli_fetch_array($category_data);

    if($category)
    {
        $cid = $category['id'];
        ?>

        <div class="py-3">
            <div class="container">
                <h6>
                    <a href="index.php">Home / </a>
                    <a href="category.php">Collections /</a> 
                    <?= $category['category_name']; ?></h6>
            </div>
        </div>
            
        <div class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?= $category['category_name']; ?></h2>
                        <hr>
                        <div class="row">
                            <?php
                                $products = getProdByCategory($cid);
                                if(mysqli_num_rows($products) > 0){
                                    foreach($products as $item){
                                        ?>
                                            <div class="col-md-3 mb-2">
                                                <a href="viewproduct.php?product=<?= $item['slug']; ?>">
                                                    <div class="card shadow">
                                                        <div class="card-body">
                                                            <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100">
                                                            <h4 class="text-center"><?= $item['name']; ?></h4>
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
            
        <?php
    }
    else
    {
        echo "Something went wrong";
    }
}
else
{
    echo "Something went wrong";
}
include('includes/footer.php');  ?>   