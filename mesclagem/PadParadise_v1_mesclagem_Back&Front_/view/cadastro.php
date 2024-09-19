<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Cadastro</title>

    <style>
        .form-container {
            display: none;
        }
    </style>

    <script src="../js/form.js" defer></script>
</head>

<body>
    <main>
        <h1>Cadastro</h1>
        <form action="login.php">
            <div class="questionUser">
                <p>Já sou cadastrado! <button type="submit">Login</button></p>
            </div>
        </form>
        <div class="container">
            <section class="form-section">
                <form id="userTypeForm">
                    <div class="form-group" id="tipoUser">
                        <label for="tipoUs">Criar conta de:</label>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="tipoUs" value="locador" onclick="showForm('locadorForm')">
                                Locador
                            </label>
                            <label>
                                <input type="radio" name="tipoUs" value="locatario" id="locatarioRadio"
                                    onclick="showForm('locatarioForm')"> Locatário
                            </label>
                        </div>
                    </div>
                </form>

                <!-- Formulário para Locador -->
                <div id="locadorForm" class="form-container">
                    <form action="../control/usuarioControl.php" method="post">
                        <div class="form-group">
                            <label for="nomeLocador">Nome:</label>
                            <input type="text" id="nomeLocador" name="nome" placeholder="Informe o nome" required>
                        </div>
                        <div class="form-group">
                            <label for="dataNascLocador">Data de Nascimento:</label>
                            <input type="date" id="dataNascLocador" name="dataNasc" required>
                        </div>
                        <div class="form-group">
                            <label for="cpfLocador">CPF:</label>
                            <input type="text" id="cpfLocador" name="cpf" placeholder="xxx.xxx.xxx-xx"
                                pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Informe o padrão correto: xxx.xxx.xxx-xx"
                                required minlength="14" maxlength="14" oninput="onCPFInput(event)">
                        </div>
                        <div class="form-group">
                            <label for="cnpjLocador">CNPJ:</label>
                            <input type="text" id="cnpjLocador" name="cnpj" placeholder="xx.xxx.xxx/xxxx-xx"
                                pattern="\d{2}\.\d{3}\.\d{3}/\d{4}-\d{2}"
                                title="Informe o padrão correto: xx.xxx.xxx/xxxx-xx" required minlength="18"
                                maxlength="18" oninput="onCNPJInput(event)">
                        </div>
                        <div class="form-group">
                            <label for="enderecoLocador">Endereço:</label>
                            <input type="text" id="enderecoLocador" name="endereco" placeholder="Informe o Endereço"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="telefoneLocador">Número de Telefone:</label>
                            <input type="text" id="telefoneLocador" name="telefone" placeholder="(xx) xxxx-xxxx"
                                pattern="\(\d{2}\) \d{4,5}-\d{4}"
                                title="Informe o padrão correto: (xx) xxxx-xxxx ou (xx) xxxxx-xxxx" required
                                minlength="15" maxlength="15" oninput="onTelefoneInput(event)">
                        </div>
                        <div class="form-group">
                            <label for="emailLocador">Email:</label>
                            <input type="email" id="emailLocador" name="email" placeholder="Informe o email" size="40"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="senhaLocador">Senha:</label>
                            <input type="password" id="senhaLocador" name="senha" placeholder="Informe a senha"
                                pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
                                title="A senha dever conter pelo menos 8 caracteres incluindo uma letra maiúscula, uma letra minúscula, um caractere especial (@$!%*?&)."
                                minlength="8" maxlength="8" required>
                        </div>
                        <button type="submit" class="submit-button">Enviar</button>
                    </form>
                </div>

                <!-- Formulário para Locatário -->
                <div id="locatarioForm" class="form-container">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nomeLocatario">Nome:</label>
                            <input type="text" id="nomeLocatario" name="nome" placeholder="Digite seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="dataNascLocatario">Data de Nascimento:</label>
                            <input type="date" id="dataNascLocatario" name="dataNasc" required>
                        </div>
                        <div class="form-group">
                            <label for="cpfLocatario">CPF:</label>
                            <input type="text" id="cpfLocatario" name="cpf" placeholder="xxx.xxx.xxx-xx"
                                pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Informe o padrão correto: xxx.xxx.xxx-xx"
                                required minlength="14" maxlength="14" oninput="onCPFInput(event)">
                        </div>
                        <div class="form-group">
                            <label for="enderecoLocatario">Endereço:</label>
                            <input type="text" id="enderecoLocatario" name="endereco" placeholder="Digite seu Endereço"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="telefoneLocatario">Número de Telefone:</label>
                            <input type="text" id="telefoneLocatario" name="telefone" placeholder="(xx) xxxx-xxxx"
                                pattern="\(\d{2}\) \d{4,5}-\d{4}"
                                title="Informe o padrão correto: (xx) xxxx-xxxx ou (xx) xxxxx-xxxx" required
                                minlength="15" maxlength="15" oninput="onTelefoneInput(event)">
                        </div>
                        <div class="form-group">
                            <label for="emailLocatario">Email:</label>
                            <input type="email" id="emailLocatario" name="email" placeholder="Informe o email" size="40"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="senhaLocatario">Senha:</label>
                            <input type="password" id="senhaLocatario" name="senha" placeholder="Informe a senha"
                                pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
                                title="A senha dever conter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma letra minúscula, um caractere especial (@$!%*?&)."
                                minlength="8" maxlength="16" required>
                        </div>
                        <button type="submit" class="submit-button">Enviar</button>
                    </form>
                </div>
            </section>

            <!-- Link de navegação para voltar -->
            <div class="text-center">
                <div class="back-link">
                    <a href="../index.php">Voltar</a>
                </div>
            </div>
    </main>

    <!-- Inclusão do footer PHP -->
    <?php include_once "../partes/footer.php"; ?>
</body>

</html>