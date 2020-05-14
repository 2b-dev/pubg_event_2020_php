<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PUBG</title>
	<meta name="description" content="PUBG" />
	<meta name="keywords" content="PUBG" />
	<meta name="author" content="Nu Chaimongkon" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="./@chenfengyuan/datepicker/dist/datepicker.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mdb.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="./@chenfengyuan/datepicker/dist/datepicker.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
<p class="landscap-txt"><span>รับชมในแนวนอน</span> <br>(Watch in landscape)</p>
	<div class="section-login">
		<div class="absolute-contain-bg-img">
			<div class="relative-contain-bg-img">
				<img src="./img/entrance/entrance.jpg" class="img-full-bg">
				<a data-toggle="modal" data-target="#resgiterfrm">
					<div class="box-cotain-arrow-entrance animated zoomIn infinite" >
						<img src="./img/circle2.png" />
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="modal fade" id="resgiterfrm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog full-screen" role="document">
			<div class="modal-content">
				<div class="box-register-modal">
					<ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link tab-pubg register active" id="pills-home-tab" data-toggle="pill"
								href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link tab-pubg login" id="pills-profile-tab" data-toggle="pill"
								href="#pills-profile" role="tab" aria-controls="pills-profile"
								aria-selected="false"></a>
						</li>
					</ul>
					<div class="tab-content pt-2 pl-1" id="pills-tabContent">
						<div class="tab-pane p-3 fade show active" id="pills-home" role="tabpanel"
							aria-labelledby="pills-home-tab">
							<div class="form-group row">
								<div class="col-12 col-md-5">
									<img src="./img/entrance/name.jpg">
								</div>
								<div class="col-12 col-md-7">
									<input type="text" class="form-control" id="inputname" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12 col-md-5">
									<img src="./img/entrance/surname.jpg">
								</div>
								<div class="col-12 col-md-7">
									<input type="text" class="form-control" id="inputsurname" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12 col-md-5">
									<img src="./img/entrance/dob.jpg">
								</div>
								<div class="col-12 col-md-7">
									<input type="text" class="form-control" id="inputdob" placeholder=""
										data-toggle="datepicker">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12 col-md-5">
									<img src="./img/entrance/email.jpg">
								</div>
								<div class="col-12 col-md-7">
									<input type="email" class="form-control" id="inputemail" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12 text-center">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="checkaccept">
										<label class="custom-control-label" for="checkaccept"></label><a href="" target="_blank"><img src="./img/entrance/text_policy.jpg" ></a></span>
									</div>
								</div>
							</div>
							<div class="row justify-content-around align-items-center">
								<div class="col-3 align-items-center">
									<img src="./img/icon_pre_reg.png" class="img-fluid">
								</div>
								<div class="col-5 align-items-center">
									<a class="" onclick="regclk();">
										<img src="./img/entrance/reg_btn.jpg">
									</a>
								</div>
								<div class="col-3 align-items-center">
									<img src="./img/icon_intel_reg.png" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="tab-pane p-3 fade" id="pills-profile" role="tabpanel"
							aria-labelledby="pills-profile-tab">
							<div class="form-group row justify-content-center">
								<div class="col-12 col-md-10 mb-3">
									<img src="./img/entrance/title_login.jpg" class="img-fluid">
								</div>
								<div class="col-12 col-md-10 mb-3">
									<input type="email" class="form-control" id="inputemail_login" placeholder="">
								</div>
								<div class="col-12 col-md-10 mb-3">
									<img src="./img/entrance/text-sub-login.jpg" class="img-fluid">
								</div>
							</div>
							<div class="row justify-content-around align-items-center">
								<div class="col-3 align-items-center">
									<img src="./img/icon_pre_reg.png" class="img-fluid">
								</div>
								<div class="col-5 align-items-center">
									<a class="" onclick="loginclk();">
										<img src="./img/entrance/btn_login.png">
									</a>
								</div>
								<div class="col-3 align-items-center">
									<img src="./img/icon_intel_reg.png" class="img-fluid">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	</script>
	<script>
		$('#resgiterfrm').on('hidden.bs.modal', function (e) {

		})
		$('[data-toggle="datepicker"]').datepicker({
			format: 'dd-mm-yyyy'
		});
		function regclk(){
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var user_name = $('#inputname').val();
			var user_surname = $('#inputsurname').val();
			var user_dob = $('#inputdob').val();
			var user_email = $('#inputemail').val();
			if(user_name == ''|| user_surname == ''|| user_dob == ''|| user_email == ''){				
				Swal.fire(
					'ผิดพลาด!',
					'กรุณากรอกข้อมูลให้ครบถ้วน',
					'error'
					)
			}else if (user_email.match(mailformat)){
				if($('#checkaccept').is(':checked')){
					$.ajax({
						url: 'register_post.php',
						method: 'POST',
						data: {
							user_name: user_name,
							user_surname: user_surname,
							user_dob: user_dob,
							user_email: user_email,
						},
						success: function (data) {
							if (data == 'success') {   
								Swal.fire(
									'สำเร็จ',
									'ลงทะเบียนสำเร็จ',
									'success'
								).then((result)=>{
									if(result.value){
										window.location.href = 'index.php';
									}
								})             
							}
							else if (data == 'havedata') {								
								Swal.fire(
									'ผิดพลาด!',
									'อีเมลล์ถูกใช้แล้ว',
									'error'
								)
							}
							else if (data == 'error') {								
								Swal.fire(
									'ผิดพลาด!',
									'มีบางอย่างผิดพลาด กรุณาลองอีกครั้ง',
									'error'
								)
							}
							else {
								Swal.fire(
									'ผิดพลาด!',
									'มีบางอย่างผิดพลาด กรุณาลองอีกครั้ง',
									'error'
								)
							}
						}
					})
				}else{
					Swal.fire(
					'ผิดพลาด!',
					'กรุณายอมรับข้อตกลง',
					'error'
					)
				}
			}else{
				Swal.fire(
					'ผิดพลาด!',
					'อีเมลไม่ถูกต้อง',
					'error'
				)
			}
			
		}

		function loginclk(){
			var l_user_email = $('#inputemail_login').val();
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(l_user_email == ''){
				Swal.fire(
					'ผิดพลาด!',
					'กรุณากรอกข้อมูลให้ครบถ้วน',
					'error'
				)
			}else if(l_user_email.match(mailformat)){
				$.ajax({
					url: 'login_post.php',
					method: 'POST',
					data: {
						l_user_email: l_user_email,
					},
					success: function (data) {
						if (data == 'success') {                    
							Swal.fire(
								'สำเร็จ',
								'เข้าสู่ระบบสำเร็จ',
								'success'
							).then((result)=>{
								if(result.value){
									window.location.href = 'index.php';
								}
							})
						}
						else if (data == 'nodata') {							
							Swal.fire(
								'ผิดพลาด!',
								'อีเมลนี้ยังไม่ถูกลงทะเบียน',
								'error'
							)
						}
						else if (data == 'error') {
							Swal.fire(
								'ผิดพลาด!',
								'มีบางอย่างผิดพลาด กรุณาลองอีกครั้ง',
								'error'
							)
						}
						else {
							Swal.fire(
								'ผิดพลาด!',
								'มีบางอย่างผิดพลาด กรุณาลองอีกครั้ง',
								'error'
							)
						}
					}
				})
			}else{
				Swal.fire(
					'ผิดพลาด!',
					'อีเมลไม่ถูกต้อง',
					'error'
				)
			}
		}
	</script>
</body>

</html>