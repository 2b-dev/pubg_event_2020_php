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
	<audio controls autoplay loop class="sound-player">
		<source src="./sound.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>
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
										<label class="custom-control-label" for="checkaccept"></label><a data-toggle="modal" data-target="#policymodal"><img src="./img/entrance/text_policy.jpg" ></a></span>
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
	<div class="modal fade" id="policymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog full-screen" role="document">
			<div class="modal-content">
				<div class="box-policy">
				<p class="text-center">นโยบายการจัดเก็บ ใช้ เปิดเผย และจัดการข้อมูลส่วนบุคคล</p>
Acer Computer Co., Ltd. หรือ บริษัท เอเซอร์ คอมพิวเตอร์ จำกัด (ซึ่งต่อไปนี้จะเรียกว่า ‘เรา’) ตระหนักถึงความสำคัญของนโยบายพิทักษ์สิทธิส่วนบุคคลเป็นอย่างยิ่ง เราขอยืนยันการเก็บรักษาข้อมูลส่วนบุคคลของท่านไว้เป็นความลับอย่างดีที่สุด กรุณาอ่านรายละเอียดของนโยบายพิทักษ์สิทธิส่วนบุคคลนี้และกรุณาทำความเข้าใจเกี่ยวกับการดำเนินการที่เกี่ยวข้องพร้อมทั้งข้อมูลส่วนบุคคลของท่าน<br>
1.	การจัดเก็บข้อมูลส่วนบุคคล<br>
1.1 การจัดเก็บข้อมูลส่วนบุคคลแบบทางตรง<br>
เราจะเก็บข้อมูลส่วนบุคคลของท่าน เมื่อท่านลงทะเบียนร่วมกิจกรรมทางการตลาดต่าง ๆ ของเราและยินยอมให้เราเก็บ ใช้และเปิดเผยข้อมูลส่วนบุคคล ซึ่งการเปิดเผยข้อมูลส่วนบุคคล จะเป็นประโยชน์อย่างยิ่งต่อการนำเสนอบริการต่าง ๆ ที่ตรงกับความต้องการและความสนใจของท่าน ตัวอย่างของข้อมูลที่จะจัดเก็บตามความสมัครใจของท่านแต่ไม่จำกัดเพียง คือ อีเมล ชื่อ และข้อมูลติดต่อ ละความสนใจของท่าน <br>


1.2 ข้อกำหนดการใช้ cookies<br>
Cookies คือ ข้อมูลขนาดเล็กที่จะถูกส่งไปเก็บไว้ในบราวเซอร์ของท่าน เพื่อทำการเก็บข้อมูลการเข้าเยี่ยมชม เมื่อท่านเปิดเข้าไปเยี่ยมชมเว็บไซต์ของเราอีกครั้ง ในคราวหลังเครื่องก็จะจำได้ทันทีว่าท่านเคยเข้ามาเยี่ยมชมแล้ว Cookies ไม่ใช่โปรแกรมที่จะเข้าไปอยู่ในระบบคอมพิวเตอร์ของผู้ใช้งานแล้วทำลายไฟล์ต่าง ๆ แต่มีไว้เพื่อช่วยให้เราคอยติดตามว่าผู้ใช้แวะเยี่ยมหน้าใดบ้าง เริ่มต้นจากหน้าไหนจบลงด้วยหน้าไหนและบ่อยแค่ไหน เราไม่ได้ใช้ Cookies เพื่อตรวจสอบว่าผู้ใช้คือใคร เพียงแต่บอกว่าเครื่องคอมพิวเตอร์นี้เคยเข้ามาเยี่ยม ชมเว็บไซต์ของเราแล้ว Cookies ไม่ได้ใช้สำหรับเก็บข้อมูลส่วนบุคคล เช่น ชื่อ ที่อยู่ อีเมล หากท่านไม่ประสงค์ให้ Cookies เข้าไปอยู่ในคอมพิวเตอร์ของท่าน ท่านสามารถสั่งให้บราวเซอร์ปฏิเสธไฟล์ Cookies ได้<br>


