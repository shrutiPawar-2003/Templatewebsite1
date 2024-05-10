<?php 
    include 'Header.php'
?>

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">My Account</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="index.html">Home</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- My Account Section Start -->
    <div class="section section-padding-03">
        <div class="container custom-container">
            <div class="row g-lg-10 g-6">

                <!-- My Account Tab List Start -->
                <div class="col-lg-4 col-12">
                    <ul class="my-account-tab-list nav">
                        <li><a href="#dashboad" class="active" data-bs-toggle="tab"><i class="lastudioicon-home-2"></i> Dashboard</a></li>
                        <li><a href="#orders" data-bs-toggle="tab"><i class="dlicon files_notebook"></i> Orders</a></li>
                        <li><a href="#download" data-bs-toggle="tab"><i class="dlicon arrows-1_cloud-download-93"></i> Download</a></li>
                        <li><a href="#address" data-bs-toggle="tab"><i class="dlicon location_map-big"></i> address</a></li>
                        <li><a href="#account-info" data-bs-toggle="tab"><i class="dlicon users_single-01"></i> Account Details</a></li>
                        <li><a href="login.html"><i class="dlicon arrows-1_log-out"></i> Logout</a></li>
                    </ul>
                </div>
                <!-- My Account Tab List End -->

                <!-- My Account Tab Content Start -->
                <div class="col-lg-8 col-12">
                    <div class="tab-content">

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade show active" id="dashboad">
                            <div class="myaccount-content dashboad">
                                <div class="alert alert-light">Hello <b>didiv91396</b> (not <b>didiv91396</b>? <a href="login.html">Log out</a>)</div>
                                <p>From your account dashboard you can view your <u>recent orders</u>, manage your <u>shipping and billing addresses</u>, and <u>edit your password and account details</u>.</p>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="orders">
                            <div class="myaccount-content order">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Aug 22, 2018</td>
                                                <td>Pending</td>
                                                <td>$3000</td>
                                                <td><a href="shopping-cart.html"><b>View</b></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>July 22, 2018</td>
                                                <td>Approved</td>
                                                <td>$200</td>
                                                <td><a href="shopping-cart.html"><b>View</b></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>June 12, 2017</td>
                                                <td>On Hold</td>
                                                <td>$990</td>
                                                <td><a href="shopping-cart.html"><b>View</b></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="download">
                            <div class="myaccount-content download">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Expire</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Haven - Free Real Estate PSD Template</td>
                                                <td>Aug 22, 2018</td>
                                                <td>Yes</td>
                                                <td><a href="#"><i class="dlicon arrows-1_cloud-download-93"></i> <b>Download File</b></a></td>
                                            </tr>
                                            <tr>
                                                <td>HasTech - Profolio Business Template</td>
                                                <td>Sep 12, 2018</td>
                                                <td>Never</td>
                                                <td><a href="#"><i class="dlicon arrows-1_cloud-download-93"></i> <b>Download File</b></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="address">
                            <div class="myaccount-content address">
                                <div class="alert alert-light">The following addresses will be used on the checkout page by default.</div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <h4 class="title">Billing Address <a href="#" class="edit-link">edit</a></h4>
                                        <address>
                                            <p class="name"><strong>Alex Tuntuni</strong></p>
                                            <p class="mb-3">1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <h4 class="title">Shipping Address <a href="#" class="edit-link">edit</a></h4>
                                        <address>
                                            <p class="name"><strong>Alex Tuntuni</strong></p>
                                            <p class="mb-3">1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="account-info">
                            <div class="myaccount-content account-details">
                                <div class="account-details-form">
                                    <form action="#">
                                        <div class="row g-4">
                                            <div class="col-md-6 col-12">
                                                <div class="single-input-item">
                                                    <label for="first-name">First Name <abbr class="required">*</abbr></label>
                                                    <input class="form-field" type="text" id="first-name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="single-input-item">
                                                    <label for="last-name">Last Name <abbr class="required">*</abbr></label>
                                                    <input class="form-field" type="text" id="last-name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="display-name">Display Name <abbr class="required">*</abbr></label>
                                                <input class="form-field" type="text" id="display-name">
                                                <p class="small mt-1">This will be how your name will be displayed in the account section and in reviews</p>
                                            </div>
                                            <div class="col-12">
                                                <label for="email">Email Addres <abbr class="required">*</abbr></label>
                                                <input class="form-field" type="email" id="email">
                                            </div>
                                            <div class="col-12">
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="row g-4">
                                                        <div class="col-12">
                                                            <label for="current-pwd">Current password (leave blank to leave unchanged)</label>
                                                            <input class="form-field" type="password" id="current-pwd">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="new-pwd">New password (leave blank to leave unchanged)</label>
                                                            <input class="form-field" type="password" id="new-pwd">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="confirm-pwd">Confirm new password</label>
                                                            <input class="form-field" type="password" id="confirm-pwd">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-dark btn-primary-hover">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- Single Tab Content End -->

                    </div>
                </div> <!-- My Account Tab Content End -->

            </div>
        </div>
    </div>
    <!-- My Account Section End -->

   
<?php 
    include 'Footer.php'
?>