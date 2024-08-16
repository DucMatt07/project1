<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./build/tailwind.css" />
    <title>Document</title>
</head>

<body>
    <a class=" relative top-[20px] left-[10px] rounded-[5px] bg-[green] py-[10px] px-[30px] text-center text-[#fff]"
        href="?action=adminSlider">Quay
        lại</a>
    <form action="?action=startUpdateSlider&id=<?= $slider['id'] ?>" method="POST" enctype="multipart/form-data"
        class="max-w-sm mx-auto mt-[100px]">
        <div class="mb-5">
            <div class="mb-5">
                <label for="img" class="block mb-2 text-sm font-medium text-gray-900">
                    Ảnh slider sản phẩm</label>
                <div
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <img src="./img/<?= $slider['img'] ?>" alt="">
                    <input type="file" id="img" name="img" class="" value="" />
                </div>
            </div>
            <div class="mb-5">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản
                    phẩm</label>
                <textarea id="message" name="nameProduct" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"><?= $slider['slider_product_name'] ?>
            </textarea>
            </div>
            <div class="mb-5">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nội
                    dung</label>
                <textarea id="message" name="content" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"><?= $slider['content'] ?>
            </textarea>
            </div>
            <button type="submit" name="btn-update-slider"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                Update</button>
    </form>
</body>

</html>