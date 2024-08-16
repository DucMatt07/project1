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
        href="?action=admin&id=1">Quay
        lại</a>
    <form action="?action=startUpdate&id=<?= $product['product_id'] ?>" method="POST" enctype="multipart/form-data"
        class="max-w-sm mx-auto mt-[100px]">
        <div class="mb-5">
            <label for="nameProduct" class="block mb-2 text-sm font-medium text-gray-900">Tên sản phẩm
            </label>
            <input type="text" id="nameProduct" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                value="<?= $product['product_name'] ?>" />
        </div>
        <div class="mb-5">
            <label for="img" class="block mb-2 text-sm font-medium text-gray-900">Ảnh sản phẩm hiện tại
            </label>
            <div
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <img src="./img/<?= $product['product_img'] ?>" alt="">
                <input type="file" id="img" name="img" class="" value="" />
            </div>
        </div>
        <div class="mb-5">
            <label for="oldPrice" class="block mb-2 text-sm font-medium text-gray-900">
                Giá ban đầu</label>
            <input type="text" id="oldPrice" name="oldPrice"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                value="<?= $product['product_old_price'] ?>" />
        </div>
        <div class="mb-5">
            <label for="newPrice" class="block mb-2 text-sm font-medium text-gray-900">
                Giá sau khi giảm</label>
            <input type="text" id="newPrice" name="newPrice"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                value="<?= $product['product_new_price'] ?>" />
        </div>
        <div class="mb-5">
            <label for="content1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nội dung
                1</label>
            <textarea id="content1" name="content1" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"><?= $product['content1'] ?></textarea>
        </div>
        <div class="mb-5">
            <label for="content2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nội dung
                2</label>
            <textarea id="content2" name="content2" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"><?= $product['content2'] ?></textarea>
        </div>
        <div class="mb-5">
            <label for="content3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nội dung
                3</label>
            <textarea id="content3" name="content3" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"><?= $product['content3'] ?></textarea>
        </div>
        <div class="mb-5">
            <label for="types" class="block mb-2 text-sm font-medium text-gray-900">Kiểu sản phẩm
            </label>
            <select id="types" name="option"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <?php foreach ($productTypes as $productType) { ?>
                <option value="<?= $productType['id'] ?>"
                    <?= isset($selectedType) & $selectedType == $productType['id'] ? 'selected' : '' ?>>
                    <?= $productType['type_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" name="btn-update"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
            Cập nhật</button>
    </form>
</body>

</html>