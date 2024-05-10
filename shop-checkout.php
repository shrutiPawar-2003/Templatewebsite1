<?php 
    include 'Header.php'
?>



    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Checkout</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="index.html">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Start -->
    <div class="shop-product-section section section-padding-03">
        <div class="container custom-container">
            <form action="#" class="checkout-form">
                <div class="row g-8">

                    <div class="col-lg-7">

                        <!-- Billing Address -->
                        <div id="billing-form">
                            <h4 class="mb-4">Billing Address</h4>
                            <div class="row row-cols-sm-2 row-cols-1 g-4">
                                <div class="col">
                                    <label>First Name*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Last Name*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Email Address*</label>
                                    <input class="form-field" type="email">
                                </div>
                                <div class="col">
                                    <label>Phone no*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12">
                                    <label>Company Name</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12">
                                    <label>Address*</label>
                                    <input class="form-field" type="text" placeholder="Address line 1">
                                </div>
                                <div class="col-sm-12">
                                    <input class="form-field" type="text" placeholder="Address line 2">
                                </div>
                                <div class="col">
                                    <label>Country*</label>
                                    <div class="select-wrapper">
                                        <select class="form-field">
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>country</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Town/City*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>State*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Zip Code*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12 d-flex flex-wrap gap-6">
                                    <div class="form-check m-0">
                                        <input class="form-check-input" type="checkbox" id="create_account">
                                        <label class="form-check-label" for="create_account">Create an Acount?</label>
                                    </div>
                                    <div class="form-check m-0">
                                        <input class="form-check-input" type="checkbox" id="shiping_address" data-toggle-shipping="#shipping-form">
                                        <label class="form-check-label" for="shiping_address">Ship to Different Address</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Shipping Address -->
                        <div id="shipping-form" class="mt-md-8 mt-6">
                            <h4 class="mb-4">Shipping Address</h4>
                            <div class="row row-cols-sm-2 row-cols-1 g-4">
                                <div class="col">
                                    <label>First Name*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Last Name*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Email Address*</label>
                                    <input class="form-field" type="email">
                                </div>
                                <div class="col">
                                    <label>Phone no*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12">
                                    <label>Company Name</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12">
                                    <label>Address*</label>
                                    <input class="form-field" type="text" placeholder="Address line 1">
                                </div>
                                <div class="col-sm-12">
                                    <input class="form-field" type="text" placeholder="Address line 2">
                                </div>
                                <div class="col">
                                    <label>Country*</label>
                                    <div class="select-wrapper">
                                        <select class="form-field">
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>country</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Town/City*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>State*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Zip Code*</label>
                                    <input class="form-field" type="text">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5">

                        <!-- Checkout Summary Start -->
                        <div class="checkout-box">

                            <h4 class="mb-4">Cart Total</h4>

                            <table class="checkout-summary-table table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>House Coffee Original x 1</td>
                                        <td>$110.00</td>
                                    </tr>
                                    <tr>
                                        <td>Medium Roast Ground Coffee x 1</td>
                                        <td>$19.00</td>
                                    </tr>
                                    <tr>
                                        <td class="border-top">Sub Total</td>
                                        <td class="border-top">$129.00</td>
                                    </tr>
                                    <tr>
                                        <td class="border-top">Shipping Fee</td>
                                        <td class="border-top">$10.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="border-top">Grand Total</th>
                                        <th class="border-top">$139.00</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- Checkout Summary End -->

                        <!-- Payment Method Start -->
                        <div class="checkout-box">

                            <h4 class="mb-4">Payment Method</h4>

                            <div class="checkout-payment-method">

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="radio" id="payment_check" name="payment-method" checked>
                                    <label class="form-check-label" for="payment_check">Check Payment</label>
                                    <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="radio" id="payment_bank" name="payment-method">
                                    <label class="form-check-label" for="payment_bank">Direct Bank Transfer</label>
                                    <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="radio" id="payment_cash" name="payment-method">
                                    <label class="form-check-label" for="payment_cash">Cash on Delivery</label>
                                    <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="radio" id="payment_card" name="payment-method">
                                    <label class="form-check-label" for="payment_card">Card Payment</label>
                                    <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="checkbox" id="accept_terms">
                                    <label class="form-check-label" for="accept_terms">I’ve read and accept the terms &amp; conditions</label>
                                </div>

                            </div>

                            <button class="btn btn-dark btn-primary-hover rounded-0 mt-6">Place order</button>

                        </div>
                        <!-- Payment Method End -->

                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Product Section End -->

<?php 
    include 'Footer.php'
?>