@props([
'listener' => ''
])
<div x-data="{open: false}" x-init="
    window.livewire.on('@if($listener){{$listener}}@endif', (e) => {
        open = true;
    })
" x-show.transition.out.duration.500ms="open" style="display: none;" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">


    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">

            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div class="m-auto relative p-4 w-full max-w-md h-full md:h-auto">

                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                        {{$slot}}

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>