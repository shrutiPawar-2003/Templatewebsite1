<?php 
    include 'Header.php'
?>


    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Cart</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="index.html">Home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shop Cart Section Start -->
    <div class="section section-padding-03">
        <div class="container custom-container">
            <div class="row mb-n30">

                <div class="col-lg-8 col-12 mb-30">

                    <!-- Cart Table For Tablet & Up Devices Start -->
                    <div class="table-responsive">
                        <table class="cart-table table text-center align-middle mb-6 d-none d-md-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th class="title text-start">Product</th>
                                    <th class="price">Price</th>
                                    <th class="quantity">Quantity</th>
                                    <th class="total">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <tr>
                                    <th class="cart-remove">
                                        <button class="remove-btn"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                                    </th>
                                    <th class="cart-thumb">
                                        <a href="single-product.html">
                                            <img src="assets/images/product/product-tab-1.png" alt="Croissant Italy Cake">
                                        </a>
                                    </th>
                                    <th class="text-start">
                                        <a href="single-product.html">Croissant Italy Cake</a>
                                    </th>
                                    <td>$110.00</td>
                                    <td class="text-center cart-quantity">
                                        <!-- Quantity Start -->
                                        <div class="quantity">
                                            <div class="cart-plus-minus border-0 mx-auto"></div>
                                        </div>
                                        <!-- Quantity End -->
                                    </td>
                                    <td>$110.00</td>
                                </tr>
                                <tr>
                                    <th class="cart-remove">
                                        <button class="remove-btn"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                                    </th>
                                    <th class="cart-thumb">
                                        <a href="single-product.html">
                                            <img src="assets/images/product/product-tab-2.png" alt="Chocolate Muffin">
                                        </a>
                                    </th>
                                    <th class="text-start">
                                        <a href="single-product.html">Chocolate Muffin</a>
                                    </th>
                                    <td>$19.00</td>
                                    <td class="text-center cart-quantity">
                                        <!-- Quantity Start -->
                                        <div class="quantity">
                                            <div class="cart-plus-minus border-0 mx-auto"></div>
                                        </div>
                                        <!-- Quantity End -->
                                    </td>
                                    <td>$19.00</td>
                                </tr>
                                <tr>
                                    <th class="cart-remove">
                                        <button class="remove-btn"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                                    </th>
                                    <th class="cart-thumb">
                                        <a href="single-product.html">
                                            <img src="assets/images/product/product-tab-2.png" alt="Chocolate Muffin">
                                        </a>
                                    </th>
                                    <th class="text-start">
                                        <a href="single-product.html">Chocolate Muffin</a>
                                    </th>
                                    <td>$19.00</td>
                                    <td class="text-center cart-quantity">
                                        <!-- Quantity Start -->
                                        <div class="quantity">
                                            <div class="cart-plus-minus border-0 mx-auto"></div>
                                        </div>
                                        <!-- Quantity End -->
                                    </td>
                                    <td>$19.00</td>
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
                                <span class="cart-product-mobile-total"><b>Total:</b> $110.00</span>
                                <!-- Quantity Start -->
                                <div class="quantity">
                                    <div class="cart-plus-minus border-0"></div>
                                </div>
                                <!-- Quantity End -->
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
                                <span class="cart-product-mobile-total"><b>Total:</b> $19.00</span>
                                <!-- Quantity Start -->
                                <div class="quantity">
                                    <div class="cart-plus-minus border-0"></div>
                                </div>
                                <!-- Quantity End -->
                            </div>
                        </div>
                    </div>
                    <!-- Cart Table For Mobile Devices End -->

                    <!-- Cart Action Buttons Start -->
                    <div class="row justify-content-between gap-3">
                        <div class="col-auto"><button class="btn btn-outline-dark btn-primary-hover rounded-0">Continue Shopping</button></div>
                        <div class="col-auto d-flex flex-wrap gap-3">
                            <button class="btn btn-outline-dark btn-primary-hover rounded-0">Update Cart</button>
                            <button class="btn btn-outline-dark btn-primary-hover rounded-0">Clear Cart</button>
                        </div>
                    </div>
                    <!-- Cart Action Buttons End -->

                </div>

                <!-- Cart Totals Start -->
                <div class="col-lg-4 col-12 mb-30">
                    <div class="cart-totals">
                        <div class="cart-totals-inner">
                            <h4 class="title">Cart totals</h4>
                            <table class="table bg-transparent">
                                <tbody>
                                    <tr class="subtotal">
                                        <th class="sub-title">Subtotal</th>
                                        <td class="amount"><span >£148.00</span></td>
                                    </tr>
                                    <tr class="total">
                                        <th class="sub-title">Total</th>
                                        <td class="amount"><strong>£148.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="checkout.html" class="btn btn-dark btn-hover-primary rounded-0 w-100">Proceed to checkout</a>
                    </div>
                </div>
                <!-- Cart Totals End -->

            </div>
        </div>
    </div>
    <!-- Shop Cart Section End -->
<?php 
    include 'Footer.php'
?>