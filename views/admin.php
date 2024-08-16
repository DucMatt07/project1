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
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white ">
                        <li>
                            <a href="?action=adminCategory"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Quản
                                lí danh mục</a>
                        </li>
                        <li>
                            <a href="?action=admin&id=1"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                                aria-current="page"> Sản phẩm</a>
                        </li>
                        <li>
                            <a href="?action=adminUser"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">
                                Người dùng</a>
                        </li>
                        <li>
                            <a href="?action=adminSlider"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Quản
                                lí slider</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main class="w-full">
        <div class="select w-[80%]  mt-[50px] my-0 mx-auto relative">
            <label for="optionAdminRender" class="  block mb-2 text-sm font-medium text-gray-900 ">Select your
                country</label>
            <select id="optionAdminRender"
                class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5">
                <?php foreach ($data as $category) { ?>
                <option value="<?= $category['id'] ?>"
                    <?= isset($selectedCategory) && $selectedCategory == $category['id'] ? 'selected' : '' ?>>
                    <?= $category['category_name'] ?></option>
                <?php } ?>
            </select>
            <a href="?action=goToCreate"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center absolute bottom-0 right-0">Thêm
                sản phẩm</a>
        </div>
        <table class="w-[80%] my-[0] mx-auto text-center mt-[30px]">
            <tr class="flex gap-[40px] font-bold ">
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">Name</td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">Img</td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">Old price</td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">New price</td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">Lượt xem</td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">Xoá sản phẩm</td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">Sửa sản phẩm</td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[10%] text-nowrap">Bình luận
                </td>
            </tr>
            <?php foreach ($products as $product) { ?>
            <tr class="flex gap-[40px] relative">
                <td class=" p-[10px] w-[10%] line-clamp-6"><?= $product['product_name'] ?></td>
                <td class=" p-[10px] w-[10%]"><img src="./img/<?= $product['product_img'] ?>" alt="">
                </td>
                <td class="  p-[10px] w-[10%]"><?= $product['product_old_price'] ?></td>
                <td class="  p-[10px] w-[10%]"><?= $product['product_new_price'] ?></td>
                <td class="  p-[10px] w-[10%] line-clamp-6"><?= $product['view'] ?></td>
                <td class="flex justify-center items-center p-[10px] w-[10%]"><a
                        href="?action=delete&id=<?= $product['product_id'] ?>"
                        class="delete-product rounded-[5px] bg-[red] py-[10px] px-[30px] text-center text-[#fff]">Xoá</a>
                </td>
                <td class="flex justify-center items-center p-[10px] w-[10%]"><a
                        href="?action=goToUpdate&id=<?= $product['product_id'] ?>&categoryID=<?= $product['category_id'] ?>"
                        class=" btn-update-product rounded-[5px] bg-[green] py-[10px] px-[30px] text-center text-[#fff]">Sửa</a>
                </td>
                <td class="flex justify-center items-center p-[10px] w-[10%]"><a
                        href="?action=goToComment&id=<?= $product['product_id'] ?>"
                        class=" btn-comment-product text-nowrap rounded-[5px] bg-[green] py-[10px] px-[30px] text-center text-[#fff]">
                        Bình luận</a>
                </td>
            </tr>
            <tr class="w-full border-b-[3px] border-solid border-[#222]"></tr>
            <?php } ?>
        </table>
    </main>
</body>
<script src=" ./assets/js/admin.js">
</script>

</html>