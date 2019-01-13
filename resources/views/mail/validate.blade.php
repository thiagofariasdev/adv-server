@component('mail::message')
    # Confirme seu e-mail
    Obrigado por cadastrar-se em nosso app, estamos felizes em te conhecer.<br/>
    Confirme seu E-mail clicando no botão a baixo.
    @component('mail::panel')
        @component('mail::button', ['url' => $url, 'color'=>'blue'])
            CONFIRMAR E-MAIL
        @endcomponent
    @endcomponent
    Atenciosamente,<br>
    {{ config('app.short') }}
@endcomponent