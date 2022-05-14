@props([
'label'=>'',
'id'=>'',
'name'=>'',
'rows' => '',
'cols' => '',
'placeholder' => '',
'required'=>false
])
<div>
    <label for="@if($name){{$name}}@endif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
        @if($label) {{$label}} @endif
    </label>
    <textarea 
        wire:model.lazy="@if($name){{$name}}@endif"
        name="@if($name){{$name}}@endif" 
        id="@if($id){{$id}}@endif" 
        rows="@if($rows){{$rows}}@endif"        
        cols="@if($cols){{$cols}}@endif"
        class="@error($name) border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" 
        required="@if($required){{$required}}@endif">@if($placeholder){{$placeholder}}@endif</textarea>
        @error($name)
            <p class="text-red-500 text-xs italic">{{$message}}</p>
        @enderror
</div>