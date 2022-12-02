<?php 
include('functions/userfunctions.php'); 
include('includes/header.php');
include('authenticate.php');

?>

<div class="py-3">
    <div class="container">
        <h6>
            <a href="index.php">Home / </a>
            <a href="checkout.php">Checkout</a>
        </h6>
    </div>
</div>
    
<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body shadow">
                <form action="functions/placeorder.php" method="POST">
                    <div class="row">
                        <div class="col-md-7">
                            <h5>Customer Details</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Name</label>
                                    <input type="text" name="name" required placeholder="Enter your full name" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Email</label>
                                    <input type="email" name="email" required placeholder="Enter your email" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Phone</label>
                                    <input type="text" name="phone" required placeholder="Enter your phone number" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Postal Code</label>
                                    <input type="text" name="postal" required placeholder="Enter your postal code" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="fw-bold">Address</label>
                                    <textarea name="address" required class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h5>Order Details</h5>
                            <hr>
                                <?php $items = getCartItems();
                                $totalPrice = 0;
                                foreach ($items as $citem) {
                                    ?>
                                    <div class="mb-1 border">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <img src="uploads/<?= $citem['image'] ?>" alt="Image" width="60px">
                                            </div>
                                            <div class="col-md-5">
                                                <label><?= $citem['name'] ?></label>
                                            </div>
                                            <div class="col-md-3">
                                                <label><?= $citem['selling_price'] ?></label>
                                            </div>
                                            <div class="col-md-2">
                                                <label>x <?= $citem['prod_qty'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                                }
                                ?>
                                <hr>
                            <h5>Total Price: <span class="float-end fw-bold"><?= $totalPrice ?></span></h5>
                            <div class="">
                                <input type="hidden" name="payment_mode" value="GCash">
                                <button type="submit" name="placeOrderBtn" class="btn btn-primary w-100">Order Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
    
<?php include('includes/footer.php');  ?>   