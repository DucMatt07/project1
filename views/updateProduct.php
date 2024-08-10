<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./build/tailwind.css" />
    <title>Document</title>
</head>

<body>
    <form action="?action=startUpdate&id=<?= $product['product_id'] ?>" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto mt-[100px]">
        <div class="mb-5">
            <label for="nameProduct" class="block mb-2 text-sm font-medium text-gray-900">Name
                product</label>
            <input type="text" id="nameProduct" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="<?= $product['product_name'] ?>" />
        </div>
        <div class="mb-5">
            <label for="img" class="block mb-2 text-sm font-medium text-gray-900">Your
                Img</label>
            <div class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <img src="./img/<?= $product['product_img'] ?>" alt="">
                <input type="file" id="img" name="img" class="" value="" />
            </div>
        </div>
        <div class="mb-5">
            <label for="oldPrice" class="block mb-2 text-sm font-medium text-gray-900">
                Old price</label>
            <input type="text" id="oldPrice" name="oldPrice" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="<?= $product['product_old_price'] ?>" />
        </div>
        <div class="mb-5">
            <label for="newPrice" class="block mb-2 text-sm font-medium text-gray-900">
                New price</label>
            <input type="text" id="newPrice" name="newPrice" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="<?= $product['product_new_price'] ?>" />
        </div>
        <div class="mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <textarea id="message" name="title" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab cum, fuga voluptatem eum vero non doloremque maiores, voluptas rerum maxime molestiae error dicta, dignissimos saepe. Dolor facilis minus perferendis cumque.
        Nisi ipsa blanditiis fugiat laudantium molestiae! A quibusdam inventore quae, praesentium laudantium similique perferendis iure sint dolores cumque odit doloribus reprehenderit non eum ipsam unde ex, corrupti autem nam accusantium!
        Officia, dolorem fugiat animi, itaque necessitatibus maxime deserunt, est velit enim tempore asperiores. Officia non laudantium tempore natus error asperiores magni veniam suscipit modi, accusamus omnis sapiente velit corrupti quas.</textarea>
        </div>
        <div class="mb-5">
            <label for="types" class="block mb-2 text-sm font-medium text-gray-900">Select your
                type</label>
            <select id="types" name="option" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <?php foreach ($productTypes as $productType) { ?>
                    <option value="<?= $productType['id'] ?>" <?= isset($selectedType) & $selectedType == $productType['id'] ? 'selected' : '' ?>>
                        <?= $productType['type_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" name="btn-update" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
            Update</button>
    </form>
</body>

</html>