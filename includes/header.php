<?php session_start(); ?>
<header class="h-[64px] pl-[50px] w-screen bg-[#e1042b] fixed top-[0] z-10">
    <nav class="w-full h-full flex items-center gap-[5px]">
        <a href="?action=index"><img src="./img/Logo.png" class="h-full w-[161px] object-cover" alt="" /></a>
        <a href="#"
            class="flex gap-[5px] justify-between items-center h-[42px] rounded-[10px] px-[3px] py-[5px] bg-[#ffffff33] text-white">
            <i class="fa-regular fa-rectangle-list text-[20px]"></i>
            <p class="text-[12px]">Danh mục</p>
        </a>
        <a href="#"
            class="flex gap-[8px] justify-between items-center h-[42px] rounded-[10px] px-[8px] py-[5px] bg-[#ffffff33] text-white">
            <i class="fa-solid fa-location-dot text-[20px]"></i>
            <div class="nav-text-location text-center">
                <p class="text-[10px] font-bold">
                    Xem giá tại <i class="fa-solid fa-angle-down"></i>
                </p>
                <p class="text-[14px]">Hà Nội</p>
            </div>
        </a>
        <form action="?action=searchProduct" method="post" class="w-[300px] h-[34px] relative">
            <label for="search" class="absolute top-[50%] translate-y-[-50%] left-[10px]">
                <i class="fa-solid fa-magnifying-glass text-[#707070] cursor-pointer"></i>
            </label>
            <input type="text" name="nameProduct" class="w-full h-full rounded-[10px] px-[30px]"
                placeholder="Bạn cần tìm gì ?" />
            <button type="none" id="search"></button>
        </form>
        <a href="#"
            class="flex justify-center items-center gap-[10px] hover:bg-[#ffffff33] hover:h-[55px] h-[42px] rounded-[10px] px-[8px] py-[5px]">
            <i class="fa-solid fa-phone text-[20px] text-white"></i>
            <div class="nav-text-phone text-[12px] text-white">
                <p>Gọi mua hàng</p>
                <p>1800.2097</p>
            </div>
        </a>
        <a href="#"
            class="flex justify-center items-center gap-[10px] hover:bg-[#ffffff33] hover:h-[55px] h-[42px] rounded-[10px] px-[8px] py-[5px]">
            <i class="fa-solid fa-location-dot text-[20px] text-white"></i>
            <p class="text-white text-[12px]">
                Cửa hàng
                <br />
                gần bạn
            </p>
        </a>
        <a href="#"
            class="flex justify-center items-center gap-[10px] hover:bg-[#ffffff33] hover:h-[55px] h-[42px] rounded-[10px] px-[8px] py-[5px]">
            <i class="fa-solid fa-truck-fast text-[20px] text-white"></i>
            <p class="text-white text-[12px]">
                Tra cứu
                <br />
                đơn hàng
            </p>
        </a>
        <a href="?action=test"
            class="flex justify-center items-center gap-[10px] hover:bg-[#ffffff33] hover:h-[55px] h-[42px] rounded-[10px] px-[8px] py-[5px]">
            <i class="fa-solid fa-cart-shopping text-[20px] text-white"></i>
            <p class="text-white text-[12px]">
                Giỏ
                <br />
                hàng
            </p>
        </a>
        <?php if (isset($_SESSION['user_name']) && $_SESSION['role'] == 0) { ?>
        <div class="user w-[130px] flex">
            <span class="text-[#fff] text-[12px]">Xin chào: <?= $_SESSION['user_name'] ?>
                <a class="text-[#fff] text-[12px] underline"
                    href="?action=infoUser&userName=<?= $_SESSION['user_name'] ?>">Thông tin tài khoản</a>
            </span>
        </div>
        <a href="?action=logout"
            class="flex flex-wrap justify-center items-center gap-[5px] bg-[#ffffff33] h-[55px] rounded-[10px] px-[8px] py-[5px] cursor-pointer ">
            <i class="fa-solid fa-right-from-bracket text-white text-[20px] w-full text-center"></i>
            <p class="text-[12px] text-white">Đăng xuất</p>
        </a>
        <?php  } else if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) { ?>
        <a href="?action=admin&id=1"
            class="flex flex-wrap justify-center items-center gap-[5px] bg-[#ffffff33] h-[55px] rounded-[10px] px-[8px] py-[5px] cursor-pointer">
            <i class="fa-solid fa-user text-white text-[20px] w-full text-center"></i>
            <p class="text-[12px] text-white">Đến trang quản trị</p>
        </a>
        <a href="?action=logout"
            class="flex flex-wrap justify-center items-center gap-[5px] bg-[#ffffff33] h-[55px] rounded-[10px] px-[8px] py-[5px] cursor-pointer ">
            <i class="fa-solid fa-right-from-bracket text-white text-[20px] w-full text-center"></i>
            <p class="text-[12px] text-white">Đăng xuất</p>
        </a>
        <?php } else { ?>
        <span id="openLogin"
            class="flex flex-wrap justify-center items-center gap-[5px] bg-[#ffffff33] h-[55px] rounded-[10px] px-[8px] py-[5px] cursor-pointer">
            <i class="fa-solid fa-user text-white text-[20px] w-full text-center"></i>
            <p class="text-[12px] text-white">Đăng nhập</p>
        </span>
        <?php if (isset($_SESSION['errorsLogin']) && $_SESSION['errorsLogin'] == true) { ?>
        <script>
        let errorsLogin = true;
        </script>
        <?php
                session_destroy();
            } ?>
        <?php if (isset($_SESSION['errorsSignIn']) && $_SESSION['errorsSignIn'] == true) { ?>
        <script>
        let errorsSignIn = true;
        </script>
        <?php
                session_destroy();
            }
            ?>
        <?php if (isset($_SESSION['errorForgot']) && $_SESSION['errorForgot'] == true) { ?>
        <script>
        let errorForgot = true;
        </script>
        <?php } ?>
        <?php session_destroy();
        } ?>
    </nav>

</header>