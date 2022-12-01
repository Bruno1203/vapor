function bodyLoad(){
    removeErrormessage()
    removeLoginerror()
    initClock()
}

function excluirJogo(idJogo) {
    let excluirJogo = confirm("Realmente desejaria excluir esse jogo?")

    if (excluirJogo == true){
        window.open("excluir-jogo.php?id=" + idJogo, "_SELF")
    }
}

function removeErrormessage(){
    let errorMessage = document.getElementById("error")
    let inputPrin = document.getElementById("input_prin")
    inputPrin.focus()
    if(errorMessage != null){
        setTimeout(function(){
            errorMessage.remove()
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

function initClock(){
    setInterval(function(){
        let clock = document.getElementById("clock")
        let dateTime = new Date()
        let month = dateTime.getMonth()
        let year = dateTime.getFullYear()
        let day = dateTime.getDay()
        let hour = dateTime.getHours()
        let minutes = dateTime.getMinutes()
        let seconds = dateTime.getSeconds()
    
        if(hour < 10){
            hour = "0" + hour
        }
        if(minutes < 10){
            minutes = "0" + minutes
        }
        if(seconds < 10){
            seconds = "0" + seconds
        }
        if(month < 10){
            month = "0" + month
        }
        if(day < 10){
            day = "0" + day
        }

        clock.innerHTML = day + "/" + month + "/" + year + " - " + hour + ":" + minutes + ":" + seconds
    }, 1000)
}