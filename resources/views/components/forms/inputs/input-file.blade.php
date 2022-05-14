@props([
'multiple' => '',
'name' => '',
'id' => '',
'label' => ''
])
<div class="mt-4" id="app">
    <label for="@if($id){{$id}}@endif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
        @if($label) {{$label}} @endif
    </label>
    <input class="filepond" type="file" {{$multiple}} name="@if($name){{$name}}@endif" id="@if($id){{$id}}@endif">
</div>
@push('scripts')
<script>
    // FilePond.registerPlugin(FilePondPluginImagePreview);
    // const inputElement = document.querySelector('input[type="file"]');
    // const pond = FilePond.create(inputElement, {
    //     maxFiles: 10,
    //     maxFileSize: '3MB',
    //     acceptedFileTypes: ['image/*'],
    //     allowImagePreview: true,
    // });
</script>
@endpush