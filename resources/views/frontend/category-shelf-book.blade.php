@extends('frontend.master')
@section('title', 'Đặt hàng')
@section('content')

    <div class="col-lg-12">
        <div class="iq-card-transparent mb-0">
            <div class="d-block text-center">
                <h2 class="mb-3">Search by Book Name</h2>
                <div class="w-100 iq-search-filter">
                    <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                        <li class="search-menu-opt">
                            <div class="iq-dropdown">
                                <div class="form-group mb-0">
                                    <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect1">
                                        <option selected="">All</option>
                                        <option>A Books</option>
                                        <option>the Sun</option>
                                        <option>Harsh book</option>
                                        <option>People book</option>
                                        <option>the Fog</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="search-menu-opt">
                            <div class="iq-dropdown">
                                <div class="form-group mb-0">
                                    <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect2">
                                        <option selected="">Genres</option>
                                        <option>General</option>
                                        <option>History</option>
                                        <option>Horror</option>
                                        <option>Fantasy</option>
                                        <option>Literary</option>
                                        <option>Manga</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="search-menu-opt">
                            <div class="iq-dropdown">
                                <div class="form-group mb-0">
                                    <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect3">
                                        <option selected="">Year</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="search-menu-opt">
                            <div class="iq-dropdown">
                                <div class="form-group mb-0">
                                    <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect4">
                                        <option selected="">Author</option>
                                        <option>Milesiy Yor</option>
                                        <option>Ira Membrit</option>
                                        <option>Anna Mull</option>
                                        <option>John Smith</option>
                                        <option>David King</option>
                                        <option>Kusti Franti</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="search-menu-opt">
                            <div class="iq-search-bar search-book d-flex align-items-center">
                                <form action="#" class="searchbox">
                                    <input type="text" class="text search-input" placeholder="search here...">
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                </form>
                                <button type="submit" class="btn btn-primary search-data ml-2">Search</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="iq-card">
            <div class="iq-card-body">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/01.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">A Hunger knut book</h6>
                                            <p class="font-size-13 line-height mb-1">Gurt Mistrioty</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$99</span>
                                            <h6><b>$89</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/02.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">In Cold Blood Book..</h6>
                                            <p class="font-size-13 line-height mb-1">Anna Mull</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$129</span>
                                            <h6><b>$99</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/03.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">The Truman Capite</h6>
                                            <p class="font-size-13 line-height mb-1">Ira Membrit</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$79</span>
                                            <h6><b>$70</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/04.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">A Book Of Thinner</h6>
                                            <p class="font-size-13 line-height mb-1">Pete Sariya</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <h6><b>$129</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/05.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Book of Texi Driver</h6>
                                            <p class="font-size-13 line-height mb-1">Paige Turner</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$129</span>
                                            <h6><b>$120</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/06.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">A man with those Faces</h6>
                                            <p class="font-size-13 line-height mb-1">Bob Frapples</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$89</span>
                                            <h6><b>$79</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/07.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">The Great Gatsb</h6>
                                            <p class="font-size-13 line-height mb-1">Barb Ackue</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$99</span>
                                            <h6><b>$89</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/08.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">The Cover Design Book</h6>
                                            <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$102</span>
                                            <h6><b>$89</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent mb-lg-0">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/09.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Starving Start up book</h6>
                                            <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$105</span>
                                            <h6><b>$99</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent mb-md-0 mb-lg-0">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/10.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">I can do it anything</h6>
                                            <p class="font-size-13 line-height mb-1">Terry Aki</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$103</span>
                                            <h6><b>$98</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent mb-sm-0 mb-md-0 mb-lg-0">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/11.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">A horror Novel Book</h6>
                                            <p class="font-size-13 line-height mb-1">Hal Appeno</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$99</span>
                                            <h6><b>$79</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent m-0 mb-sm-0 mb-md-0 mb-lg-0">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src="images/search-book/12.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Think Outside Box</h6>
                                            <p class="font-size-13 line-height mb-1">Bill Emia</p>
                                            <div class="d-block">
                                                   <span class="font-size-13 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$110</span>
                                            <h6><b>$99</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
