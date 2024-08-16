<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./build/tailwind.css" />
    <script src="https://kit.fontawesome.com/84084c404d.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header class=" bg-[red] w-screen">
        <h1 class="text-[#fff] text-center uppercase font-bold p-[20px]">trang quản trị</h1>


        <nav class="bg-white border-gray-200 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="?action=index" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="./img/Logo.png" class="h-[50px]" alt=" Logo" />
                </a>
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white ">
                    <li>
                        <a href="?action=adminCategory"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Quản
                            lí danh mục</a>
                    </li>
                    <li>
                        <a href="?action=admin&id=1"
                            class="block py-2 px-3  bg-blue-700 rounded md:bg-transparent text-gray-900 md:hover:text-blue-700  md:p-0 "
                            aria-current="page"> Sản phẩm</a>
                    </li>
                    <li>
                        <a href="?action=adminUser"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">
                            Người dùng</a>
                    </li>
                    <li>
                        <a href="?action=adminSlider"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:text-blue-700 md:p-0">Quản
                            lí slider</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <main class="w-full">
        <table class="w-[80%] my-[0] mx-auto text-center mt-[30px]">
            <tr class="flex gap-[40px] font-bold ">
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">Slider
                </td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[20%] text-nowrap">Ảnh slider</td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[20%] text-nowrap">Tên sản phẩm slider
                </td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[20%] text-nowrap">Tiêu đề sản phẩm
                </td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">Thay đổi
                </td>
            </tr>
            <?php foreach ($sliders as $slider) { ?>
            <tr class="flex gap-[40px] relative">
                <td class=" p-[10px] w-[10%]"><?= $slider['id'] ?></td>
                <td class=" p-[10px] w-[20%]"><img src="./img/<?= $slider['img'] ?>" alt="">
                <td class=" p-[10px] w-[20%]"><?= $slider['slider_product_name'] ?></td>
                <td class=" p-[10px] w-[20%]"><?= $slider['content'] ?></td>
                <td class=" p-[10px] w-[10%] flex justify-center items-center text-nowrap"><a
                        class="rounded-[5px] bg-[green] py-[10px] px-[30px] text-center text-[#fff]"
                        href="?action=goToUpdateSlider&id=<?= $slider['id'] ?>">Thay đổi</a></td>
            </tr>
            <tr class="w-full border-b-[3px] border-solid border-[#222]"></tr>
            <?php } ?>
        </table>
    </main>
</body>

</html>