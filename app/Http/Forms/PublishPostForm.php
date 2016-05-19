<?php

namespace App\Http\Forms;

class PublishPostForm extends Form
{
    protected $rules = [
        'body' => 'required'
    ];

    /**
     * Persist the form.
     */
    public function persist()
    {
        dd('Save information: '. $this->body);
    }
}
