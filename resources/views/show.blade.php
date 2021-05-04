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
                    <div class="flex items-center space-x-2" x-data="{ isOpen: false }">
                        <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button @click="isOpen = !isOpen" class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in relative">
                            <svg class="w-8 h-8 fill-current text-gray-300"id="Lager_1" style="enable-background:new -265 388.9 64 64;" version="1.1" viewBox="-265 388.9 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle cx="-218.7" cy="422.2" r="4.7"/><circle cx="-232" cy="422.2" r="4.7"/><circle cx="-245.3" cy="422.2" r="4.7"/></g></svg>
                            <ul 
                            x-cloak 
                            x-show.transition.origin.top.left="isOpen" 
                            @click.away="isOpen = false" 
                            class="absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left">
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
        <div class="flex items-center space-x-3 py-8" x-data="{ setStatusOpen: false, replyOpen: false }">
            <div class="relative">
                <button @click="replyOpen = !replyOpen; setStatusOpen = false" class="px-10 py-2 bg-blue text-white font-semibold rounded-xl hover:bg-blue-hover transition duration-150 ease-in text-xs">
                    <span>Reply</span>
                </button>
                <div 
                x-cloak 
                x-show.transition.origin.top.left="replyOpen" 
                @click.away="replyOpen = false"
                class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-lg rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl placeholder-gray-600 text-sm px-4 py-2 border-none" placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button type="submit" class="bg-blue w-5/12 text-white rounded-xl px-6 py-2 text-xs font-semibold hover:bg-blue-hover transition duration-150 ease-in">
                                <span>Post Comment</span>
                            </button>
                            <button type="button" class="bg-gray-200 w-3/12 rounded-xl flex items-center justify-center space-x-1 py-2 text-xs font-semibold border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                                <svg class="w-4 h-4 text-gray-500 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                                <span>Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="relative">
                <button @click="setStatusOpen = !setStatusOpen; replyOpen = false" type="button" class="bg-gray-200 w-36 rounded-xl flex items-center justify-center space-x-1 px-6 py-2 text-xs font-semibold border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                    <span>Set Status</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div 
                x-cloak 
                x-show.transition.origin.top.left="setStatusOpen" 
                @click.away="setStatusOpen = false" 
                class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-lg rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="mt-2 space-y-2">
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" id="Open" value="1" class="bg-gray-200 text-gray-600 border-none" checked>
                                    <label class="ml-2" for="Open">Open</label>
                                </label>
                            </div>
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" id="Considering" value="2" class="bg-gray-200 text-purple border-none">
                                    <label class="ml-2" for="Considering">Considering</label>
                                </label>
                            </div>
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" id="In Progress" value="3" class="bg-gray-200 text-yellow border-none">
                                    <label class="ml-2" for="In Progress">In Progress</label>
                                </label>
                            </div>
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" id="Implemented" value="4" class="bg-gray-200 text-green border-none">
                                    <label class="ml-2" for="Implemented">Implemented</label>
                                </label>
                            </div>
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="radio-direct" id="Closed" value="5" class="bg-gray-200 text-red border-none">
                                    <label class="ml-2" for="Closed">Closed</label>
                                </label>
                            </div>
                        </div>
                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="3" class="w-full bg-gray-100 rounded-xl placeholder-gray-600 text-sm px-4 py-2 border-none" placeholder="Add an update comment (optional)."></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" class="bg-gray-200 w-1/2 rounded-xl flex items-center justify-center space-x-1 px-6 py-2 text-xs font-semibold border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                                <svg class="w-4 h-4 text-gray-500 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                                <span>Attach</span>
                            </button>
                            <button type="submit" class="bg-blue w-1/2 text-white rounded-xl px-6 py-2 text-xs font-semibold hover:bg-blue-hover transition duration-150 ease-in">
                                <span>Update</span>
                            </button>
                        </div>
                        <div class="inline-flex items-center">
                            <input type="checkbox" checked name="notify" id="notify" class="rounded-sm text-blue px-1 py-1 font-normal border-gray-200">
                            <label class="ml-2 text-xs text-gray-600" for="notify">Notify all voters</label>
                        </div>
                    </form>
                </div>
            </div>
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
