<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->tx('140') }}" alt="{{ $user->name }}" class="tx"/>
</a>
<h1>{{ $user->name }}</h1>
