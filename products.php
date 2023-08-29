
<?php
 
  include('include/header.php')

?>

  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h4 class="title" data-aos="fade-down" data-aos-duration="1200">Products</h4>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1000">
                <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep">-</li>
                  <li>Products</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-grid-list-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="product-header-wrap">
              <div class="grid-list-option">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><span data-bg-img="assets/img/icons/1.webp"></span></button>
                    <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><span data-bg-img="assets/img/icons/1.webp"></span></button>
                  </div>
                </nav>
              </div>
              <div class="show-product-area">
                <p class="show-product">Showing 1 - 15 of 33 result</p>
              </div>
              <div class="nav-short-area">
                <div class="toolbar-shorter">
                  <label for="SortBy">Sort by</label>
                  <select id="SortBy" class="form-select" aria-label="Sort by">
                    <option value="manual">Featured</option>
                    <option value="best-selling">Best Selling</option>
                    <option value="title-ascending" selected>Alphabetically, A-Z</option>
                    <option value="title-descending">Alphabetically, Z-A</option>
                    <option value="price-ascending">Price, low to high</option>
                    <option value="price-descending">Price, high to low</option>
                    <option value="created-descending">Date, new to old</option>
                    <option value="created-ascending">Date, old to new</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="product-body-wrap">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                  <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/1.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">1. New and sale badge product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 110.00 </span>
                                <span class="price-old">Tk 130.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/11.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">10. This is the large title for testing large title and there is an image for testing</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 19.00</span>
                                <span class="price-old">Tk 21.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/10.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">11. Product with video</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 39.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/2.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">2. New badge product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 80.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/3.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">3. Variable product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 40.00</span>
                                <span class="price-old">Tk 85.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/4.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">4. Soldout product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 19.00</span>
                                <span class="price-old">Tk 29.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/5.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">5. Simple product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 50.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/6.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">6. Variable with soldout product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 55.00 </span>
                                <span class="price-old">Tk 75.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/7.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">7. Sample affiliate product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 29.00 </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/8.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                            <div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">8. Countdown product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 39.00 </span>
                                <span class="price-old">Tk 60.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/9.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">9. Without shortcode product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 79.00 </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/12.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">Demo product title</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 29.00 </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/5.png" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">Demo product title</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 50.00 </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/13.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">Demo product title</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 80.00 </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/14.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.html">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">Demo product title</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 19.00 </span>
                                <span class="price-old">Tk 21.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                  </div>
                  <!--== Start Pagination Wrap ==-->
                  <div class="row">
                    <div class="col-12">
                      <div class="pagination-content-wrap">
                        <nav class="pagination-nav">
                          <ul class="pagination justify-content-center">
                            <li><a class="disabled active prev" href="#/"><i class="fa fa-angle-left"></i>Back</a></li>
                            <li><a class="disabled" href="#/">1</a></li>
                            <li><a href="#/">2</a></li>
                            <li><a href="#/">3</a></li>
                            <li><a class="next" href="#/">Next <i class="fa fa-angle-right"></i></a></li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                  <!--== End Pagination Wrap ==-->
                </div>
                <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                  <div class="row">
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/1.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">1. New and sale badge product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 110.00 </span>
                                <span class="price-old">Tk 130.00</span>
                              </div>
                              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/11.jpg" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">10. This is the large title for testing large title and there is an image for testing</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 19.00 </span>
                                <span class="price-old">Tk 21.00</span>
                              </div>
                              <p>A long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal...</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/10.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">11. Product with video</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 39.00 </span>
                              </div>
                              <p>As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for...</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/2.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">2. New badge product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 80.00 </span>
                              </div>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/3.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">3. Variable product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 40.00 </span>
                                <span class="price-old">Tk 85.00</span>
                              </div>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/4.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">4. Soldout product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 19.00 </span>
                                <span class="price-old">Tk 29.00</span>
                              </div>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/5.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">5. Simple product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 50.00 </span>
                              </div>
                              <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/6.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">6. Variable with soldout product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 55.00 </span>
                                <span class="price-old">Tk 75.00</span>
                              </div>
                              <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/7.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">7. Sample affiliate product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 29.00 </span>
                              </div>
                              <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/8.png" alt="Image-HasTech">
                            </a>
                            <div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">8. Countdown product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 39.00 </span>
                                <span class="price-old">Tk 60.00</span>
                              </div>
                              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/9.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">9. Without shortcode product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 79.00 </span>
                              </div>
                              <p>we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that...</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/12.jpg" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">Demo product title</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 29.00 </span>
                              </div>
                              <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/5.png" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">Demo product title</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 50.00 </span>
                              </div>
                              <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/13.jpg" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">Demo product title</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 80.00 </span>
                              </div>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item product-item-list">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.html">
                              <img class="w-100" src="assets/img/shop/14.jpg" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.html">Demo product title</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 19.00 </span>
                                <span class="price-old">Tk 21.00</span>
                              </div>
                              <p>A long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal...</p>
                              <div class="product-action">
                                <div class="addto-wrap">
                                  <a class="add-cart" href="shop-cart.html">
                                    <span class="icon">
                                      <i class="bardy bardy-shopping-cart"></i>
                                      <i class="hover-icon bardy bardy-shopping-cart"></i>
                                    </span>
                                  </a>
                                  <a class="add-wishlist" href="wishlist.html">
                                    <span class="icon">
                                      <i class="bardy bardy-wishlist"></i>
                                      <i class="hover-icon bardy bardy-wishlist"></i>
                                    </span>
                                  </a>
                                  <a class="add-quick-view" href="javascript:void(0);">
                                    <span class="icon">
                                      <i class="bardy bardy-quick-view"></i>
                                      <i class="hover-icon bardy bardy-quick-view"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                  </div>
                  <!--== Start Pagination Wrap ==-->
                  <div class="row">
                    <div class="col-12">
                      <div class="pagination-content-wrap">
                        <nav class="pagination-nav">
                          <ul class="pagination justify-content-center">
                            <li><a class="disabled active prev" href="#/"><i class="fa fa-angle-left"></i>Back</a></li>
                            <li><a class="disabled" href="#/">1</a></li>
                            <li><a href="#/">2</a></li>
                            <li><a href="#/">3</a></li>
                            <li><a class="next" href="#/">Next <i class="fa fa-angle-right"></i></a></li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                  <!--== End Pagination Wrap ==-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Feature Area Wrapper ==-->
    <section class="feature-area">
      <div class="feature-container">
        <div class="row no-gutter">
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
                <div class="content">
                  <h3 class="title">Free home delivery</h3>
                  <p>Provide free home delivery for all product over $100</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
                <div class="content">
                  <h3 class="title">Quality Products</h3>
                  <p>We ensure the product quality that is our main goal</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
                <div class="content">
                  <h3 class="title">3 Days Return</h3>
                  <p>Return product within 3 days for any product you buy</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
                <div class="content">
                  <h3 class="title">Online Support</h3>
                  <p>We ensure the product quality that you can trust easily</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Feature Area Wrapper ==-->
  </main>

  <?php 

    include('include/footer.php');

   ?> 