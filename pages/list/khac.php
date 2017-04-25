<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../../fonts/Comfortaa/Comfortaa-Bold.ttf">
    <link rel="stylesheet" type="text/css" href="../../fonts/Comfortaa/Comfortaa-Light.ttf">
    <link rel="stylesheet" type="text/css" href="../../fonts/Comfortaa/Comfortaa-Regular.ttf">
    <link rel="shorcut icon" href="../../img/icon.png" type="image/x-icon"/>
    <link rel="icon" href="../../img/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../../mystyle/gopgio_1.css">
    <link rel="stylesheet" type="text/css" href="../../mystyle/gopgio_2.css">
    <title>Góp Gió - Cho đi là nhận lại</title>
<title>Untitled Document</title>
</head>

<body>
	<script type="text/javascript" src="../../bootstrap/js/jquery-3.2.0.min.js"></script> 
	<script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../mystyle/gopgio_1.js"></script>
    <div class="wrapped">
        <!-- HEADER -->
        <div class="header_container">
                <div class="row" style="height:100%">
                <div class="col-md-3" style="height:100%;">
                    <!-- logo -->
                    <a href="../../index.html">
                    <img src="../../img/logo.png" alt="logo"  style="margin-left:20%; margin-right:20%; margin-top:3%; margin-bottom:3%">
                    </a>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <!-- Khung tim kiem -->
                    <input type="search_txt" id="timkiem" class="searching" placeholder="Tên ai đó hoặc mã số..."
                    style="width:65%; margin-bottom: 2%; margin-top:2%; margin-left:5%">
                    <button type="button" id="login_btn" 
                    style="margin-bottom:2%; margin-top:2%; margin-left:5%; margin-right:15%">
                    <a href="../../pages/login/login.html">Đăng nhập</a></button>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <div class="contentCategory_container">
            <div class="list_container">
            	<!-- Danh sách -->
            	<div class="listName_container">
                <!--
                    <input id="all_tab" type="radio" name="tab_listGroup" checked="checked"/>
                    <label for="all_tab">Tất cả</label>
                    
                    <input id="emegen_tab" type="radio" name="tab_listGroup"/>
                    <label for="emegen_tab">Khẩn cấp</label>
                    
                    <input id="edu_tab" type="radio" name="tab_listGroup"/>
                    <label for="edu_tab">Giáo dục</label>
                    
                    <input id="family_tab" type="radio" name="tab_listGroup"/>
                    <label for="family_tab">Gia đình</label>
                    
                    <input id="health_tab" type="radio" name="tab_listGroup"/>
                    <label for="health_tab">Sức khỏe</label>
                    
                    <input id="sport_tab" type="radio" name="tab_listGroup"/>
                    <label for="sport_tab">Thể thao</label>
                    
                    <input id="comm_tab" type="radio" name="tab_listGroup"/>
                    <label for="comm_tab">Cộng đồng</label>
                    
                    <input id="wish_tab" type="radio" name="tab_listGroup"/>
                    <label for="wish_tab">Điều ước</label>
                    
                    <input id="event_tab" type="radio" name="tab_listGroup"/>
                    <label for="event_tab">Sự kiện</label>
                    
                    <input id="other_tab" type="radio" name="tab_listGroup"/>
                    <label for="other_tab">Khác</label>
                -->
                    
                    <ul>
                    	<a href="tatca.php"><li>Tất cả</li></a>
                    	<a href="khancap.php"><li>Khẩn cấp</li></a>
                    	<a href="giaoduc.php"><li>Giáo dục</li></a>
                    	<a href="suckhoe.php"><li>Sức khỏe</li></a>
                        <a href="giadinh.php"><li>Gia đình</li></a>
                    	<a href="thethao.php"><li>Thể thao</li></a>
                    	<a href="congdong.php"><li>Cộng đồng</li></a>
                    	<a href="dieuuoc.php"><li>Điều ước</li></a>
                    	<a href="dongvat.php"><li>Động vật</li></a>
                        <a href="sukien.php"><li>Sự kiện</li></a>
                    	<a href="khac.php"><li class="checked">Khác</li></a>
                    </ul>
            	</div>
            </div>
        	<div class="listContentCategory_container">
                <div class="all_tab">
                    <div class="objectList_container">
                    <!-- Danh sach -->
                        <a href="#" title="Click để xem chi tiết."><img id="object1_img" src="../../img/object/object1.jpg">
                            <div class="objectList_statusDonateBorder">
                                <p class="objectList_donatedMoney" id="moneyDonated1">45tr của</p>
                                <p class="objectList_donateNeeding" id="moneyNeeding1_txt">100tr</p>
                            <hr  size="3" style="margin-left:4%; width:92%;">
                            </div>
                            <div class="objectList_caption">
                                <p class="objectList_title" id="#">Tiêu đề 1</p>
                                <p class="objectList_shortDetail" id="shortDetail_1">Chi tiết ngắn</p>
                            </div>
                        </a>
                    </div>
                     
                    <!-- object 2 -->
                    <div class="objectList_container">
                        <a href="#" title="Click để xem chi tiết."><img id="object1_img" src="../../img/object/object2.jpg">
                            <div class="objectList_statusDonateBorder">
                                <p class="objectList_donatedMoney" id="moneyDonated2">45tr của</p>
                                <p class="objectList_donateNeeding" id="moneyNeeding2_txt">100tr</p>
                            <hr  size="3" style="margin-left:4%; width:92%;">
                            </div>
                            <div class="objectList_caption">
                                <p class="objectList_title" id="#">Tiêu đề 2</p>
                                <p class="objectList_shortDetail" id="shortDetail_2">Chi tiết ngắn</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- object 3 -->
                    <div class="objectList_container">
                        <a href="#" title="Click để xem chi tiết."><img id="object1_img" src="../../img/object/object3.jpg">
                            <div class="objectList_statusDonateBorder">
                                <p class="objectList_donatedMoney" id="moneyDonated3">45tr của</p>
                                <p class="objectList_donateNeeding" id="moneyNeeding3_txt">100tr</p>
                            <hr  size="3" style="margin-left:4%; width:92%;">
                            </div>
                            <div class="objectList_caption">
                                <p class="objectList_title" id="#">Tiêu đề 3  </p>
                                <p class="objectList_shortDetail" id="shortDetail_3">Chi tiết ngắn</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- object 4 -->
                    <div class="objectList_container">
                        <a href="#" title="Click để xem chi tiết."><img id="object1_img" src="../../img/object/object4.JPG">
                            <div class="object_statusDonateBorder">
                                <p class="object_donatedMoney" id="moneyDonated4">45tr của</p>
                                <p class="object_donateNeeding" id="moneyNeeding4_txt">100tr</p>
                            <hr  size="3" style="margin-left:4%; width:92%;">
                            </div>
                            <div class="object_caption">
                                <p class="object_title" id="#">Tiêu đề 4</p>
                                <p class="object_shortDetail" id="shortDetail_4">Chi tiết ngắn</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- object 5 -->
                    <div class="objectList_container">
                        <a href="#" title="Click để xem chi tiết."><img id="object1_img" src="../../img/object/object5.JPG">
                            <div class="objectList_statusDonateBorder">
                                <p class="objectList_donatedMoney" id="moneyDonated5">45tr của</p>
                                <p class="objectList_donateNeeding" id="moneyNeeding5_txt">100tr</p>
                            <hr  size="3" style="margin-left:4%; width:92%;">
                            </div>
                            <div class="objectList_caption">
                                <p class="objectList_title" id="#">Tiêu đề 5</p>
                                <p class="objectList_shortDetail" id="shortDetail_5">Chi tiết ngắn</p>
                            </div>
                        </a>
                    </div>
                     
                    <!-- object 6 -->
                    <div class="objectList_container">
                        <a href="#" title="Click để xem chi tiết."><img id="object1_img" src="../../img/object/object6.JPG">
                            <div class="objectList_statusDonateBorder">
                                <p class="objectList_donatedMoney" id="moneyDonated6">45tr của</p>
                                <p class="objectList_donateNeeding" id="moneyNeeding6_txt">100tr</p>
                            <hr  size="3" style="margin-left:4%; width:92%;">
                            </div>
                            <div class="objectList_caption">
                                <p class="objectList_title" id="#">Tiêu đề 6</p>
                                <p class="objectList_shortDetail" id="shortDetail_6">Chi tiết ngắn</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- object 7 -->
                    <div class="objectList_container" style="margin-bottom:2%;">
                        <a href="#" title="Click để xem chi tiết."><img id="object1_img" src="../../img/object/object7.JPG">
                            <div class="objectList_statusDonateBorder">
                                <p class="objectList_donatedMoney" id="moneyDonated7">45tr của</p>
                                <p class="objectList_donateNeeding" id="moneyNeeding7_txt">100tr</p>
                            <hr  size="3" style="margin-left:4%; width:92%;">
                            </div>
                            <div class="objectList_caption">
                                <p class="objectList_title" id="#">Tiêu đề 7</p>
                                <p class="objectList_shortDetail" id="shortDetail_7">Chi tiết ngắn</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- object 8 -->
                    <div class="objectList_container" style="margin-bottom:2%;">
                        <a href="#" title="Click để xem chi tiết."><img id="object1_img" src="../../img/object/object8.JPG">
                            <div class="objectList_statusDonateBorder">
                                <p class="objectList_donatedMoney" id="moneyDonated8">45tr của</p>
                                <p class="objectList_donateNeeding" id="moneyNeeding8_txt">100tr</p>
                            <hr  size="3" style="margin-left:4%; width:92%;">
                            </div>
                            <div class="objectList_caption">
                                <p class="objectList_title" id="#">Tiêu đề 8</p>
                                <p class="objectList_shortDetail" id="shortDetail_8">Chi tiết ngắn</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- object 9 -->
                    <div class="objectList_container" style="margin-bottom:2%;">
                        <a href="#" title="Click để xem chi tiết."><img id="object1_img" src="../../img/object/object9.JPG">
                            <div class="objectList_statusDonateBorder">
                                <p class="objectList_donatedMoney" id="moneyDonated9">45tr của</p>
                                <p class="objectList_donateNeeding" id="moneyNeeding9_txt">100tr</p>
                            <hr  size="3" style="margin-left:4%; width:92%;">
                            </div>
                            <div class="objectList_caption">
                                <p class="objectList_title" id="#">Tiêu đề 9</p>
                                <p class="objectList_shortDetail" id="shortDetail_9">Chi tiết ngắn</p>
                            </div>
                        </a>
                    </div>
                    <!-- Ket thuc danh sach -->
                </div>
            </div>
        </div>
</body>
</html>
