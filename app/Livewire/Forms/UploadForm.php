<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UploadForm extends Form
{
    public array $files = [];

    public function upload()
    {
        $this->validate([
            'files.*.file' => 'required|file|max:1024',
            'files.*.name' => 'required|string|max:255'
        ]);

        foreach ($this->files as $file) {
            $file['file']->storeAs('uploads', $file['name']);
        }
    }
}
