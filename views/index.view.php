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
              <a class="active w-full inline-flex" href="/main">
                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span class="ml-3">Главная</span>
              </a>
            </li>

            <li>
              <a class="w-full inline-flex" href="main/posts">
                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                  <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3">Таблица с данными</span>
              </a>
            </li>

            <li>
              <a class="w-full inline-flex" href="main/gallery">
                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span class="ml-3">Галерея</span>
              </a>
            </li>

            <li>
              <form class="cursor-pointer w-full inline-flex" action="main/logout" method="post">
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
        <h1 class="text-right mb-8 font-bold text-blue-400">
          Welcome Migyleleme!
        </h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">
              <p class="pb-4">Total Users: 5</p>
              <hr />
              <p class="pt-4">Total Posts: 2</p>
            </div>
          </div>
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