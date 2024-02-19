<div>
    Hello!
    <div>
        <button type="button" wire:click="newFile">➕ New File</button>
        <form wire:submit="submit">
            @foreach($form->files as $key => $file)
            <div>
                <input
                    type="text"
                    wire:model="form.files.{{$key}}.name"
                    placeholder="Name of the file"
                    required
                />
                <input
                    type="file"
                    wire:model="form.files.{{$key}}.file"
                    required
                />
                <button type="button" wire:click="removeFile('{{$key}}')">
                    🗑️
                </button>
            </div>
            @endforeach
            <button type="submit">Upload</button>
        </form>
    </div>
</div>
