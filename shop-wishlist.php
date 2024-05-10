<?php 
    include 'Header.php'
?>




    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Wishlist</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="index.html">Home</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Wishlist Section Start -->
    <div class="section section-padding-03">
        <div class="container custom-container">
            <div class="row">

                <div class="col-12">

                    <!-- Cart Table For Tablet & Up Devices Start -->
                    <div class="table-responsive">
                        <table class="wishlist-table table text-center align-middle mb-6 d-none d-md-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th class="title text-start">Product</th>
                                    <th class="product-stock-status">Stock Status</th>
                                    <th class="price">Price</th>
                                    <th class="total"></th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <tr>
                                    <th class="wishlist-remove"><button class="remove-btn"><i class="lastudioicon lastudioicon-e-remove"></i></button></th>
                                    <th class="wishlist-thumb"><a href="single-product.html"><img src="assets/images/product/product-tab-1.png" alt="Croissant Italy Cake"></a></th>
                                    <th class="text-start"><a href="single-product.html">Croissant Italy Cake</a></th>
                                    <td class="stock in-stock">In Stock</td>
                                    <td>$110.00</td>
                                    <td class="wishlist-cart"><a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Select Option</a></td>
                                </tr>
                                <tr>
                                    <th class="wishlist-remove"><button class="remove-btn"><i class="lastudioicon lastudioicon-e-remove"></i></button></th>
                                    <th class="wishlist-thumb"><a href="single-product.html"><img src="assets/images/product/product-tab-2.png" alt="Chocolate Muffin"></a></th>
                                    <th class="text-start"><a href="single-product.html">Chocolate Muffin</a></th>
                                    <td class="stock in-stock">In Stock</td>
                                    <td>$19.00</td>
                                    <td class="wishlist-cart"><a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Add to cart</a></td>
                                </tr>
                                <tr>
                                    <th class="wishlist-remove"><button class="remove-btn"><i class="lastudioicon lastudioicon-e-remove"></i></button></th>
                                    <th class="wishlist-thumb"><a href="single-product.html"><img src="assets/images/product/product-tab-2.png" alt="Chocolate Muffin"></a></th>
                                    <th class="text-start"><a href="single-product.html">Chocolate Muffin</a></th>
                                    <td class="stock in-stock">In Stock</td>
                                    <td>$19.00</td>
                                    <td class="wishlist-cart"><a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Add to cart</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Table For Tablet & Up Devices End -->

                    <!-- Cart Table For Mobile Devices Start -->
                    <div class="cart-products-mobile d-md-none">
                        <div class="cart-product-mobile">
                            <div class="cart-product-mobile-thumb">
                                <a href="single-product.html" class="cart-product-mobile-image"><img src="assets/images/product/product-tab-1.png" alt="Croissant Italy Cake" width="90" height="103"></a>
                                <button class="cart-product-mobile-remove"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                            </div>
                            <div class="cart-product-mobile-content">
                                <h5 class="cart-product-mobile-title"><a href="single-product.html">Croissant Italy Cake</a></h5>
                                <span class="cart-product-mobile-quantity">1 x $110.00</span>
                                <span class="wishlist-cart">
                                    <a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Add to cart</a>
                                </span>
                            </div>
                        </div>
                        <div class="cart-product-mobile">
                            <div class="cart-product-mobile-thumb">
                                <a href="single-product.html" class="cart-product-mobile-image"><img src="assets/images/product/product-tab-2.png" alt="Chocolate Muffin" width="90" height="103"></a>
                                <button class="cart-product-mobile-remove"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                            </div>
                            <div class="cart-product-mobile-content">
                                <h5 class="cart-product-mobile-title"><a href="single-product.html">Chocolate Muffin</a></h5>
                                <span class="cart-product-mobile-quantity">1 x $19.00</span>
                                <span class="wishlist-cart"><a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Add to cart</a></span>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Table For Mobile Devices End -->

                </div>

            </div>
        </div>
    </div>
    <!-- Wishlist Section End -->

 <?php 
    include 'Footer.php'
?>