<x-layout bg="contact"><x-topbar /><x-flash />
    <h1>Contatti</h1>
    <form method="POST" action="{{ route('contact.store') }}">@csrf
        <input type="text" name="name" value="{{ old('name') }}" class="form-control mb-2" placeholder="Nome">
        @error('name')
            <div class="text-danger mb-2">{{ $message }}</div>
        @enderror
        <input type="email" name="email" value="{{ old('email') }}" class="form-control mb-2" placeholder="Email">
        <textarea name="message" class="form-control mb-2" placeholder="Messaggio">{{ old('message') }}</textarea><button type="submit" class="btn btn-primary">Invia</button>
    </form>
</x-layout>
