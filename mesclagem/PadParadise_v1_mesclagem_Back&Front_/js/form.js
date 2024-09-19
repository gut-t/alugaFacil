function formatCPF(cpf) {
  cpf = cpf.replace(/\D/g, ""); // Remove caracteres não numéricos
  cpf = cpf.replace(/^(\d{3})(\d)/, "$1.$2"); // Adiciona o primeiro ponto
  cpf = cpf.replace(/^(\d{3})\.(\d{3})(\d)/, "$1.$2.$3"); // Adiciona o segundo ponto
  cpf = cpf.replace(/\.(\d{3})(\d)/, ".$1-$2"); // Adiciona o hífen
  return cpf;
}

function onCPFInput(event) {
  const input = event.target;
  input.value = formatCPF(input.value);
}

function formatCNPJ(cnpj) {
  cnpj = cnpj.replace(/\D/g, "");
  cnpj = cnpj.replace(/^(\d{2})(\d)/, "$1.$2");
  cnpj = cnpj.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
  cnpj = cnpj.replace(/\.(\d{3})(\d)/, ".$1/$2");
  cnpj = cnpj.replace(/(\d{4})(\d)/, "$1-$2");
  return cnpj;
}

function onCNPJInput(event) {
  const input = event.target;
  input.value = formatCNPJ(input.value);
}
function formatTelefone(telefone) {
  telefone = telefone.replace(/\D/g, ""); // Remove caracteres não numéricos
  telefone = telefone.replace(/^(\d{2})(\d)/, "($1) $2"); // Adiciona o código de área
  telefone = telefone.replace(/(\d{5})(\d)/, "$1-$2"); // Adiciona o hífen
  telefone = telefone.replace(/(\d{5})(\d)/, "$1-$2"); // Adiciona o hífen para números com 5 dígitos
  return telefone;
}

function onTelefoneInput(event) {
  const input = event.target;
  input.value = formatTelefone(input.value);
}

function showForm(formId) {
  // Oculta todos os formulários
  document.querySelectorAll(".form-container").forEach((form) => {
    form.style.display = "none";
  });

  // Mostra o formulário selecionado
  document.getElementById(formId).style.display = "block";
}

function showForm(formId) {
  // Oculta todos os formulários
  document.querySelectorAll(".form-container").forEach((form) => {
    form.style.display = "none";
  });

  // Mostra o formulário selecionado
  document.getElementById(formId).style.display = "block";
}
