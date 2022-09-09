<?php

namespace Agenciafmd\Frontend\Http\Livewire;

use Agenciafmd\Anapro\Jobs\SendConversionsToAnapro;
use Agenciafmd\Postal\Models\Postal;
use Agenciafmd\Postal\Notifications\SendNotification;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Contact extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public $terms = null;

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

        Postal::where('slug', 'contato')
            ->first()
            ->notify(new SendNotification([
                'greeting' => 'Contato',
                'introLines' => [
                    '**Nome:** ' . $data['name'],
                    '**E-mail:** ' . $data['email'],
                    '**Telefone:** ' . $data['phone'],
                    '**Política de Privacidade:** ' . (($data['terms']) ? 'Sim' : 'Não'),
                ],
            ], [$data['email'] => $data['name']]));

        $phone = preg_replace('/[^0-9]/', '', $data['phone']);
        $description = '**Nome:** ' . $data['name'] .
            ' **E-mail:** ' . $data['email'] .
            ' **Celular:** ' . $data['phone'] .
            ' **Termos de uso:** ' . ($data['terms'] ? 'Sim' : 'Não');

        $data = [
            'Midia' => Cookie::get('utm_source', ''),
            'Peca' => Cookie::get('utm_medium', ''),
            'UsuarioEmail' => '',
            'GrupoPeca' => '',
            'CampanhaPeca' => Cookie::get('utm_campaign', ''),
            'PessoaNome' => $data['name'],
            'ValidarEmail' => 'false',
            'PessoaEmail' => $data['email'],
            'ValidarTelefone' => 'false',
            'PessoaTelefones' => [
                [
                    'Tipo' => 'OUTR',
                    'DDD' => substr($phone, 0, 2),
                    'Numero' => substr($phone, 2),
                    'Ramal' => null,
                ],
            ],
            'Observacoes' => $description,
        ];

        SendConversionsToAnapro::dispatch($data);
        $this->emit('swal', [
            'level' => 'success',
            'message' => 'Mensagem enviada com sucesso.',
        ]);

        $this->emit('datalayer', [
            'category' => 'Contato',
            'form_name' => 'contato',
        ]);

        $this->reset();
    }
}
