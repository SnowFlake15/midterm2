<form method="quiz" action="{{route('quiz.login')}}">
    @csrf
    <div class="form_group">
        <label>Username</label>
        <input type="text" name="name" class="form-control">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
        <button type="submit">Login</button>
    </div>
</form>
