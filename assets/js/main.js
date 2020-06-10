var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("slider-img");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }

    // -------- Validação ------------- 


    function validaCampos() {
      const nome = formulario.nome;
      const email = formulario.email;

      if(nome.value == "") {
        alert ("Preencha um Nome");
        nome.focus();
        return false;
      }
      if (email.value == "") {
        alert ("Preencha um E-mail");
        email.focus();
        return false;
      }
    }