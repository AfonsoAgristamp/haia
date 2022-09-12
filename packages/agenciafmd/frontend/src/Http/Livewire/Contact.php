<?php

namespace Agenciafmd\Frontend\Http\Livewire;

use Livewire\Component;
use Agenciafmd\Postal\Models\Postal;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Agenciafmd\Anapro\Jobs\SendConversionsToAnapro;
use Agenciafmd\Postal\Notifications\SendNotification;

class Contact extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public $terms = null;

    private string $uri = 'https://rve.cvcrm.com.br/api/cvio/lead';
     
    public function render()
    {
        return view('agenciafmd/frontend::livewire.contact');
    }

    public function updated($field)
    {
        $this->validateOnly($field, $this->rules(), [], $this->attributes());
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:6',
            ],
            'email' => [
                'required',
                'email',
            ],
            'phone' => [
                'required',
                'min:14',
            ],
            'terms' => [
                'accepted',
            ],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'phone' => 'telefone',
            'email' => 'e-mail',
            'terms' => 'políticas de privacidade',
        ];
    }

    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());
        $cvcrmJson = [
            'nome' => $data['name'],
            'email' => $data['email'],
            'telefone' => $data['phone']
        ];
           Http::withHeaders([
                'token' => 'f32201d5186eeecb8c2c8c326fa4280525c59e26',
            ])->post($this->uri, $cvcrmJson);
        }
}
