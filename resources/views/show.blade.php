<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>
    <div class="idea-container mt-4 bg-white rounded-xl flex">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">Zeynep is the cutest girl in the world</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    Zeynep is amazing because Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quo iste, dignissimos necessitatibus quibusdam asperiores harum odit eligendi, nihil doloribus dolorem tempore rerum rem quod dolore voluptas debitis natus ea provident nostrum dolores eum eveniet! Obcaecati corporis deserunt ea, labore sint doloremque architecto maiores sequi consequuntur nam eveniet pariatur voluptatem!
                </div>
                <div class="flex justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <span class="text-gray-900 font-bold">Eren Yalçın</span>
                        <div>&bull;</div>
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
    <div class="flex items-center justify-between ml-3">
        <div class="flex items-center space-x-3 py-8">
            <button class="px-10 py-2 bg-blue text-white font-semibold rounded-xl hover:bg-blue-hover transition duration-150 ease-in text-xs">Reply</button>
            <button type="button" class="bg-gray-200 w-36 rounded-xl flex items-center justify-center space-x-1 px-6 py-2 text-xs font-semibold border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                <span>Set Status</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
        </div>
        <div class="flex items-center space-x-3 text-gray-900">
            <div class="bg-white text-semibold px-3 py-2 rounded-xl text-center">
                <div class="text-xl leading-snug">12</div>
                <div class="text-xs text-gray-400 leading-none">votes</div>
            </div>
            <div>
                <button type="button" class="bg-gray-200 w-32 rounded-xl flex items-center justify-center space-x-1 px-6 py-2 text-sm font-semibold border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase">
                    <span>Vote</span>
                </button>
            </div>
        </div>
    </div>

    <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
        <div class="comment-container relative mt-4 bg-white rounded-xl flex">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <div class="text-gray-600">
                        I wanna be as beautiful as her!!! Voted for sure.
                    </div>
                    <div class="flex justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-3 text-gray-400">
                            <span class="text-gray-900 font-bold">Elif Yavuz</span>
                            <span>9 hours ago</span>
                        </div>
                        <div class="flex items-center space-x-2">
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
        <div class="comment-container is-admin relative mt-4 bg-white rounded-xl flex">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center text-blue font-bold uppercase text-xs">Admin</div>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-lg font-semibold">
                        <a href="#" class="hover:underline">Status changed to "Closed"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Hey! Zeynep is now officially the cutest girl in the world!! Have a great one..
                    </div>
                    <div class="flex justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-3 text-gray-400">
                            <span class="text-gray-900 font-bold text-blue">Cinnamon Baby</span>
                            <span>7 hours ago</span>
                        </div>
                        <div class="flex items-center space-x-2">
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
        <div class="comment-container relative mt-4 bg-white rounded-xl flex">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=6" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <div class="text-gray-600">
                        Congratulations Zeynep!! Love from Amsterdam :))))
                    </div>
                    <div class="flex justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-3 text-gray-400">
                            <span class="text-gray-900 font-bold">Izgi Özbay</span>
                            <span>6 hours ago</span>
                        </div>
                        <div class="flex items-center space-x-2">
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
