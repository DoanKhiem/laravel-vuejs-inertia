@extends('backend.master')
@section('title', 'Sửa thông tin cá nhân')
@section('content')

    <div class="col-lg-12">
        <div class="iq-edit-list-data">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Thông Tin Cá Nhân</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{ route('admin.updateProfile', Auth::user()->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="form-group row align-items-center">
                                    <div class="col-md-12">
                                        <div class="profile-img-edit">
                                            @if(Auth::user()->avatar)
                                                <img class="profile-pic" src="{{ url('uploads' )}}/users/{{ Auth::user()->avatar }}" alt="profile-pic">
                                            @else
                                                <img class="profile-pic" src="{{ url('uploads' )}}/users/user.png" alt="profile-pic">
                                            @endif
                                                <div class="p-image">
                                                <i class="ri-pencil-line upload-button"></i>
                                                <input class="file-upload" name="file" type="file" accept="image/*"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row align-items-center">
                                    <div class="form-group col-sm-6">
                                        <label for="fname">Họ và Tên:</label>
                                        <input type="text" class="form-control" id="fname" name="name" value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="lname">Chức Vụ:</label>
                                        <input type="text" class="form-control" id="lname" name="position" value="{{ Auth::user()->position }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="uname">Email:</label>
                                        <input type="text" class="form-control" disabled id="uname" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="cname">Địa Chỉ:</label>
                                        <input type="text" class="form-control" id="cname" name="address" value="{{ Auth::user()->address }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="dob">Số Điện Thoại:</label>
                                        <input  class="form-control" id="dob" name="phone" value="{{ Auth::user()->phone }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="dob">Ngày Sinh:</label>
                                        <input  class="form-control" type="date" id="dob" name="birth" value="{{ Auth::user()->birthday }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="d-block">Giới Tính:</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio6" name="sex" value="Nam" class="custom-control-input" {{ Auth::user()->sex == 'Nam' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customRadio6"> Nam </label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio7" name="sex" value="Nữ" class="custom-control-input" {{ Auth::user()->sex == 'Nữ' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customRadio7"> Nữ </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label>Ghi Chú:</label>
                                        <textarea class="form-control" name="note" rows="5" style="line-height: 22px;">{{ Auth::user()->note }}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn iq-bg-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
