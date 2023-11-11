
<script>
function logar() {
    var login = document.getElementById('username').value;
    var senha = document.getElementById('password').value;

    if (login == "user" && senha == "1234") {
        alert('Sucesso');
        location.href = "servicos.html";
    } else {
        alert('Usuario ou senha incorretos');
    }
}
</script>

