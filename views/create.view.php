<?php
require __DIR__ . './partials/_header.php';
startSession();
?>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 md:grid md:grid-cols-5 gap-4">
            <div class="col-span-1">
                <div class="overflow-y-auto py-4 px-3 bg-gray-100 rounded dark:bg-gray-800">
                    <ul class="space-y-2 left-menu">
                        <li>
                            <a class="w-full inline-flex" href="/">
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
                                <span class="ml-3">Таблица с данными</span>
                            </a>
                        </li>
                        <li>
                            <a class="w-full inline-flex" href="/gallery">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Ufkthtz</span>
                            </a>
                        </li>
                        <li>
                            <form class="cursor-pointer w-full inline-flex" action="logout" method="post">
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
                    <h3 class="mb-4 text-xl font-bold">Add Post</h3>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <section class="mx-auto max-w-xl">
                        <div class="w-full">
                            <div id="message"></div>
                            <!-- <form id="myform" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data"> -->
                            <form action="/posts/store" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                        Title
                                    </label>
                                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Username" />
                                    <p id="title_err" class="text-red-500 text-sm italic error mt-2"></p>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">
                                        Slug
                                    </label>
                                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="slug" name="slug" type="text" placeholder="Slug" />
                                    <p id="slug_err" class="text-red-500 text-sm italic error mt-2"></p>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                                        Body
                                    </label>
                                    <textarea required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="body" cols="5" rows="4" name="body" placeholder="Body"></textarea>
                                    <p id="body_err" class="text-red-500 text-sm italic error mt-2"></p>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="thumbnail">
                                        Thumbnail
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="thumbnail" name="thumbnail" type="file" />
                                    <!-- <input type="file" name="image" class="form-control-file" id="imageInput"/> -->
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" class="mt-3" alt="" height="80" width="120" id="imgTag" />
                                    <p id="thumbnail_err" class="text-red-500 text-sm italic error mt-2"></p>
                                </div>

                                <!-- <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                                                Category
                                            </label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category" name="category" type="text" placeholder="Category">
                                            <p class="text-red-500 text-xs italic error mt-2"></p>
                                        </div> -->

                                <div class="flex items-center justify-between mt-8">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="submitbtn" type="submit">
                                        Save Data
                                    </button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>
<?php
require __DIR__ . './partials/_footer.php';
?>