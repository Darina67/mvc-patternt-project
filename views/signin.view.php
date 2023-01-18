<?php
require __DIR__ . './partials/_header.php';
startSession();
?>
<main>
    <section class="mx-auto max-w-xl">
        <h3 class="mb-4 text-xl font-bold text-center mt-10">Авторизация</h3>
        <div class="w-full">
            <div id="message"></div>
            <form id="loginForm" action="/" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Email" />
                    <p id="email_err" class="text-red-500 text-sm italic error mt-2"></p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="*********" />
                    <p id="password_err" class="text-red-500 text-sm italic error mt-2"></p>
                </div>

                <div class="flex items-center justify-between mt-8">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="submitbtn" type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php
require __DIR__ . './partials/_footer.php';
?>