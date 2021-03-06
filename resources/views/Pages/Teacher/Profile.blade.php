@extends('Pages.layout.index')
@section('content')
<div class="container">
    <button type="submit" class="btn btn-primary">Ghi nhận</button>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin thầy/cô</h6>
                </div>
                <div class="card-body row">
                    <div class="col-md-6 mb-3 avatar-info">
                        <div class="avatar-info-area"></div>
                        <input type="file" class="form-control-file border">
                    </div>
                    <div class="col-md-6 mb-3 info-individual">
                        <form class="" action="/action_page.php">
                            <label for="teachertName">Tên thầy/cô</label>
                            <input type="text" class="form-control" placeholder="" id="txtTeacherName">
                            <label for="yearOlds">Tuổi</label>
                            <input type="number" class="form-control" placeholder="" id="txtYearOlds">
                            <label for="teacherGender"> Giới tính:</label>
                            <p></p>
                            <input id="txtTeacherGender" checked value="Male" type="radio" class="form-check-inline" name="gender">Nam
                            <input id="txtTeacherGender" value="Female" type="radio" class="form-check-inline" name="gender">Nữ
                            <input id="txtTeacherGender" value="Other" type="radio" class="form-check-inline" name="gender">Other
                            <label for="emailOther">Địa chỉ email</label>
                            <input type="email" class="form-control" placeholder="" id="txtEmailOther">
                            <label for="mobile">Số điện thoại</label>
                            <input type="tel" class="form-control" placeholder="" id="txtMobile">
                        </form>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>
                </div>
                <div class="card-body">
                    <form class="" action="/action_page.php">
                        <div class="form-group">
                            <label for="department">Khoa</label>
                            <select class="form-control" id="sel1">
                                <option>Công nghệ thông tin</option>
                                <option>Điện tử viễn thông</option>
                                <option>Vật lý kỹ thuật</option>
                                <option>Hàng không vũ trụ</option>
                            </select>
                        </div>
                        <label for="major">Ngành</label>
                        <input type="text" class="form-control" placeholder="" id="txtMajor">
                        <label for="numberCMT">Số chứng minh thư</label>
                        <input type="text" class="form-control" placeholder="" id="txtNumberCMT">
                        <label for="position">Vị trí/chức vụ</label>
                        <input type="text" class="form-control" placeholder="" id="txtPosition">
                        <label for="office">Văn phòng</label>
                        <input type="text" class="form-control" placeholder="" id="txtOffice">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Chi tiết thông tin tuyển</h6>
                </div>
                <div class="card-body">
                    <form class="" action="/action_page.php">
                        <label for="offer">Yêu cầu/Tiêu chí</label>
                        <textarea class="form-control" rows="5" id="txtOffer"></textarea>
                        <label for="topic">Đề tài nghiên cứu</label>
                        <textarea class="form-control" rows="5" id="txtTopic"></textarea>
                        <label for="numbers">Số lượng</label>
                        <input type="number" class="form-control" name="numbers" value="" id="txtNumbers" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

