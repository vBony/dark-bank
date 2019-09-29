function validaForm(frm){

    if(frm.email.value.indexOf("@") == -1 || frm.email.value.indexOf(".") == -1 || frm.email.value == null || frm.email.value == ""){
        alert("Por favor, digite seu email corretamente!");
        frm.nome.focus();
        return false;
    }else{
        return true
    }

    if(frm.senha.value == "" || frm.senha.value == null || frm.senha.value != frm.confirmasenha.value || frm.senha.value <= 5){
        alert("Por favor, digite sua senha corretamente!");
        frm.senha.focus();
        return false;
    }else{
        return true
    }

    if(frm.senha.value.length <= 5){
        alert("A senha deve conter mais que 5 caracteres!");
        frm.senha.focus();
        return false;
    }else{
        return true
    }
}