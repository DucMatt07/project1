<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./build/tailwind.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://kit.fontawesome.com/84084c404d.js" crossorigin="anonymous"></script>
</head>

<body class="scroll-smooth">
    <div class="container relative h-auto" id="showHere">
        <?php include './includes/header.php' ?>
        <main class="w-screen px-[100px] mt-[50px] bg-[#fcfcfc]">
            <section class="flex justify-between gap-[20px]">
                <!-- MENU  -->
                <div class="menu-main w-[225px] mt-[20px] rounded-[15px] shadow-menu bg-[#ffffff]">
                    <?php foreach ($category as $value) { ?>
                    <a href="?action=<?php echo $value['action'] ?>"
                        class="menu-item flex justify-between items-center hover:bg-[#ddd] py-[10px] px-[10px] rounded-[5px]">
                        <p class="flex items-center gap-[5px]">
                            <i class="  fa-solid <?php echo $value['icon'] ?> text-black text-[25px]"></i>
                            <span class="text-[12px] font-bold text-[#343a40]">
                                <?php echo $value['category_name'] ?></span>
                        </p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                    <?php  } ?>






                </div>
                <!-- SLIDER -->
                <div class="slider w-[767.5px] h-[450px] mt-[20px] rounded-b-[10px] shadow-menu bg-[#ffffff]">
                    <div id="slider-container-img" class=" w-full h-[75%] relative overflow-hidden">

                        <img src="./img/slider-1.webp" class="w-full h-full object-cover absolute left-[0%]" alt="" />
                        <img src="./img/slider-2.webp" class="w-full h-full object-cover absolute left-[-100%]"
                            alt="" />
                        <img src="./img/slider-3.webp" class="w-full h-full object-cover absolute left-[-100%]"
                            alt="" />
                        <img src="./img/slider-4.webp" class="w-full h-full object-cover absolute left-[-100%]"
                            alt="" />
                        <img src="./img/slider-5.webp" class="w-full h-full object-cover absolute left-[-100%]"
                            alt="" />
                    </div>
                    <div class="slider-title w-full h-[25%] flex">
                        <div
                            class="slider-title-item w-[20%] hover:bg-[#eee] cursor-pointer flex items-center justify-center active  ">
                            <p class="text-[13px]">
                                SAMSUNG M55
                                <br />
                                Giá tốt chốt ngay
                            </p>
                        </div>
                        <div
                            class="slider-title-item w-[20%] flex items-center justify-center hover:bg-[#eee] cursor-pointer">
                            <p class="text-[13px]">
                                POCO M6
                                <br />
                                Giá chỉ 3.89 triệu
                            </p>
                        </div>
                        <div
                            class="slider-title-item w-[20%] flex items-center justify-center hover:bg-[#eee] cursor-pointer">
                            <p class="text-[13px]">
                                ASUS TUF GAMING
                                <br />
                                Giá chỉ 16.49 triệu
                            </p>
                        </div>
                        <div
                            class="slider-title-item w-[20%] flex items-center justify-center hover:bg-[#eee] cursor-pointer">
                            <p class="text-[13px]">
                                JBL T115BT
                                <br />
                                Giá chỉ 250k
                            </p>
                        </div>
                        <div
                            class="slider-title-item w-[20%] flex items-center justify-center hover:bg-[#eee] cursor-pointer">
                            <p class="text-[13px]">
                                PHILIPS PPM3522
                                <br />
                                Giá chỉ 1.79 triệu
                            </p>
                        </div>
                    </div>
                </div>
                <!-- RIGHT BANNER -->
                <div class="right-banner w-[265px] h-[450px] flex flex-wrap justify-between flex-col mt-[20px]">
                    <a href="#" class="shadow-menu h-[25%] block w-full rounded-[10px]">
                        <img src="./img/right-banner-1.webp" class="w-full h-full object-cover rounded-[10px]" alt="" />
                    </a>
                    <a href="#" class="shadow-menu h-[25%] block w-full rounded-[10px]">
                        <img src="./img/right-banner-2.webp" class="w-full h-full object-cover rounded-[10px]" alt="" />
                    </a>
                    <a href="#" class="shadow-menu h-[25%] block w-full rounded-[10px]">
                        <img src="./img/right-banner-3.webp" class="w-full h-full object-cover rounded-[10px]" alt="" />
                    </a>
                </div>
            </section>
            <a href="#" class="banner w-full mt-[15px] block">
                <img class="w-full rounded-[10px] shadow-menu" src="./img/banner.gif" alt="" />
            </a>
            <?php foreach ($data as $value) { ?>
            <section class="flex flex-wrap mt-[20px] min-h-[250px] mb-[10px]">
                <?php foreach ($value['title'] as $titles) { ?>
                <?php foreach ($titles as $title) { ?>
                <div class="product-list-title flex justify-between w-full mb-[20px]">
                    <h2 class="uppercase text-[#444] font-semibold text-[22px] mr-[20px] text-nowrap w-[30%]">
                        <?php echo $title ?>
                    </h2>
                    <?php } ?>
                    <?php } ?>
                    <div class="list-item-tag flex justify-end gap-3">
                        <?php foreach ($value['type'] as $types) { ?>
                        <?php foreach ($types as $type) { ?>
                        <a href="#"
                            class="flex items-center justify-center  last:mr-0 bg-[#f3f4f6] border-[1px] border-solid border-[#e5e7eb] rounded-[10px] text-[#444] text-[13px] h-[34px] px-[10px] py-[10px] text-nowrap">
                            <p class=""><?php echo $type ?></p>
                        </a>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="list-items w-full flex gap-[20px]  justify-between overflow-hidden">
                    <!-- ITEM IN HERE -->
                    <?php foreach ($value['products'] as $products) { ?>
                    <div class="item px-[15px] w-[25%] rounded-[15px] shadow-menu relative">
                        <div class="sale-item-tag absolute top-0 left-0 h-[31px] w-[80px]">
                            <img class="w-full h-full" src="./img/sale-tag.png" alt="" />
                            <p
                                class="sale-price absolute top-[50%] translate-y-[-70%] left-[10px] text-[#fff] text-[12px] font-bold">
                                Giảm <?php echo $products['product_sale'] ?>%
                            </p>
                        </div>
                        <a href="?action=productDetails&id=<?= $products['product_id'] ?>" class="text-[#444]">
                            <div class="item-img w-full mt-[25px] flex justify-center">
                                <img class="w-[160px]" src="./img/<?php echo $products['product_img'] ?>" alt="" />
                            </div>
                            <div class="item-title mb-[5px]">
                                <h3 class="text-[#444] line-clamp-3 text-[14px] font-semibold h-[65px] mt-[20px]">
                                    <?php echo $products['product_name'] ?>
                                </h3>
                            </div>
                            <div class="item-price text-nowrap mb-[5px]">
                                <p class="inline-block new-price text-[16px] text-[#d70018] font-bold">
                                    <?php echo $products['product_new_price'] ?>đ
                                </p>
                                <p class="inline-block old-price text-[14px] text-[#707070] line-through font-semibold">
                                    <?php echo $products['product_old_price'] ?>đ
                                </p>
                            </div>
                            <div class="item-member text-[#444] mb-[5px] text-[11px] flex items-center gap-[3px]">
                                <span class="text-nowrap">Smember giảm thêm đến</span>
                                <span
                                    class="text-[14px] text-[#d70018] font-bold"><?php echo $products['product_smember'] ?>đ</span>
                            </div>
                            <div
                                class="item-promotion mb-[50px] border-[1px] border-solid border-[#e5e7eb] bg-[#f3f4f6] rounded-[5px] text-[12px] p-[5px]">
                                <p class="line-clamp-2">
                                    Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn
                                    3-6 tháng
                                </p>
                            </div>
                        </a>
                        <div class="item-bottom flex justify-between mb-[10px]">
                            <div class="item-rating">
                                <i class="fa-solid fa-star text-[#f59e0b] text-[15px]"></i>
                                <i class="fa-solid fa-star text-[#f59e0b] text-[15px]"></i>
                                <i class="fa-solid fa-star text-[#f59e0b] text-[15px]"></i>
                                <i class="fa-solid fa-star text-[#f59e0b] text-[15px]"></i>
                                <i class="fa-solid fa-star text-[#f59e0b] text-[15px]"></i>
                            </div>
                            <div class="item-like">
                                <span class="inline-block text-[#777] text-[12px]">Yêu thích
                                </span>
                                <a href="#">
                                    <i class="fa-regular text-[#777] fa-heart text-[15px] cursor-pointer"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <?php } ?>
            <section class="mt-[20px]">
                <div class="brand-banner mt-[20px] mb-[20px]">
                    <a href="#" class="banner-title uppercase text-[#444] text-[22px] font-semibold">Ưu đãi sinh
                        viên</a>
                </div>
                <div class="banner-container flex justify-between w-full gap-[10px]">
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-sale-1.webp" alt="" />
                    </a>
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-sale-1.webp" alt="" />
                    </a>
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-sale-1.webp" alt="" />
                    </a>
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-sale-1.webp" alt="" />
                    </a>
                </div>
            </section>
            <section class="mt-[20px]">
                <div class="brand-banner mt-[20px] mb-[20px]">
                    <a href="#" class="banner-title uppercase text-[#444] text-[22px] font-semibold">Ưu đãi thanh
                        toán</a>
                </div>
                <div class="banner-container flex justify-between w-full gap-[10px]">
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-pay-sale-1.webp" alt="" />
                    </a>
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-pay-sale-1.webp" alt="" />
                    </a>
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-pay-sale-1.webp" alt="" />
                    </a>
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-pay-sale-1.webp" alt="" />
                    </a>
                </div>
            </section>
            <section class="mt-[20px]">
                <div class="brand-banner mt-[20px] mb-[20px]">
                    <a href="#" class="banner-title uppercase text-[#444] text-[22px] font-semibold">Chuyên trang thương
                        hiệu</a>
                </div>
                <div class="banner-container flex justify-between w-full gap-[10px]">
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-brand-1.webp" alt="" />
                    </a>
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-brand-1.webp" alt="" />
                    </a>
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-brand-1.webp" alt="" />
                    </a>
                    <a href="#" class="w-[25%]">
                        <img class="rounded-[10px]" src="./img/banner-brand-1.webp" alt="" />
                    </a>
                </div>
            </section>
            <section class="mt-[20px] mb-[50px]">
                <div class="news-title mt-[20px] mb-[20px]">
                    <a href="#" class="uppercase text-[#444] text-[22px] font-semibold">TIN CÔNG NGHỆ</a>
                </div>
                <div class="news-container flex justify-between w-full gap-[20px]">
                    <a href="#"
                        class="border pb-[10px] border-solid border-[#dedede] rounded-[15px] text-[#000] w-[25%] duration-500 ease-in-out hover:scale-105">
                        <img src="./img/news-1.jpeg" class="h-[160px] w-full p-[5px] object-cover rounded-t-[15px]"
                            alt="" />
                        <p class="line-clamp-2 px-[5px] text-[#444] text-[16px] h-[48px] font-semibold">
                            6 tính năng của Android mà iOS 18 vẫn chưa có
                        </p>
                    </a>
                    <a href="#"
                        class="border pb-[10px] border-solid border-[#dedede] rounded-[15px] text-[#000] w-[25%] duration-500 ease-in-out hover:scale-105">
                        <img src="./img/news-1.jpeg" class="h-[160px] w-full p-[5px] rounded-t-[15px] object-cover"
                            alt="" />
                        <p class=" line-clamp-2 px-[5px] text-[#444] text-[16px] h-[48px] font-semibold">
                            Đây là smartphone 5G nhỏ nhất thế giới: Chip Dimensity 7300,
                            12GB RAM và pin 4000mAh
                        </p>
                    </a>
                    <a href="#"
                        class="border pb-[10px] border-solid border-[#dedede] rounded-[15px] text-[#000] w-[25%] duration-500 ease-in-out hover:scale-105">
                        <img src="./img/news-1.jpeg" class="h-[160px] w-full p-[5px] rounded-t-[15px] object-cover"
                            alt="" />
                        <p class="line-clamp-2 px-[5px] text-[#444] text-[16px] h-[48px] font-semibold">
                            Huawei ra mắt FreeBuds 6i với công nghệ chống ồn chủ động thông
                            minh được nâng cấp, giá 1.79 triệu đồng
                        </p>
                    </a>
                    <a href="#"
                        class="border pb-[10px] border-solid border-[#dedede] rounded-[15px] text-[#000] w-[25%] duration-500 ease-in-out hover:scale-105">
                        <img src="./img/news-1.jpeg" class="h-[160px] w-full p-[5px] rounded-t-[15px] object-cover"
                            alt="" />
                        <p class="line-clamp-2 px-[5px] text-[#444] text-[16px] h-[48px] font-semibold">
                            S-News Cuối Tuần #37: Red Magic 9S Pro Series ra mắt, AnTuTu
                            chia sẻ 10 smartphone có hiệu năng mạnh nhất
                        </p>
                    </a>
                </div>
            </section>
        </main>
        <?php include './includes/footer.php' ?>
        <?php include './includes/loginForm.php' ?>
        <?php include './includes/signInForm.php' ?>
    </div>
    <!-- UpdateUserSuccess -->
    <?php if (isset($_SESSION['updateUserSuccess'])) { ?>
    <script>
    alert("Thay đổi thông tin tài khoản thành công")
    </script>
    <?php unset($_SESSION['updateUserSuccess']);
    } ?>
</body>
<script src="./assets/js/home.js"></script>

</html>