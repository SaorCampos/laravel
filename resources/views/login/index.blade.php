<x-layout class="d-flex" title="Login">
    <form action="post" class="mb-3">
        @csrf
        <div class="mb-3">
            <div class="mb-3 col-4">
                <label for="email" class="form-label">Email</label>
                <input autofocus type="text" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3 col-4">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
            </div>
        </div>
        <button type="submit" class="btn" style="background-color: #3C9BA6">Entrar</button>
    </form>
    <a href="{{route('users.create')}}" class="btn" style="background-color: #3C9BA6" >Criar Usuário</a>
</x-layout>