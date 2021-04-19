<html>

<head>
    <title>TESTE</title>

    <script>
    
        function showPrompt() {
            // Aqui ele cria um dialog com um imput onde seja possível colocar valores //
            var investimento = prompt('Informe o valor do investimento.');

            // Verifica se existe algo informado no campo //
            var hasNumber = investimento.length > 0 ? true : false;

            // Verifica se o campo é nulo ou não numérico //
            if (!hasNumber || isNaN(investimento)) {
                alert('Por favor, informe o campo corretamente!');
                return;
            }

            // Aqui você faz o código que calcula o retorno do investimento //
            var invest = Number(investimento);
            var converted = invest.toLocaleString('pt-br', {
                style: 'currency',
                currency: 'BRL'
            });

            alert(`Retorno é de: ${ converted }`);
        }

    </script>
</head>

<body>
    <button type="button" onClick="showPrompt();">Teste de investimento</button>
</body>

</html>