@extends('backend.master')
@section('title', 'Thông tin cá nhân')
@section('content')


        <div class="col-12 col-md-12 col-lg-4">
            <div class="iq-card">
                <div class="iq-card-body profile-page">
                    <div class="profile-header">
                        <div class="cover-container text-center">
                            @if(Auth::user()->avatar)
                                <img class="rounded-circle img-fluid" style="width: 150px; height: 150px;" src="{{ url('uploads' )}}/users/{{ Auth::user()->avatar }}" alt="profile-pic">
                            @else
                                <img class="rounded-circle img-fluid" style="width: 150px; height: 150px;" src="{{ url('uploads' )}}/users/user.png" alt="profile-pic">
                            @endif
{{--                            <img src="{{ url('backend' )}}/images/user/1.jpg" alt="profile-bg" class="rounded-circle img-fluid">--}}
                            <div class="profile-detail mt-3">
                                <h3>{{ Auth::user()->name }}</h3>
                                <p class="text-primary">{{ Auth::user()->position }}</p>
                                <p>{{ Auth::user()->note }}</p>
                            </div>
                            <div class="iq-social d-inline-block align-items-center">
                                <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                    </li>
                                    <li >
                                        <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-8">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                    <div class="iq-header-title">
                        <h4 class="card-title mb-0">Thông Tin Cá Nhân</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <ul class="list-inline p-0 mb-0">
                        <li>
                            <div class="row align-items-center justify-content-between mb-3">
                                <div class="col-sm-6">
                                    <h6>Ngày Sinh</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0">{{ date('d/m/Y', strtotime(Auth::user()->birthday)) }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row align-items-center justify-content-between mb-3">
                                <div class="col-sm-6">
                                    <h6>Địa Chỉ</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0">{{ Auth::user()->address }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row align-items-center justify-content-between mb-3">
                                <div class="col-sm-6">
                                    <h6>Số Điện Thoại</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0">{{ Auth::user()->phone }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row align-items-center justify-content-between mb-3">
                                <div class="col-sm-6">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row align-items-center justify-content-between mb-3">
                                <div class="col-sm-6">
                                    <h6>Giới Tính</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0">{{ Auth::user()->sex }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


@endsection
