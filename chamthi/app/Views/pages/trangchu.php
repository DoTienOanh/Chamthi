<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/tcgv.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
    <div class="frame">
        <?php include('header.php'); ?>
        <div class="frame2">
            <a href="">
                <span>TRANG CHỦ</span>
            </a>
            <a href="https://ktcn.tvu.edu.vn/gioi-thieu/gioi-thieu-khoa/1.html">
                <span>GIỚI THIỆU</span>
            </a>
            <a href="">
                <span>HOẠT ĐỘNG TH School</span>
            </a>
            <a href="lichchamthind.php">
                <span>LỊCH CHẤM THI</span>
            </a>
        </div>
        <div class="frame3">
            <button class="clickleft" onclick="plusDivs(-1)">&#10094;</button>
                <img class="mySlides" src="public/images/anh_1.jpg" style="width:60%; height: 300px;">
                <img class="mySlides" src="public/images/anh_2.jpg" style="width:60%; height: 300px;">
                <img class="mySlides" src="public/images/anh_3.jpg" style="width:60%; height: 300px;">
            <button class="clickright" onclick="plusDivs(1)">&#10095;</button>
        </div>
        <div class="frame4">
            <span>GIỚI THIỆU</span>
            <label>TẠI SAO NÊN CHỌN TH SCHOOL?</label>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TH School đem tới các chương trình giảng dạy quốc tế chất lượng cao, bao gồm Chương trình Mầm non Quốc tế và Chương trình Tiểu học Quốc tế. Được công nhận bởi Cambridge International Education, học sinh trung học có thể đạt được các bằng cấp được quốc tế công nhận bằng cách hoàn thành chương trình Cambridge Lower Secondary (Lớp 6-8), Chứng chỉ Giáo dục Trung học Quốc tế (Lớp 9-10), và các cấp độ A và AS của Cambridge (Lớp 11-12). Thông qua sự công nhận của tổ chức Western Association of Schools and Colleges (WASC), học sinh trường TH School cũng có cơ hội nhận bằng TH School High Diploma, được công nhận bởi các hệ thống giáo dục đại học trên toàn cầu. Với nhiều lộ trình học tập khác nhau, các học sinh tốt nghiệp TH School đã được nhận vào các trường đại học hàng đầu tại Việt Nam và trên thế giới.</p>
            <a href="https://thschool.edu.vn/tai-sao-chon-th-school/niem-tu-hao-cua-th-school-ct19.html">Xem thêm</a>
        </div>
        <div class="frame5">
            <h3>TIN TỨC</h3>
            <div class="new">
                <div class="new1">
                    <img src="public/images/new_1.jpg"/>
                </div>
                <div class="newtxt">
                    <p><a href="https://thschool.edu.vn/proudly-th-school/unique-8020-teaching-model-ct29.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mô hình 80/20 độc đáo</a></p>
                    <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Với chương trình học tối ưu khi kết hợp 80% thời lượng giảng dạy bằng tiếng Anh, và 20% thời lượng các môn Việt Nam học bao gồm tiếng Việt, Ngữ văn, Lịch sử, Địa lý, GDCD ...</a>
                    <span><a href="https://thschool.edu.vn/proudly-th-school/unique-8020-teaching-model-ct29.html">Xem thêm</a></span>
                </div>
            </div>

            <div class="new">
                <div class="newtxt">
                    <p><a href="https://thschool.edu.vn/proudly-th-school/multicultural-learning-environment-ct31.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Môi trường học tập đa văn hóa</a></p>
                    <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Với cộng đồng học sinh đến từ 21 quốc gia, các em có cơ hội giao lưu văn hóa, trao đổi quan điểm và có môi trường để luyện tập ngôn ngữ.</a>
                    <span><a href="https://thschool.edu.vn/proudly-th-school/multicultural-learning-environment-ct31.html">Xem thêm</a></span>
                </div>
                <div class="new1">
                    <img src="public/images/new_2.jpg"/>
                </div>
            </div>

            <div class="new">
                <div class="new1">
                    <img src="public/images/new_3.jpg"/>
                </div>
                <div class="newtxt">
                    <p><a href="https://thschool.edu.vn/proudly-th-school/state-of-the-art-facility-ct32.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cơ sở vật chất hiện đại</a></p>
                    <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TH School sở hữu quy mô diện tích cho cả 2 cơ sở Chùa Bộc và Hòa Lạc lên tới 20,000m2, trong đó các phòng học đều được trang bị đầy đủ với các thiết bị hiện đại.</a>
                    <span><a href="https://thschool.edu.vn/proudly-th-school/state-of-the-art-facility-ct32.html">Xem thêm</a></span>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
    </script>
    <link rel="stylesheet" href="public/css/trangchu.css">
</body>
</html>

