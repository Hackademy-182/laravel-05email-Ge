<x-layout><x-flash />
    <form method="POST" action="{{ route('contact.store') }}">

        @csrf
        <input class="form-control mb-2" name="name" placeholder="Nome">
        <input class="form-control mb-2" name="email" placeholder="Email">
        <textarea class="form-control mb-2" name="message" placeholder="Messaggio"></textarea>
        <h2>Nuovo messaggio</h2>
        <p>Nome: {{ $data['name'] }}</p>
        <p>Email: {{ $data['email'] }}</p>
        <p>Messaggio: {{ $data['message'] }}</p>
        <button class="btn btn-primary">Invia</button>

    </form>
</x-layout>
