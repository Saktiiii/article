<form action="{{ route('register') }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="text" name="name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Password</label>
    <input type="password" name="password">

    <button type="submit">Register</button>
</form>
