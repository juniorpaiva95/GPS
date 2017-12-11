<div>
    <ul>
        {{--@foreach($entry->user->getAttributes() as $attribute)--}}
            {{--<li>{{ $attribute }}</li>--}}
        {{--@endforeach--}}
        <li>Nome de Usuário: {{ $entry->user->name }}</li>
        <li>Email: {{ $entry->user->email }}</li>
        <li>Criado em: {{ $entry->user->created_at->format('d/m/Y H:m:s') }}</li>
    </ul>

</div>
