function Login(event) {
    event.preventDefault();
    var usuario = document.getElementsByName('username')[0].value;
    usuario = usuario.toLowerCase();
    var senha = document.getElementsByName('password')[0].value;
    senha = senha.toLowerCase();

    if (usuario == "admin" && senha == "admin") {
        alert("dados corretos");
        window.location = "/paginas/index.html";
    } else {
        alert("Dados incorretos, tente novamente");
    }
}