<section id="boxForgotPass"
    class=" animate-fadeInLogin dark:bg-gray-900 absolute w-screen h-[103%] top-[-3%] hidden z-20">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full animate-fadeInForm bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 relative">
            <div class=" mt-[50px]  p-6 space-y-4 md:space-y-6 sm:p-8 ">
                <i id="closeForgotPass" class="fa-solid fa-xmark absolute top-[5px] right-[5px] cursor-pointer"></i>
                <h1
                    class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Quên mật khẩu
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="?action=sendEmail">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email của bạn</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Email" required="">
                        <p class="text-[red]"><?php
                                                if (isset($_SESSION['errorEmailForgot'])) {
                                                    echo $_SESSION['errorEmailForgot'];
                                                }
                                                ?></p>
                    </div>
                    <div class="flex items-center justify-between">

                    </div>
                    <button type="submit" name="btn-forgotPass"
                        class="w-full text-white bg-[red] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Gửi email
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- SignInSuccess -->
<?php if (isset($_SESSION['sendEmailSuccess'])) { ?>
<script>
alert("Gửi lại mật khẩu thành công vui lòng kiểm tra email của bạn")
</script>
<?php session_destroy();
} ?>