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
                    <a class=" relative top-[20px] left-[10px] rounded-[5px] bg-[green] py-[10px] px-[30px] text-center text-[#fff]"
                        href="?action=admin&id=1">Quay
                        lại</a>
                </div>
            </div>
        </nav>

    </header>
    <main class="w-full">
        <table class="w-[80%] my-[0] mx-auto text-center mt-[30px]">
            <tr class="flex gap-[40px] font-bold ">
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[30%] text-nowrap">Tên người bình luận
                </td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[30%] text-nowrap">Bình luận</td>
                <td class="border-b-[3px] border-solid border-[#222] p-[10px] w-[20%] text-nowrap">Xoá bình luận</td>
            </tr>
            <?php foreach ($commentProduct as $comment) { ?>
            <tr class="flex gap-[40px] relative">
                <td class="  p-[10px] w-[30%]"><?= $comment['user_name'] ?></td>
                <td class="  p-[10px] w-[30%]"><?= $comment['content'] ?></td>
                <td class="flex justify-center items-center p-[10px] w-[20%]"><a
                        href="?action=deleteComment&id=<?= $comment['id'] ?>&productId=<?= $comment['product_id'] ?>"
                        class="delete-comment rounded-[5px] bg-[red] py-[10px] px-[30px] text-center text-[#fff]">Xoá</a>
                </td>
            </tr>
            <tr class="w-full border-b-[3px] border-solid border-[#222]"></tr>
            <?php } ?>
        </table>
    </main>
</body>


</html>