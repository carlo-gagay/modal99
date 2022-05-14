@extends('layouts.app')

@section('content')
<div>
    <livewire:modals.modal-trigger name="Open Title Modal" listener="showTitleModal" />
    <livewire:modals.title-modal />
</div>
@endsection