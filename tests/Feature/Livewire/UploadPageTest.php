<?php

use App\Livewire\UploadPage;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;

it('can upload files', function () {
    Livewire::test(UploadPage::class)
        ->set('form.files', [
            [
                'name' => 'file1.txt',
                'file' => UploadedFile::fake()->create('file1.txt'),
            ],
            [
                'name' => 'file2.txt',
                'file' => UploadedFile::fake()->create('file2.txt'),
            ],
        ])
        ->call('upload')
        ->assertHasNoErrors();
});
