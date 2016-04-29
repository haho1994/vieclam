@extends('layouts.headerfooter')
@section('timkiem')
<div class="search_form">
    <h1>Tìm Kiếm Việc Làm</h1>
    <form  method="get" action="<?php echo route('xuly.dangnhap'); ?>">
        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
        <input type="text" class="text"  value="Nhập chức danh, vị trí, kỹ năng..." onFocus="this.value = '';" onBlur="if (this.value == '') {
                    this.value = 'Enter Keyword(s)';
                }">
        <select name="course" class="option1" >
            <option value="-1">Chọn ngành nghề</option>
            <option value="83">An toàn lao động</option>
            <option value="78">Bác sĩ</option>
            <option value="33">Bán hàng</option>
            <option value="34">Bán hàng kỹ thuật</option>
            <option value="32">Bán lẻ/Bán sỉ</option>
            <option value="24">Bảo hiểm</option>
            <option value="84">Bảo trì/Sửa chữa</option>
            <option value="30">Bất động sản</option>
            <option value="47">Biên phiên dịch</option>
            <option value="17">Cấp quản lý điều hành</option>
            <option value="56">Chứng khoán</option>
            <option value="65">Cơ khí</option>
            <option value="66">Công nghệ cao</option>
            <option value="28">Dầu khí</option>
            <option value="52">Dệt may/Da giày</option>
            <option value="11">Dịch vụ khách hàng</option>
            <option value="6">Dược Phẩm/Công nghệ sinh học</option>
            <option value="80">Dược sĩ</option>
            <option value="12">Giáo dục/Đào tạo</option>
            <option value="62">Hàng cao cấp</option>
            <option value="75">Hàng gia dụng</option>
            <option value="82">Hàng hải</option>
            <option value="37">Hàng không/Du lịch</option>
            <option value="74">Hàng tiêu dùng</option>
            <option value="2">Hành chánh/Thư ký</option>
            <option value="43">Hóa học/Hóa sinh</option>
            <option value="69">Hoạch định/Dự án</option>
            <option value="72">In ấn/ Xuất bản</option>
            <option value="57">Internet/Online Media</option>
            <option value="35">IT - Phần mềm</option>
            <option value="55">IT-Phần cứng/Mạng</option>
            <option value="1">Kế toán</option>
            <option value="53">Kho vận</option>
            <option value="58">Kiểm toán</option>
            <option value="5">Kiến trúc/Thiết kế nội thất </option>
            <option value="27">Marketing</option>
            <option value="15">Mới tốt nghiệp</option>
            <option value="16">Môi trường/Xử lý chất thải</option>
            <option value="10">Mỹ Thuật/Nghệ Thuật/Thiết Kế</option>
            <option value="42">Ngân hàng</option>
            <option value="18">Người nước ngoài/Việt Kiều</option>
            <option value="73">Nhà hàng/Khách sạn</option>
            <option value="23">Nhân sự</option>
            <option value="4">Nông nghiệp/Lâm nghiệp</option>
            <option value="71">Overseas Jobs</option>
            <option value="25">Pháp lý</option>
            <option value="21">Phi chính phủ/Phi lợi nhuận</option>
            <option value="70">QA/QC</option>
            <option value="3">Quảng cáo/Khuyến mãi/Đối ngoại</option>
            <option value="68">Sản phẩm công nghiệp</option>
            <option value="26">Sản Xuất</option>
            <option value="59">Tài chính/Đầu tư</option>
            <option value="63">Thời trang</option>
            <option value="51">Thời vụ/Hợp đồng ngắn hạn</option>
            <option value="49">Thu Mua/Vật Tư/Cung Vận</option>
            <option value="54">Thực phẩm &amp; Đồ uống</option>
            <option value="81">Trình dược viên</option>
            <option value="48">Truyền hình/Truyền thông/Báo chí</option>
            <option value="8">Tư vấn</option>
            <option value="67">Tự động hóa/Ô tô</option>
            <option value="36">Vận chuyển/Giao nhận</option>
            <option value="41">Viễn Thông</option>
            <option value="7">Xây dựng</option>
            <option value="19">Xuất nhập khẩu</option>
            <option value="79">Y sĩ/Hộ lý</option>
            <option value="22">Y tế/Chăm sóc sức khỏe</option>
            <option value="77">Địa chất/Khoáng sản</option>
            <option value="76">Điện lạnh/Nhiệt lạnh</option>
            <option value="64">Điện/Điện tử</option>
            <option value="39">Khác</option>
        </select >
        <select name="course" class="option2">
            <option value="-1">Chọn địa điểm</option>
            <option value="29">Hồ Chí Minh</option>
            <option value="24">Hà Nội</option>
            <option value="71">ĐBSCL</option>
            <option value="2">An Giang</option>
            <option value="3">Bà Rịa - Vũng Tàu</option>
            <option value="4">Bắc cạn</option>
            <option value="5">Bắc Giang</option>
            <option value="6">Bạc Liêu</option>
            <option value="7">Bắc Ninh</option>
            <option value="8">Bến Tre</option>
            <option value="9">Biên Hòa</option>
            <option value="10">Bình Định</option>
            <option value="11">Bình Dương</option>
            <option value="12">Bình Phước</option>
            <option value="13">Bình Thuận</option>
            <option value="14">Cà Mau</option>
            <option value="15">Cần Thơ</option>
            <option value="16">Cao Bằng</option>
            <option value="17">Đà Nẵng</option>
            <option value="18">Đắc Lắc</option>
            <option value="69">Điện Biên</option>
            <option value="19">Đồng Nai</option>
            <option value="20">Đồng Tháp</option>
            <option value="21">Gia Lai</option>
            <option value="22">Hà Giang</option>
            <option value="23">Hà Nam</option>
            <option value="25">Hà Tây</option>
            <option value="26">Hà Tĩnh</option>
            <option value="27">Hải Dương</option>
            <option value="28">Hải Phòng</option>
            <option value="30">Hòa Bình</option>
            <option value="31">Huế</option>
            <option value="32">Hưng Yên</option>
            <option value="33">Khánh Hòa</option>
            <option value="34">Kon Tum</option>
            <option value="35">Lai Châu</option>
            <option value="36">Lâm Đồng</option>
            <option value="37">Lạng Sơn</option>
            <option value="38">Lào Cai</option>
            <option value="40">Nam Định</option>
            <option value="41">Nghệ An</option>
            <option value="42">Ninh Bình</option>
            <option value="43">Ninh Thuận</option>
            <option value="44">Phú Thọ</option>
            <option value="45">Phú Yên</option>
            <option value="46">Quảng Bình</option>
            <option value="47">Quảng Nam</option>
            <option value="48">Quảng Ngãi</option>
            <option value="49">Quảng Ninh</option>
            <option value="50">Quảng Trị</option>
            <option value="51">Sóc Trăng</option>
            <option value="52">Sơn La</option>
            <option value="53">Tây Ninh</option>
            <option value="54">Thái Bình</option>
            <option value="55">Thái Nguyên</option>
            <option value="56">Thanh Hóa</option>
            <option value="57">Thừa Thiên-Huế</option>
            <option value="58">Tiền Giang</option>
            <option value="59">Trà Vinh</option>
            <option value="60">Tuyên Quang</option>
            <option value="61">Kiên Giang</option>
            <option value="62">Vĩnh Long</option>
            <option value="63">Vĩnh Phúc</option>
            <option value="65">Yên Bái</option>
            <option value="66">Khác</option>
            <option value="70">Quốc tế</option>
            <option value="72">Hậu Giang</option>
            <option value="39">Long An</option>
        </select>
        <input id="input" type="submit" name="login" class="login login-submit" value="Tìm Kiếm">
    </form>
</div>
<div id="scroll_box">
  <p>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
    Put a long text in here. It will be crollable.<br/>
  </p>
</div>
@endsection

