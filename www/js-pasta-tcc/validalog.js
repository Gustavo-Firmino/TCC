        <script>
            function valida(){
                    msg = "";
                    if(document.frm_login.username.value == ""){
                        msg+="Preencha o campo de Username!\n";
                    }
                    if(document.frm_login.pwd.value == ""){
                        msg+="Preencha o campo de senha!\n";
                    }
                    if(!msg ==""){
                        alert(msg);
                        return false;
                    }else{
                        return true; //irá para o evento onsubmit
                    }
                    
            }
        </script>