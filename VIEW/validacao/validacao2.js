$( "#formularioValidation" ).validate({
    debug: true,
    rules: {
      campo1: {
        required: true,
            email: true,
           // remote: 'check-email.php' //Deve utilizar um arquivo
           //(por exemplo: check-email.php) para verificar algo, e
           //assim retornar um boolean true ou false para satisfazer esta opção;
      },
          campo2:{
                minlength: 3,
               maxlength: 4,
               // ou
               rangelength: [3, 4] //Realiza a mesma coisa dos anteriores
          },
          campo3:{
                min: 10,
               max: 15,
               // ou
               range: [10, 15] //Realiza a mesma coisa dos anteriores
          },
          campo4:{
            required: true,
            extension: "jpg|jpeg|png|ico|bmp"
          },
          telefone_pessoal: {
        require_from_group: [1, ".grupo_telefone"]
      },
      telefone_casa: {
        require_from_group: [1, ".grupo_telefone"]
      },
      telefone_trabalho: {
        require_from_group: [1, ".grupo_telefone"]
      }
    },
    messages:{
          //exemplo
       campo4: {
        accept: "Mensagem customizada: Informe um tipo de arquivo válido!"
                   }
    }
  });