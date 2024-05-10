 <?php 
    include 'Header.php'
?>



    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Order Tracking</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="index.html">Home</a></li>
                            <li>Order Tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Order Tracking Section Start -->
    <div class="tracking">
        <div class="tracking-col tracking-col-form">
            <form class="tracking-form" action="#">
                <div class="row row-cols-1 g-4">
                    <div class="col">
                        <p class="tracking-form-text">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                    </div>
                    <div class="col">
                        <label>Order ID</label>
                        <input class="form-field" type="text" placeholder="First Name">
                    </div>
                    <div class="col">
                        <label>Billing email</label>
                        <input class="form-field" type="text" placeholder="Last Name">
                    </div>
                    <div class="col text-center mt-10">
                        <button class="btn btn-dark btn-hover-primary">Track</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="tracking-col d-none d-md-block">
            <div class="tracking-bg" data-bg-image="assets/images/bg/order-tracking.jpg"></div>
        </div>
    </div>
    <!-- Order Tracking Section End -->

 <?php 
    include 'Footer.php'
?>