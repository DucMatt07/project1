<section id="boxSignIn" class=" animate-fadeInLogin dark:bg-gray-900 absolute w-screen h-[103%] top-[-3%] hidden z-20">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full animate-fadeInForm bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class=" mt-[50px]  p-6 space-y-4 md:space-y-6 sm:p-8 relative">
                <i id="closeSignIn" class="fa-solid fa-xmark absolute top-[5px] right-[5px] cursor-pointer"></i>
                <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Đăng kí tài khoản
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="?action=signIn">
                    <div>
                        <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tên tài khoản đăng nhập</label>
                        <input type="user" name="user" id="user" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tài khoản" required="">
                        <p class="text-[red]"><?php
                                                if (isset($_SESSION['errorUserSignIn'])) {
                                                    echo $_SESSION['errorUserSignIn'];
                                                }
                                                ?></p>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Mật
                            khẩu</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <label for="repassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Xác
                            nhận lại mật
                            khẩu</label>
                        <input type="password" name="repassword" id="repassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        <p class="text-[red]"><?php
                                                if (isset($_SESSION['errorPasswordRepeat'])) {
                                                    echo $_SESSION['errorPasswordRepeat'];
                                                }
                                                ?></p>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email
                        </label>
                        <input type="email" name="email" id="email" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        <p class="text-[red]"><?php
                                                if (isset($_SESSION['errorEmailSignIn'])) {
                                                    echo $_SESSION['errorEmailSignIn'];
                                                }
                                                ?></p>
                    </div>
                    <div class="flex items-center justify-between">

                    </div>
                    <button type="submit" name="btn-signIn" class="w-full text-white bg-[red] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Đăng
                        kí
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- SignInSuccess -->
<?php if (isset($_SESSION['signInSuccess'])) { ?>
    <script>
        alert("Đăng kí tài khoản thành công")
    </script>
<?php session_destroy();
} ?>