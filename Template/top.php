<style>
    .mySlides {
        display: none;
    }
</style>
<div class="post">
    <img class="mySlides" src="./Assets/img/image 95.png" style="width: 1474.56px; height:748px;" alt="">
    <img class="mySlides" src="./Assets/img/Rectangle 1919.png" style="width: 1474.56px; height:748px;" alt="">
    <img class="mySlides" src="./Assets/img/Rectangle 1918.png" style="width: 1474.56px; height:748px;" alt="">

</div>

<div class="top">
    <div class="logo">
        <img src="./Assets/img/Logo.png" alt="">
    </div>
    <div class="search">
        <form action="">
            <input type="text" placeholder="Tìm kiếm sản phẩm ..." name="tim kiem" id="">
            <button type="sub"><img src="./Assets/img/icons8_search 6.png" alt=""></button>
            <div class="line"></div>
            <select name="Chon thu muc" id="">
                <option value="Chọn danh mục">Chọn Danh Mục</option>
            </select>
        </form>
    </div>
    <div class="like">
        <img src="./Assets/img/Group 874.png" alt="">
    </div>
    <div class="cart">
        <p>10</p>
        <div class="gr-price">
            <span id="boot-icon" class="bi bi-cart" style="font-size:25px"></span>
            <select name="" id="">
                <option value="390.000.000d">390.000.000đ</option>
            </select>
        </div>

    </div>
    <div id="menu">
        <ul>
            <li><a href="">TRANG CHỦ</a></li>
            <li><a href="">VỀ CHÚNG TÔI</a></li>
            <li><a href="">SẢN PHẨM</a></li>
            <li><a href="">DỊCH VỤ</a></li>
            <li><a href="">BLOGS</a></li>
            <li><a href="">LIÊN HỆ</a></li>

        </ul>
    </div>

</div>


<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); 
    }
</script>