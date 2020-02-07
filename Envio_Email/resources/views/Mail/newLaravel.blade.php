@component('mail::message')
    <h2>Novo Email</h2>
    @component('mail::button', ['url' => 'https://google.com'])
        Deu Certo
    @endcomponent
    <p>Eai {{$user->name}}, email chegandoooooo</p>
@endcomponent