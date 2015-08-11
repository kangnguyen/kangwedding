
function kthoten() {
	//Kiểm tra Họ tên
	if (document.getElementById("hoten").value.length== 0)
		{
			document.getElementById("bd-hoten").style.border ="1px solid red";
			document.getElementById("bd-hoten").style.background ="#f6ebeb";
			document.getElementById("icon-hoten").style.background = "url('images/icon-valid1.png') no-repeat -5px -5px";
			document.getElementById("tbao-hoten").style.color="red";
			document.getElementById("tbao-hoten").style.display="block";
			document.getElementById("hoten").focus();
		}
	else if ((document.getElementById("hoten").value.length > 0) && (document.getElementById("hoten").value.length < 1))
		{
			document.getElementById("tbao-hoten").innerHTML ="Tên của bạn quá ngắn .";
		}
	else 
		{
			document.getElementById("bd-hoten").style.border ="1px solid green";
			document.getElementById("icon-hoten").style.background = "url('images/icon-valid2.png') no-repeat -5px -5px";
			document.getElementById("tbao-hoten").style.display="none";
			document.getElementById("bd-hoten").style.background ="#ebf6ee";
		}
}

function ktngaysinh() {
	//Kiểm tra Ngày sinh
	var ngaysinh=document.getElementById("datepicker").value;
	if (ngaysinh.length==0)
		{
			document.getElementById("bd-ngaysinh").style.border ="1px solid red";
			document.getElementById("bd-ngaysinh").style.background ="#f6ebeb";
			document.getElementById("icon-date").style.background = "url('images/icon-valid1.png') no-repeat -5px -5px";
			document.getElementById("tbao-date").style.color="red";
			document.getElementById("tbao-date").style.display="block";
			return;
		}
	else 
		{
			document.getElementById("bd-ngaysinh").style.border ="1px solid green";
			document.getElementById("icon-date").style.background = "url('images/icon-valid2.png') no-repeat -5px -5px";
			document.getElementById("tbao-date").style.display="none";
			document.getElementById("bd-ngaysinh").style.background ="#ebf6ee";
		}
}

function kiemtragioitinh() {
	//Kiểm tra Giới tính
	var gioitinh=document.getElementsByName("gioitinh");
	if ((gioitinh[0].checked==false) && (gioitinh[1].checked==false))
		{
			document.getElementById("icon-sex").style.background = "url('images/icon-valid1.png') no-repeat -5px -5px";
			document.getElementById("tbao-gioitinh").style.color="red";
			document.getElementById("tbao-gioitinh").style.display="block";

		}
	else 
		{

			document.getElementById("icon-sex").style.background = "url('images/icon-valid2.png') no-repeat -5px -5px";
			document.getElementById("tbao-gioitinh").style.display="none";
		}
}

function kiemtradiachi() {
	//Kiểm tra Địa chỉ
	if (document.getElementById("diachi").value.length== 0)
		{
			document.getElementById("bd-diachi").style.border ="1px solid red";
			document.getElementById("bd-diachi").style.background ="#f6ebeb";
			document.getElementById("icon-diachi").style.background = "url('images/icon-valid1.png') no-repeat -5px -5px";
			document.getElementById("tbao-diachi").style.color="red";
			document.getElementById("tbao-diachi").style.display="block";
			document.getElementById("diachi").focus();
		}
	else 
		{
			document.getElementById("bd-diachi").style.border ="1px solid green";
			document.getElementById("icon-diachi").style.background = "url('images/icon-valid2.png') no-repeat -5px -5px";
			document.getElementById("tbao-diachi").style.display="none";
			document.getElementById("bd-diachi").style.background ="#ebf6ee";
		}
}

function kiemtradt() {
	//Kiểm tra điện thoại
	var sodienthoai = document.getElementById("dienthoai").value
	if (sodienthoai.length== 0)
		{
			document.getElementById("bd-dienthoai").style.border ="1px solid red";
			document.getElementById("bd-dienthoai").style.background ="#f6ebeb";
			document.getElementById("icon-dienthoai").style.background = "url('images/icon-valid1.png') no-repeat -5px -5px";
			document.getElementById("tbao-dienthoai").style.color="red";
			document.getElementById("tbao-dienthoai").style.display="block";
			document.getElementById("dienthoai").focus();
		}
	else if (isNaN(sodienthoai) || (sodienthoai.length != 10) && (sodienthoai.length != 11))
		{
			document.getElementById("tbao-dienthoai").innerHTML ="Số điện thoại không hợp lệ .";
		}
	else 
		{
			document.getElementById("bd-dienthoai").style.border ="1px solid green";
			document.getElementById("icon-dienthoai").style.background = "url('images/icon-valid2.png') no-repeat -5px -5px";
			document.getElementById("tbao-dienthoai").style.display="none";
			document.getElementById("bd-dienthoai").style.background ="#ebf6ee";
		}
}

function kiemtramail() {
	//Kiểm tra Email
	var email = document.getElementById('emailne').value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
	if (email == "") 
		{
			document.getElementById("bd-mail").style.border ="1px solid red";
			document.getElementById("bd-mail").style.background ="#f6ebeb";
			document.getElementById("icon-mail").style.background = "url('images/icon-valid1.png') no-repeat -5px -5px";
			document.getElementById("tbao-mail").style.color="red";
			document.getElementById("tbao-mail").style.display="block";
			document.getElementById("emailne").focus();
		}
    else if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length) 
		{
			document.getElementById("tbao-mail").innerHTML ="Email không hợp lệ .";
		}
	else 
		{
			document.getElementById("bd-mail").style.border ="1px solid green";
			document.getElementById("icon-mail").style.background = "url('images/icon-valid2.png') no-repeat -5px -5px";
			document.getElementById("tbao-mail").style.display="none";
			document.getElementById("bd-mail").style.background ="#ebf6ee";
		}

}
function kiemtra() {
	kthoten() ;
	ktngaysinh();
	kiemtragioitinh();
	kiemtradiachi();
	kiemtradt();
	kiemtramail();
}

var array_hinh = [];
	so_hinhanh =  4;
	
	function loadAnh()
	{
		for(i=0;i<4;i++)
		{
			array_hinh[i] = new Image();
			array_hinh[i].src = "images/ct" + i + ".jpg";
		}
	
	
	}
	function clickhinh1(){
		document.getElementById("hinh1").src =  "images/ct"  + 1 + ".jpg";
		document.getElementById("hinh2").style.transition =  "all 0.5s ease";
	}
	function clickhinh2(){
		document.getElementById("hinh1").src =  "images/ct"  + 2 + ".jpg";
		document.getElementById("hinh2").style.transition =  "all 0.5s ease";
	}
	function clickhinh3(){
		document.getElementById("hinh1").src =  "images/ct"  + 3 + ".jpg";
		document.getElementById("hinh2").style.transition =  "all 0.5s ease";
	}
	function clickhinh4(){
		document.getElementById("hinh1").src =  "images/ct"  + 4 + ".jpg";
		document.getElementById("hinh2").style.transition =  "all 0.5s ease";
	}