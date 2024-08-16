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
        href="?action=adminCategory">Quay
        lại</a>
    <form action="?action=startCreateCategory" method="POST" enctype="multipart/form-data"
        class="max-w-sm mx-auto mt-[100px]">
        <div class="mb-5">
            <label for="nameCategory" class="block mb-2 text-sm font-medium text-gray-900">
                Tên danh mục </label>
            <input type="text" id="nameCategory" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                value="" required="" />
        </div>
        <div class="mb-5">
            <label for="icon" class="block mb-2 text-sm font-medium text-gray-900"> Tên icon danh mục
            </label>
            <input type="text" id="icon" name="icon"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                value="" required="" />
        </div>
        <button type="submit" name="btn-createCategory"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
            Tạo</button>
    </form>
</body>

</html>