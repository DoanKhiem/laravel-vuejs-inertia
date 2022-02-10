@extends('backend.master')
@section('title', 'Đổi mật khẩu')
@section('content')

    <div class="col-lg-12">
        <div class="iq-edit-list-data">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="chang-pwd" role="tabpanel">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Đổi Mật Khẩu</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form method="POST" action="{{ route('admin.updatePassword', Auth::user()->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="npass">Mật Khẩu Mới:</label>
                                    <input type="Password" class="form-control" id="npass" name="password_new">
                                    @if ($errors->has('password_new'))
                                        <label class="iq-bg-danger pl-2 pr-2 rounded d-inline-block">{{ $errors->first('password_new') }}</label>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="vpass">Nhập Lại Mật Khẩu:</label>
                                    <input type="Password" class="form-control" id="vpass" name="confirm_password">
                                    @if ($errors->has('confirm_password'))
                                        <label class="iq-bg-danger pl-2 pr-2 rounded d-inline-block">{{ $errors->first('confirm_password') }}</label>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Đổi mật khẩu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
