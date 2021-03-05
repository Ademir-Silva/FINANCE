function onSignIn(googleUser) {
    let profile = googleUser.getBasicProfile()

    const userId = profile.getId() 
    const userName = profile.getName()
    const userPhoto = profile.getImageUrl()
    const userEmail = profile.getEmail()

    let userToken = googleUser.getAuthResponse().id_token

    if(userEmail !== ''){

        let data = {
            userId: userId,
            userName: userName,
            userPhoto: userPhoto,
            userEmail: userEmail
        }

        $.post('../pages/config-user.php', data, retorna =>{

            if(retorna === '"erro"'){
                let msg = "Usuario não encontrado com esse email!!"
                document.getElementById('msg').innerHTML = msg
            }else{
                window.location.href = retorna
            }
        })

    }else{
        let message = "Usuário não encontrado !!!"
        document.getElementById('msg').innerHTML = message

    }
}

