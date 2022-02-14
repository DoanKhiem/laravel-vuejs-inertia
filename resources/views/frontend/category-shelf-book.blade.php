@extends('frontend.master')
@section('title', 'Shop')
@section('content')

    <div class="col-lg-12">
        <div class="iq-card-transparent mb-0">
            <div class="d-block text-center">
                <h2 class="mb-3">Tìm kiếm theo tên sách</h2>
                <div class="w-100 iq-search-filter">
                    <form action="{{ route('postShop') }}" method="POST">
                    @csrf
                    <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                        <li class="search-menu-opt">
                            <div class="iq-dropdown">
                                <div class="form-group mb-0">
                                    <select name="category" class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect1">
                                        <option selected="" value="">All</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="search-menu-opt">
                            <div class="iq-dropdown">
                                <div class="form-group mb-0">
                                    <select name="shelf" class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect2">
                                        <option selected="" value="">All</option>
                                        @foreach($shelfs as $shelf)
                                        <option value="{{ $shelf->id }}">{{ $shelf->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="search-menu-opt">
                            <div class="iq-search-bar search-book d-flex align-items-center">
                                <div class="searchbox">
                                    <input type="text" name="key" class="text search-input" placeholder="search here...">
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                </div>
                                <button type="submit" class="btn btn-primary search-data ml-2 btSearch">Search</button>
                            </div>
                        </li>

                    </ul>
                    </form>
                </div>
                </form>
            </div>
        </div>
        <div class="iq-card">
            <div class="iq-card-body">
                <div class="row">
                    @foreach($books as $book)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                            <div class="iq-card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                        @if($book->image)
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('uploads') }}/books/{{ $book->image }}" alt=""></a>
                                        @else
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('uploads') }}/books/book-logo.png" alt=""></a>
                                        @endif
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <h6 class="mb-1">{{ $book->name }}</h6>
                                            <p class="font-size-13 line-height mb-1">{{ $book->bookToCategory->name }}</p>
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
{{--                                            <span class="pr-1 old-price">$99</span>--}}
                                            <h6><b>{{ $book->price }} vnd</b></h6>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')


@endsection
