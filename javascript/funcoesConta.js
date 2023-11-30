document.addEventListener("DOMContentLoaded", function () {
    const preRegisteredAccount = {
      titular: "Fábio Júnior",
      numeroConta: "5112345678",
      saldo: 1000.00,
    };

    document.getElementById("titular-conta-info").textContent = preRegisteredAccount.titular;
    document.getElementById("numero-conta-info").textContent = preRegisteredAccount.numeroConta;
    document.getElementById("saldo-conta-info").textContent = preRegisteredAccount.saldo.toFixed(2);
});