1.3 ข้อกำหนดการใช้ Web Beacons<br>
เราอาจมีการใช้เทคโนโลยีที่เรียกว่า “web beacons” หรือ “pixel tags” ร่วมกับ cookies เพื่อตรวจสอบว่าท่านได้เข้าถึงข้อมูลที่เราเสนอทางเว็บไซต์หรืออีเมลแล้วหรือไม่เพื่อจะได้นำเสนอข้อมูลบริการให้ตรงความต้องการแต่ละท่านมากที่สุด โดยปกติท่านจะสามารถลดความสามารถของ web beacons ได้โดยสั่งให้บราวเซอร์ปฏิเสธไฟล์ Cookies ได้<br>


1.4 การเปิดเผยข้อมูลกับบุคคลภายนอกผู้ซึ่งให้บริการ<br>
สามารถตรวจสอบรายละเอียดได้ในข้อ 3.<br>


2.	การใช้ข้อมูลส่วนบุคคล<br>
จุดประสงค์หลักในการจัดเก็บข้อมูลส่วนบุคคล คือ นำเสนอบริการที่เหมาะสมที่สุดแก่ท่านในช่วงเวลาที่ท่านเข้ามาแวะเยี่ยมชม และใช้บริการเว็บไซต์ โดยไม่เสีย ค่าใช้จ่ายใด ๆ ทั้งสิ้น ซึ่งในบางครั้งอาจมีจดหมายอิเล็คทรอนิกส์ส่งถึงท่าน เพื่อแจ้งข้อมูลข่าวสาร กิจกรรม และบริการต่าง ๆ ทั้งนี้หากท่านไม่สนใจหรือไม่มี ความประสงค์ในการรับข้อมูลข่าวสารต่าง ๆ ท่านสามารถแจ้งยกเลิกได้ทุกเมื่อ สำหรับข้อมูลทุกชนิดที่ท่านมอบให้เรา ท่านมอบสิทธิในการใช้ ทำสำเนา แก้ไข ลบทิ้งทั้งหมด ดัดแปลง เผยแพร่ แปล และนำไปสร้างสรรค์งาน และ/หรือ นำข้อมูลดังกล่าวเข้าประกอบกับสื่อหรือเทคโนโลยีทุกรูปแบบที่มีอยู่โดยไม่จำต้องจ่ายค่าตอบแทนใด ๆ แก่ท่าน<br>


นอกจากนั้นเรารวบรวมข้อมูลส่วนบุคคลเพื่อวัตถุประสงค์ดังกล่าวนี้ รวมถึงแต่ไม่จำกัดเพียง<br>
2.1 การพัฒนาบริการและการใช้งานเว็บไซต์ของท่าน<br>
2.2 วิเคราะห์ประสิทธิภาพของสื่อโฆษณา การแข่งขัน และการส่งเสริมการขาย<br>
2.3 ปรับแต่งเว็บไซต์ตามความต้องการ รวมถึงการประเมินสถิติการเข้าเว็บไซต์<br>
2.4 ปรับปรุงให้เว็บไซต์ใช้งานได้งานขึ้นเหมาะสมกับความสนใจและความต้องการของท่าน<br>
2.5 ทำการตลาดและสื่อสารกับท่านเกี่ยวกับบริการของเรา<br>
2.6 ส่งข้อมูลเพิ่มตามที่ท่านร้องขอ<br>
2.7 ตอบข้อเสนอแนะของท่าน<br>
2.8 พัฒนาคุณภาพบริการของเรา ตามข้อมูลและผลสำรวจทางการตลาด<br>
2.9 แนะนำบริการที่เราเห็นว่าท่านอาจมีความสนใจ<br>


3.	การเปิดเผยข้อมูลส่วนบุคคล<br>
ปกติแล้วเรามิได้เปิดเผยข้อมูลส่วนบุคคลของท่านต่อผู้อื่น เว้นแต่ในกรณีที่ได้รับอนุญาตจากท่านและในกรณีพิเศษ ดังนี้<br>
3.1 ตัวแทนสื่อโฆษณา การตลาด หรือการส่งเสริมการขายที่ช่วยเพิ่มและวิเคราะห์ประสิทธิภาพของสื่อโฆษณา การตลาด และการส่งเสริมการขาย<br>
3.2 ผู้ใช้บังคับกฎหมาย หรือหน่วยงานราชการที่อำนาจร้องขอให้เปิดเผยข้อมูล<br>
3.3 บุคคลภายนอกผู้ซึ่งให้บริการ เช่น บริการดำเนินการเกี่ยวกับข้อมูล หรือผู้วิเคราะห์เว็บไซต์ เช่น Google Analytics<br>
3.4 ตามเงื่อนไขในหัวข้อ 2. การใช้ข้อมูลส่วนบุคคล<br>
3.5 ตรวจสอบเพื่อระบุตัวตนของท่าน<br>
3.6 เพื่อการบังคับใช้ข้อกำหนดและเงื่อนไขนี้ของเว็บไซต์<br>
3.7 เพื่อการตรวจสอบความเป็นไปได้ในการกระทำผิดกฎหมาย<br>
3.8 เพื่อทำให้เป็นไปตามคำสั่งศาลหรือกระบวนการทางกฎหมายอื่นภายในเขตอำนาจศาลที่เราดำเนินงานอยู่<br>


