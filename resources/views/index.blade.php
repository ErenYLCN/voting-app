<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class=" border-none w-full rounded-xl px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class=" border-none w-full rounded-xl px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <svg class="w-4 h-4 text-gray-700 absolute top-0 left-0 flex items-center h-full ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 border-none pl-8 placeholder-gray-900">
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-350 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold text-xs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Zeynep is the cutest girl in the world</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Zeynep is amazing because Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea fugiat ratione culpa impedit voluptas aliquam necessitatibus recusandae odio accusamus cum at deserunt earum, doloribus laboriosam voluptate atque libero! Dolorum, odio! Qui eligendi consequuntur assumenda quos alias distinctio ratione ipsa eum suscipit reprehenderit, obcaecati rem debitis facilis expedita sint nam temporibus aliquid cumque officia dolores dolorum quas omnis porro aspernatur. Ex debitis voluptas id iusto corporis vero, ea amet quos facere obcaecati mollitia cupiditate voluptatibus exercitationem voluptatum perspiciatis? Tempora obcaecati odit, quis quos excepturi dolores, fuga minima dignissimos aut vitae aspernatur harum architecto delectus voluptates officia nostrum, consectetur animi. Beatae, quod.
                    </div>
                    <div class="flex justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <span>10 hours ago</span>
                            <div>&bull;</div>
                            <span>Category 1</span>
                            <div>&bull;</div>
                            <span class="text-gray-700">3 Comments</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in relative">
                                <svg class="w-8 h-8 fill-current text-gray-300"id="Lager_1" style="enable-background:new -265 388.9 64 64;" version="1.1" viewBox="-265 388.9 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle cx="-218.7" cy="422.2" r="4.7"/><circle cx="-232" cy="422.2" r="4.7"/><circle cx="-245.3" cy="422.2" r="4.7"/></g></svg>
                                <ul class="absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-350 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-blue text-white font-bold text-xs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">Voted</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Eren is the most handsome guy, ever??</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Have you seen this guys face? I just want to say Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vero deleniti quo accusamus, soluta harum laboriosam esse ullam? Perspiciatis tempore impedit nesciunt laboriosam deleniti! Laborum ipsam accusantium consequuntur est, laudantium dignissimos nisi soluta accusamus minus expedita cupiditate quos magni a labore nostrum! Facilis assumenda, aspernatur cum, officia explicabo quia a inventore corrupti eveniet, pariatur excepturi aut doloremque corporis. Fuga inventore pariatur molestiae temporibus quaerat! Ullam beatae numquam, quidem vero laborum id repellendus voluptas, sapiente a quos debitis nesciunt alias! Quaerat pariatur, minima totam quo aut laborum aliquam doloribus magni. Facere et blanditiis maiores nisi vero, dolorum officia dolore reiciendis eius!
                    </div>
                    <div class="flex justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <span>18 hours ago</span>
                            <div>&bull;</div>
                            <span>Category 2</span>
                            <div>&bull;</div>
                            <span class="text-gray-700">14 Comments</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-xs text-white font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                In Progress
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in relative">
                                <svg class="w-8 h-8 fill-current text-gray-300"id="Lager_1" style="enable-background:new -265 388.9 64 64;" version="1.1" viewBox="-265 388.9 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle cx="-218.7" cy="422.2" r="4.7"/><circle cx="-232" cy="422.2" r="4.7"/><circle cx="-245.3" cy="422.2" r="4.7"/></g></svg>
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-350 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">221</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold text-xs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Normalise poop</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, error voluptatem excepturi sint, itaque illum eaque incidunt nobis at animi sit asperiores, molestiae sequi culpa. Dolore blanditiis, doloribus esse dolores asperiores ipsum labore corporis ullam debitis excepturi, quibusdam ducimus temporibus totam, saepe officia quaerat illo est. A, rerum? Quis temporibus corporis blanditiis, sit obcaecati harum reiciendis itaque officiis voluptas amet nam laborum repudiandae molestias iusto voluptatum sed assumenda magni fugit soluta unde quam alias tenetur fugiat dolores? Ipsam numquam eum eaque optio nobis quaerat voluptatum quidem inventore architecto! Hic ipsam molestias inventore delectus alias similique deserunt a nulla est libero?
                    </div>
                    <div class="flex justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <span>1 day ago</span>
                            <div>&bull;</div>
                            <span>Category 4</span>
                            <div>&bull;</div>
                            <span class="text-gray-700">71 Comments</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-red text-xs text-white font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Closed
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in relative">
                                <svg class="w-8 h-8 fill-current text-gray-300"id="Lager_1" style="enable-background:new -265 388.9 64 64;" version="1.1" viewBox="-265 388.9 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle cx="-218.7" cy="422.2" r="4.7"/><circle cx="-232" cy="422.2" r="4.7"/><circle cx="-245.3" cy="422.2" r="4.7"/></g></svg>
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
