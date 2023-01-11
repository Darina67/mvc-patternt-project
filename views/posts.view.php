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
              <a class="w-full inline-flex" href="/posts">
                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span class="ml-3">Dashboard</span>
              </a>
            </li>
            <li>
              <a class="active w-full inline-flex" href="/posts">
                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                  <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3">Posts</span>
              </a>
            </li>
            <li>
              <a class="w-full inline-flex" href="/categories">
                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span class="ml-3">Categories</span>
              </a>
            </li>
            <li>
              <a class="w-full inline-flex" href="/users">
                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                  <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3">Users</span>
              </a>
            </li>
            <li>
              <form class="cursor-pointer w-full inline-flex" action="/logout" method="post">
                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <button class="flex-1 ml-3 whitespace-nowrap text-left" type="submit">
                  Log out
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-span-4">
        <div class="flex justify-between mb-4">
          <h3 class="mb-4 text-xl font-bold">Posts</h3>
          <a href="/posts/create" class="px-4 py-2 bg-yellow-600 rounded-sm text-white">Add Post</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table id="dashboard" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">Картинка</th>
                <th scope="col" class="px-6 py-3 w-60">Заголовок</th>
                <th scope="col" class="px-6 py-3">Дата создания</th>
                <th scope="col" class="px-6 py-3">Описание</th>
                <th scope="col" class="px-6 py-3">Действие</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $post) : ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="px-6 py-4">
                    <img src="<?= $post->thumbnail ?>" alt="" class="w-16" />
                  </td>
                  <td class="px-6 py-4"><?php echo $post->title; ?></td>
                  <td class="px-6 py-4">
                    <?php echo $post->created_at; ?>
                  </td>
                  <td class="px-6 py-4"> <?php echo $post->slug; ?></td>
                  <td class="px-6 py-4 flex">
                    <form action="/posts/edit" method="GET">
                      <input type="hidden" name="id" value="<?= $post->id; ?>" />
                      <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-green-400 cursor-pointer">
                          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                          <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                        </svg>
                      </button>
                    </form>
                    <form action="/posts/delete" method="POST" class="mx-4 cursor-pointer">
                      <input type="hidden" name="id" value="<?= $post->id; ?>" />
                      <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-5 w-5 text-red-400">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                      </button>
                    </form>
                    <form action="/posts/view" method="GET">
                      <input type="hidden" name="id" value="<?= $post->id; ?>" />
                      <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="h-5 w-5 text-blue-400 cursor-pointer">
                          &gt;
                          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
require __DIR__ . './partials/_footer.php';
?>