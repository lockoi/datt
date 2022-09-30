@extends('admin.index')
@section('tieudetrang')
Thông tin cá nhân
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">

        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Thông tin cá nhân</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="img/undraw_profile.svg" class="rounded-circle" style="width: 60%">
                    </div>
                    <div class="card-body col-lg-8">
                        <form>
                            <div class="form-group">
                            <label> Họ Tên: Thanh Lộc</label>

                            </div>
                            <div class="form-group">
                            <label>Email: loc1212@gmail.com </label>

                            </div>
                            <div class="form-group ">
                                <label>Vai trò: Giảng viên</label><br>
                            </div>
                            <a href="admin/user/capnhat"class="btn btn-primary">Cập nhật</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
@endsection
