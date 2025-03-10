@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Developer API Keys</h2>
        <form method="POST" action="{{ route('generate-api-key') }}">
            @csrf
            <input type="text" name="name" placeholder="API Key Name" required>
            <button type="submit">Generate API Key</button>
        </form>

        <h3>Your API Keys</h3>
        <ul>
            @foreach(auth()->user()->apiKeys as $key)
                <li>{{ $key->name }} - <strong>Hidden for security</strong>
                    <form method="POST" action="{{ url('/api-keys/' . $key->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Revoke</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
