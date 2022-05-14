@props([
    'title' => 'Give form a title',
    'method' => 'post',
    'action' => '#'
])


<div class="py-6 px-6 lg:px-8">
    <h3 class="capitalize mb-4 text-xl font-medium text-gray-900 dark:text-white">
    {{$title}}
    </h3>
    <form class="space-y-6" method="@if($method){{$method}}@endif" wire:submit.prevent="@if($action){{$action}}@endif" >
        @csrf
        {{$slot}}   
    </form>
</div>