4.	เว็บไซต์และบริการของบุคคลภายนอกผู้ซึ่งให้บริการ<br>
เว็บไซต์ของเราอาจจะมีลิงค์ (link) ไปที่เว็บไซต์และบริการของบุคคลภายนอกผู้ซึ่งให้บริการ หากท่านกดลิงค์ดังกล่าวไปที่เว็บไซต์และบริการของบุคคลภายนอกผู้ซึ่งให้บริการ ท่านอาจถูกเก็บข้อมูลส่วนบุคคลของท่าน ซึ่งทางเราไม่สามารถรับผิดชอบใด ๆ แทนบุคคลภายนอกผู้ซึ่งให้บริการได้ เราแนะนำให้ท่านตรวจสอบนโยบายการจัดเก็บ ใช้ เปิดเผย และจัดการข้อมูลส่วนบุคคลของผู้ให้บริการนั่น ๆ ต่อไป<br>


5.	ความปลอดภัยและการจัดเก็บข้อมูลส่วนบุคคล<br>
ข้อมูลที่จัดเก็บทั้งหมดจะถูกจัดเก็บอย่างปลอดภัยและป้องกันข้อมูลส่วนบุคคลของท่านโดย<br>
• จำกัดการเข้าถึงข้อมูลส่วนบุคคล<br>
• จัดให้มีวิธีการเพื่อป้องกันไม่ให้มีการเข้าสู่ระบบคอมพิวเตอร์ที่ไม่ได้รับอนุญาต<br>
• จัดการทำลายข้อมูลส่วนบุคคลของท่านเพื่อความปลอดภัยเมื่อข้อมูลดังกล่าวไม่จำเป็นสำหรับวัตถุประสงค์ทางกฎหมายและธุรกิจอีกต่อไป<br>
เราจะจัดเก็บข้อมูลส่วนบุคคลของท่านตามระยะเวลาที่จำเป็นไปจนกว่าท่านจะแจ้งขอลบข้อมูลส่วนบุคคลที่ให้ไว้กับเรา หรือเพื่อทำให้เป็นไปตามคำสั่งศาลหรือกระบวนการทางกฎหมาย<br>


6.	สิทธิในการแก้ไขข้อมูลส่วนบุคคลของท่านและการยกเลิกความยินยอมการใช้และเปิดเผยข้อมูลส่วนบุคคล<br>
ท่านมีสิทธิที่จะขอเข้าถึง เปลี่ยนแปลง และ ขอแจ้งลบข้อมูลส่วนบุคคลที่ให้ไว้กับเราโดยการ “ติดต่อเรา” ซึ่งรายละเอียดและขั้นตอนการดำเนินการ ท่านสามารถตรวจสอบได้จากข้อมูล “ติดต่อเรา” ที่ระบุไว้ในนโยบายการจัดเก็บ ใช้ เปิดเผย และจัดการข้อมูลส่วนบุคคลนี้<br>


7.	สิทธิในการแก้ไขข้อกำหนดและเงื่อนไข<br>
เราสงวนสิทธิที่จะแก้ไขข้อกำหนดและเงื่อนไขนี้ได้ตลอดเวลา กรณีที่มีการเปลี่ยนแปลงในสาระสำคัญ การเปลี่ยนแปลงนโยบายดังกล่าวจะถูกประกาศพร้อมวันที่กำกับไว้ในเว็บไซต์นี้ เราแนะนำให้ท่านตรวจสอบข้อกำหนดและเงื่อนไขอย่างสม่ำเสมอเพื่อทราบถึงความเปลี่ยนแปลงใด ๆ ที่เกิดขึ้น<br>


