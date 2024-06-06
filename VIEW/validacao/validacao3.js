//Valida o formulário
$( "#form" ).validate({
    debug: true
  });
   // apelido necessário para o cRequired com nova mensagem
   $.validator.addMethod("cRequired", $.validator.methods.required,
     "Informação do cliente necessária");
   // apelido cMinlength
   $.validator.addMethod("cMinlength", $.validator.methods.minlength,
     $.validator.format("Informação do cliente deve ter pelo menos {0} caracteres"));
   // combina os dois, aplicando as regras nos campos que contenham a classe chamada "cliente"
   $.validator.addClassRules("cliente", { cRequired: true, cMinlength: 2 });