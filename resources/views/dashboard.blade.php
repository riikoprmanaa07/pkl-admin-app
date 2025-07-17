<h1>Selamat Datang di Dashboard User!</h1>

<p>Anda telah berhasil login sebagai user.</p>

{{-- Tombol Logout --}}
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>