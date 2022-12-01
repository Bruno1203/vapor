function excluirJogo(idJogo) {
    let excluirJogo = confirm("Realmente desejaria excluir esse jogo?")

    if (excluirJogo == true){
        window.open("excluir-jogo.php?id=" + idJogo, "_SELF")
    }
}

function removeErrormessage(){
    let errorMessage = document.getElementsByClassName("error")
    let inputInfo = document.getElementsByClassName("input_info")
    inputInfo[0].focus()
    if(errorMessage != null){
        setTimeout(function(){
            errorMessage[0].remove()
        }, 4000)
    }
}

function removeLoginerror(){
    let errorMessage = document.getElementById("error_message")
    let inputEmail = document.getElementById("email_login")
    inputEmail.focus()
    if(errorMessage != null){
        setTimeout(function(){
            errorMessage.remove()
        }, 4000)
    }
}