8.	สิทธิของเรา<br>
ท่านรับทราบและตกลงว่า เรามีสิทธิในการเปิดเผยข้อมูลส่วนบุคคลแก่ หน่วยงานผู้มีอำนาจทางกฎหมาย หน่วยงานการกำกับควบคุมดูแล หน่วยงานของรัฐ หน่วยงานเกี่ยวกับภาษี หน่วยงานในการบังคับใช้กฎหมาย และหน่วยงานอื่น ๆ ที่เกี่ยวข้อง หรือเจ้าของสิทธิต่าง ๆ ที่เกี่ยวข้อง หากเรามีเหตุอันควรเชื่อได้ว่าการเปิดเผยข้อมูลส่วนบุคคลของท่านนั้นจำเป็นสำหรับการปฏิบัติตามหน้าที่ ความรับผิดขอบ การจัดการและข้อตกลง ไม่ว่าโดยสมัครใจหรือการบังคับ เพื่อวัตถุประสงค์ในการให้ความร่วมมือกับคำสั่ง การสอบสวน และ/หรือการร้องขอในรูปแบบต่าง ๆ ของหน่วยงานนั้น ๆ ภายใต้การบังคับของกฎหมายที่เกี่ยวข้อง ท่านตกลงว่าจะไม่ฟ้องร้องดำเนินคดีหรือดำเนินการใด ๆ ต่อเราและสละสิทธิเรียกร้องหรือสิทธิอื่นใดอันมีต่อเราที่อาจเกิดขึ้นจากการเปิดเผยข้อมูลส่วนบุคคลของท่านภายใต้สถานการณ์ดังกล่าวข้างต้น<br>


9.	ข้อมูลที่ท่านมอบให้กับทางบริษัท<br>
ในการระบุข้อมูลใด ๆ บนหรือผ่านเว็บไซต์เราและ/หรือ บริษัทในเครือ หรือผู้ให้บริการ ท่านมีความรับผิดชอบดังต่อไปนี้<br>
9.1 ท่านเป็นผู้มีกรรมสิทธิ์ในข้อมูลนั้น<br>
9.2 ข้อมูลนั้นเป็นความจริงและถูกต้อง<br>
9.3 ข้อมูลนั้นจะไม่ก่อให้เกิดความเสียหายต่อบุคคลหรือนิติบุคคลใด<br>
9.4 ข้อมูลนั้นมิใช่ข้อมูลที่ได้มาโดยการละเมิดลิขสิทธิ์ เครื่องหมายการค้า กรรมสิทธิ์ หรือสิทธิ์ในการเผยแพร่และความเป็นส่วนตัว<br>
9.5 ข้อมูลนั้นไม่ละเมิดบทบัญญัติแห่งกฎหมาย กฎ ระเบียบ หรือข้อบังคับใด ๆ<br>
9.6 ข้อมูลนั้นต้องไม่มีลักษณะสบประมาท กล่าวร้าย ดูถูก เกลียดชัง หรือก่อให้เกิดความขัดแย้งทางศาสนา หรือคุกคามบุคคลหนึ่งบุคคลใด<br>
9.7 ข้อมูลนั้นต้องไม่อ้างถึงเว็บไซต์ ที่อยู่อีเมล ที่อยู่ติดต่อ หรือหมายเลขโทรศัพท์ของเว็บไซต์หรือบุคคลอื่นใด<br>
9.8 หากข้อมูลนั้นมีความคล้ายคลึงหรือมีการระบุชื่อของบุคคลผู้มีตัวตน ท่านต้องได้รับความยินยอมจากบุคคลดังกล่าวในการระบุความคล้ายคลึง/ชื่อของบุคคลดังกล่าวในข้อมูล<br>
9.9 ข้อมูลนั้นต้องไม่มีไวรัสคอมพิวเตอร์ ตลอดจนโปรแกรมหรือไฟล์อย่างหนึ่งอย่างใดที่มีลักษณะบ่อนทำลายและอาจก่อให้เกิดความเสียหาย<br>


10.	ติดต่อบริษัทฯ<br>
ท่านมีสิทธิที่จะขอเข้าถึง เปลี่ยนแปลง และ ขอแจ้งลบข้อมูลส่วนบุคคลที่ให้ไว้กับเราโดยติดต่อบริษัท เดอะเว็บไฟทล์ จํากัด ได้ที่อีเมล mailus@theflight19.com


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