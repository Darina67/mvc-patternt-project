<?php
require __DIR__ . './partials/_header.php';
?>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 md:grid md:grid-cols-5 gap-4">
            <div class="col-span-1">
                <div class="overflow-y-auto py-4 px-3 bg-gray-100 rounded dark:bg-gray-800">
                    <ul class="space-y-2 left-menu">
                        <li>
                            <a class="w-full inline-flex" href="/main">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Главная</span>
                            </a>
                        </li>
                        <li>
                            <a class="w-full inline-flex" href="/posts">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Таблица</span>
                            </a>
                        </li>
                        <li>
                            <a class="w-full inline-flex" href="/gallery">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Галерея</span>
                            </a>
                        </li>
                        <li>
                            <form class="cursor-pointer w-full inline-flex" action="/logout" method="post">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                </svg>
                                <button class="flex-1 ml-3 whitespace-nowrap text-left" type="submit">
                                    Выйти
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-span-4">
                <div class="flex justify-between mb-4">
                    <h3 class="mb-4 text-xl font-bold">View Post</h3>
                </div>
                <div class="lg:flex items-center border-b pb-2">
                    <div class="min-w-max">
                        <h2 class="font-bold text-lg mr-4">Заголовок</h2>
                    </div>
                    <div class="w-3/5">
                        <p><?= $post->title; ?></p>
                    </div>
                </div>
                <div class="lg:flex items-center border-b pb-2">
                    <div class="min-w-max">
                        <h2 class="font-bold text-lg mr-4">Описание:</h2>
                    </div>
                    <div class="w-3/5">
                        <p><?= $post->slug; ?></p>
                    </div>
                </div>
                <div class="lg:flex items-center border-b pb-2">
                    <div class="min-w-max">
                        <h2 class="font-bold text-lg mr-4">Текст:</h2>
                    </div>
                    <div class="w-3/5">
                        <p><?= $post->body; ?></p>
                    </div>
                </div>
                <div class="lg:flex items-center border-b pb-2">
                    <div class="min-w-max">
                        <h2 class="font-bold text-lg mr-4">Статус:</h2>
                    </div>
                    <div class="w-3/5">
                        <p><?= $post->isPublished; ?></p>
                    </div>
                </div>
                <div class="lg:flex items-center border-b pb-2">
                    <div class="min-w-max">
                        <h2 class="font-bold text-lg mr-4">Создан:</h2>
                    </div>
                    <div class="w-3/5">
                        <p>2022-08-31 20:46:05</p>
                    </div>
                </div>
                <div class="lg:flex border-b pb-2">
                    <div class="min-w-max">
                        <h2 class="font-bold text-lg mr-4">Картинка:</h2>
                    </div>
                    <div class="w-3/5">
                        <p>
                            <img src="<?= "../" .  $post->thumbnail ?>" class="mt-3" alt="" width="300" id="imgTag" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
require __DIR__ . './partials/_footer.php';
?>