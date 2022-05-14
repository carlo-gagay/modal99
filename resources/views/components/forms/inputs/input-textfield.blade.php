@props([
'label'=>'',
'type'=>'',
'id'=>'',
'name'=>'',
'placeholder'=>'',
'required'=>false
])
<div>
    <label for="@if($type){{$type}}@endif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
        @if($label) {{$label}} @endif
    </label>
    <input 
        wire:model.lazy="@if($name){{$name}}@endif"
        type="@if($type){{$type}}@endif" 
        name="@if($name){{$name}}@endif" 
        id="@if($id){{$id}}@endif" 
        class="@error($name) border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" 
        placeholder="@if($placeholder){{$placeholder}}@endif" 
        required="@if($required){{$required}}@endif">
        @error($name)
            <p class="text-red-500 text-xs italic">{{$message}}</p>
        @enderror
</div>