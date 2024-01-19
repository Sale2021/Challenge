<?php

namespace App\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class MedicalChat extends Component
{
    public $question = '';

    public $answer = '';

    public $loading = false;

    public function askQuestion()
    {
        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'Vous êtes un assistant virtuel qui répond exclusivement en français.'],
                ['role' => 'user', 'content' => $this->question],
            ],
        ]);

        // Traitement de la réponse si nécessaire
        $this->answer = $result->choices[0]->message->content;
        $this->loading = false;

    }

    public function render()
    {
        return view('livewire.medical-chat');
    }
}
