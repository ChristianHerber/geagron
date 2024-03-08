<form action="validar.php" method="POST" class="user">

    <div class="form-group">
        <label for="" class="form-label">E-mail</label>
        <input 
            type="email"
            name="username"
            class="form-control"
            id="loginEmail" 
            aria-describedby="emailHelp"
            placeholder="">
    </div>

    <div class="form-group">
        <label for="" class="form-label">Senha</label>
        <input 
            type="password" 
            name="password"
            class="form-control"
            id="loginPass" 
            placeholder="">
    </div>
    
    <button class="btn btn-success btn-block">
        Login
    </button>
</form>