<div x-data="{open: false, type: '', message: ''}"
 x-show.transition.out.duration.1000ms="open" 
 x-on:notify.window="
    type = $event.detail.type;
    message = $event.detail.message;
    open=true;
    setTimeout(() => {open=false}, 5000);
" 
style="display: none;" class="absolute z-[100000] w-80 md:w-96 bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
    <div class="m-auto">
        <template x-if="type === 'success'">
            <div class="bg-green-100 rounded-lg border-green-300 border p-3 shadow-lg">
                <div class="flex flex-row">
                    <div class="px-2">
                        <svg width="24" height="24" viewBox="0 0 1792 1792" fill="green" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z" />
                        </svg>
                    </div>
                    <div class="ml-2 mr-6">
                        <span class="font-semibold text-green-900 capitalize" x-text="type"></span>
                        <span x-text="message" class="block text-gray-500">
                            Text will be here...
                        </span>
                    </div>
                    <span x-on:click="open=false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        </template>
        <template x-if="type === 'info'">
            <div class="bg-blue-200 rounded-lg border-blue-300 border p-3 shadow-lg">
                <div class="flex flex-row">
                    <div class="px-2">
                        <svg width="24" height="24" viewBox="0 0 1792 1792" fill="blue" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z" />
                        </svg>
                    </div>
                    <div class="ml-2 mr-6">
                        <span class="font-semibold text-blue-900 capitalize" x-text="type"></span>
                        <span x-text="message" class="block text-gray-500">
                            Text will be here...
                        </span>
                    </div>
                    <span x-on:click="open=false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        </template>
        <template x-if="type === 'warning'">
            <div class="bg-orange-200 rounded-lg border-orange-300 border p-3 shadow-lg">
                <div class="flex flex-row">
                    <div class="px-2">
                        <svg width="24" height="24" viewBox="0 0 1792 1792" fill="orange" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z" />
                        </svg>
                    </div>
                    <div class="ml-2 mr-6">
                        <span class="font-semibold text-orange-700 capitalize" x-text="type"></span>
                        <span x-text="message" class="block text-gray-500">
                            Text will be here...
                        </span>
                    </div>
                    <span x-on:click="open=false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        </template>
        <template x-if="type === 'error'">
            <div class="bg-red-200 rounded-lg border-red-300 border p-3 shadow-lg">
                <div class="flex flex-row">
                    <div class="px-2">
                        <svg width="24" height="24" viewBox="0 0 1792 1792" fill="red" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z" />
                        </svg>
                    </div>
                    <div class="ml-2 mr-6">
                        <span class="font-semibold text-red-900 capitalize" x-text="type"></span>
                        <span x-text="message" class="block text-gray-500">
                            Text will be here...
                        </span>
                    </div>
                    <span x-on:click="open=false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        </template>
    </div>
</div>