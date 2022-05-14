<x-modals.modal-base>
    <x-modals.modal-header>
        <x-modals.modal-close-btn />
    </x-modals.modal-header>
    <x-forms.default-form  title="Create title for your comic">
        <x-forms.inputs.input-textfield type="text" label="Username" name="name" id="name" placeholder="Insert username here..." />
        <x-forms.inputs.input-textfield type="email" label="Email" name="email" id="email" placeholder="Inser email here..." />
        <x-forms.inputs.input-textfield type="password" label="Password" name="password" id="password" placeholder="***********" />
        <x-forms.inputs.input-textfield type="password" label="Password" name="password_confirmation" id="password_confirmation" placeholder="***********" />
        <x-forms.inputs.input-submit type="submit" text="Create Title" />
        <x-alerts.inline-alert />
    </x-forms.default-form>
    <x-modals.footer />
</x-modals.modal-base>