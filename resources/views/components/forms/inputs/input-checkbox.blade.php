@props([
'for' => '',
'label'=>'',
'id'=>'',
'name'=>'',
'required'=>false
])

<div class="flex justify-between">
    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input id="@if($id){{$id}}@endif" name="@if($name){{$name}}@endif" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="@if($required){{$required}}@endif">
        </div>
        <label for="@if($for){{$for}}@endif" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">@if($label){{$label}}@endif</label>
    </div>
</div>