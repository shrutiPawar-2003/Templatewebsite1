<?php 
    include 'Header.php'
?>

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Shop</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="index.html">Home</a></li>
                            <li>Shop Four Column</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Start -->
    <div class="shop-product-section sidebar-left overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12 section-padding-04">
                    <!-- Shop Top Bar Start -->
                    <div class="shop-topbar">
                        <div class="shop-topbar-item shop-topbar-left">
                            <p>Showing 1 - 12 of 25 result</p>
                        </div>
                        <div class="shop-topbar-right">
                            <div class="shop-topbar-item">
                                <select name="SortBy" id="SortBy">
                                    <option value="manual">Sort by Rated</option>
                                    <option value="best-selling">Sort by Latest</option>
                                    <option value="price-ascending">Price ↑</option>
                                    <option value="price-descending">Price ↓</option>
                                </select>
                            </div>

                            <div class="shop-topbar-item">
                                <select name="paginateBy" id="paginateBy">
                                    <option value="3">Show 3</option>
                                    <option value="4">Show 4</option>
                                    <option value="5">Show 5</option>
                                    <option value="6">Show 6</option>
                                    <option value="7">Show 7</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top Bar End -->
                    <!-- Product Section Start -->
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row-cols-1 mb-n50">
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge">Hot</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-8-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Brownie</a></h5>
                                    <span class="product-item__price">$4.99</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-7-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Red Velvet</a></h5>
                                    <span class="product-item__price">$5.00</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-6-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Cream Muffin</a></h5>
                                    <span class="product-item__price">$7.55</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-5-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Macaron Cake</a></h5>
                                    <span class="product-item__price">$9.44</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">Hot</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-4-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">No-bake chocolate</a></h5>
                                    <span class="product-item__price">$4.99</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-3-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Chocolate Bake</a></h5>
                                    <span class="product-item__price">$5.00</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge">Hot</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-2-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Red Velvet</a></h5>
                                    <span class="product-item__price">$7.55</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-1-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Italian Loaf</a></h5>
                                    <span class="product-item__price">$9.44</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-5-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Macaron Cake</a></h5>
                                    <span class="product-item__price">$9.44</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-6-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Cream Muffin</a></h5>
                                    <span class="product-item__price">$7.55</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge">Hot</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-2-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Red Velvet</a></h5>
                                    <span class="product-item__price">$7.55</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-7-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Red Velvet</a></h5>
                                    <span class="product-item__price">$5.00</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>

                    </div>
                    <!-- Product Section End -->
                    <!-- Shop bottom Bar Start -->
                    <div class="shop-bottombar">
                        <ul class="pagination">
                            <li class="disabled"><a href="#prev">←</a></li>
                            <li><a class="active" href="#page=1">1</a></li>
                            <li><a href="#page=2">2</a></li>
                            <li><a href="#page=3">3</a></li>
                            <li><a href="#page=4">4</a></li>
                            <li><a href="#page=5">5</a></li>
                            <li><a href="#next">→</a></li>
                        </ul>
                    </div>
                    <!-- Shop bottom Bar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product Section End -->

    <!-- Scroll Top Start -->
    <a href="#/" class="scroll-top" id="scroll-top">
        <i class="lastudioicon-up-arrow"></i>
    </a>
    <!-- Scroll Top End -->

 <?php 
    include 'Footer.php'
?>