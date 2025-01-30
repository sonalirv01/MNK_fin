<x-guest-layout>

<div class="container">
    <h1>Two-Factor Authentication</h1>

        <p>Your two-factor authentication is enabled.</p>
        <form method="POST" action="{{ route('two-factor.verify') }}">
            @csrf
            <input type="text" name="code" id="code" required>
            <button type="submit">Verify</button>
        </form>
        @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
</div>

</x-guest-layout>