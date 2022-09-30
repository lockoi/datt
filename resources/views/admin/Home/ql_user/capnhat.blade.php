@extends('admin.index')
@section('tieudetrang')
Cập nhật thông tin
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">

        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Cập nhật thông tin</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="img/undraw_profile.svg" class="rounded-circle" style="width: 70%">
                    </div>
                    <div class="card-body col-lg-8">
                        <form>
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input type="text" class="form-control" placeholder="Họ tên">
                              </div>
                              <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email">
                              </div>
                              <div class="form-group ">
                                  <label>Vai trò :</label><br>
                                  <div class="form-check-inline">
                                      <input name="noiBat" value="0" class="form-check-input" checked="" type="radio">Giảng viên
                                  </div>
                                  <div class="form-check-inline">
                                    <input name="noiBat" value="1" class="form-check-input" checked="" type="radio">Sinh viên
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Cập nhật</button>
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
