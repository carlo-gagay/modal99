<div>
    <x-modals.modal-base listener="showTitleModal">
        <div>
            <x-modals.modal-close-btn />
        </div>

        <x-forms.default-form method="post" action="save" title="Create title for your comic">

            <div>
                <x-alerts.inline-alert listener="notify" />
            </div>

            <div>
                <x-forms.inputs.input-textfield type="text" required="false" label="Tile of Comic" name="title" id="title" placeholder="Inser title here..." />
                <x-forms.inputs.input-textarea label="Description" required="false" name="description" id="description" placeholder="Insert title description here..." />
                <x-forms.inputs.input-file label="Featured image" name="featured_image" id="featured_image" />
                <x-forms.inputs.input-submit type="submit" text="Create Title" />
            </div>

        </x-forms.default-form>


    </x-modals.modal-base>

    <div>
        <!-- <x-alerts.popup-alert /> -->
    </div>
</div>