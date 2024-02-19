<?php

namespace App\Livewire;

use App\Livewire\Forms\UploadForm;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UploadPage extends Component
{
    use WithFileUploads;

    public UploadForm $form;

    public function submit()
    {
        $this->form->upload();

        $this->js('alert("Files uploaded!");');

        $this->form->reset();
    }

    public function newFile()
    {
        $this->form->files[] = [
            'name' => null,
            'file' => null,
        ];
    }

    public function removeFile($index)
    {
        unset($this->form->files[$index]);
    }

    public function render()
    {
        return view('livewire.upload-page');
    }
}
