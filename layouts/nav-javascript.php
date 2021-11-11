<!-- jQuery -->
<script src="public/site/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/site/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="public/site/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="public/site/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/site/dist/js/demo.js"></script>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
	$(document).ready(function() {
		$("#form").on("submit", function(event) {
			event.preventDefault();
			var HoTen = $("#HoTen").val();
			var txt_HoTen = document.getElementById("HoTen")

			var DiaChi = $("#DiaChi").val();
			var txt_DiaChi = document.getElementById("HoTen")

			var SoDienThoai = $("#SoDienThoai").val();
			var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
			var txt_SoDienThoai = document.getElementById("HoTen")

			var NgaySinh = $("#NgaySinh").val();
			var txt_NgaySinh = document.getElementById("NgaySinh")

			var Email = $("#Email").val();
			var txt_Email = document.getElementById("Email")

			var MatKhau = $("#MatKhau").val();
			var txt_MatKhau = document.getElementById("MatKhau")

			var ChucVu = $("#ChucVu").val();
			var txt_ChucVu = document.getElementById("ChucVu")

			var Khoa = $("#Khoa").val();
			var txt_Khoa = document.getElementById("Khoa")


			if (HoTen == "") {
				alert("Họ Tên Không Được Bỏ Trống!!");
				txt_HoTen.focus();
				return false;
			} else if (DiaChi == "") {
				alert("Địa Chỉ Không Được Bỏ Trống!!");
				txt_DiaChi.focus();
				return false;
			} else if (SoDienThoai == "") {
				alert("Số điện thoại Không Được Bỏ Trống!!");
				txt_SoDienThoai.focus();
				return false;
			} else if (vnf_regex.test(SoDienThoai) == false) {
				alert('Số điện thoại của bạn không đúng định dạng!');
				txt_SoDienThoai.focus();
				return false;
			} else if (NgaySinh == "") {
				alert("Ngày sinh Không Được Bỏ Trống!!");
				txt_NgaySinh.focus();
				return false;
			} else if (Email == "") {
				alert("Email Không Được Bỏ Trống!!");
				txt_Email.focus();
				return false;
			} else if (MatKhau == "") {
				alert("Mật khẩu Không Được Bỏ Trống!!");
				txt_MatKhau.focus();
				return false;
			} else if (ChucVu == "" || Khoa == null) {
				alert("Chức vụ chưa được chọn!!");
				txt_ChucVu.focus();
				return false;
			} else if (Khoa == "" || Khoa == null) {
				alert("Khóa chưa được chọn!!");
				txt_Khoa.focus();

			} else {
				$.ajax({
					url: "processing/user_add.php",
					method: "POST",
					data: $('#form').serialize(),
					beforeSend: function() {
						$('#Insert').val("Inserting");
					},
					success: function(data) {
						$('#form')[0].reset();
						$('#exampleModal').modal('hide');
						$('employee_table').html(data);
					}
				})
			}
		});
	});
</script>




<script>
	$(document).ready(function() {
		$("#show_hide_password a").on('click', function(event) {
			event.preventDefault();
			if ($('#show_hide_password input').attr("type") == "text") {
				$('#show_hide_password input').attr('type', 'password');
				$('#show_hide_password i').addClass("fa-eye-slash");
				$('#show_hide_password i').removeClass("fa-eye");
			} else if ($('#show_hide_password input').attr("type") == "password") {
				$('#show_hide_password input').attr('type', 'text');
				$('#show_hide_password i').removeClass("fa-eye-slash");
				$('#show_hide_password i').addClass("fa-eye");
			}
		});
	});
</script>