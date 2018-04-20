console.clear();

const login = document.getElementById('login');
const signup= document.getElementById('signup');

login.addEventListener('click',function (e) {
    const parent = login.parentNode.parentNode;


    /* on teste si le slide est up ou down et le traitement sera en fonction de ce test , on utilise pour ceci l'hierarchie des nodes donc
    on a acces au <div class="login slide-up"> pour la premiére partie et acces au <div class="signup"> pour la 2eme partie */


    if(parent.classList.item(1) !== "slide-up") {
        parent.classList.add('slide-up')
        signup.parentNode.classList.remove('slide-up')
    }else{

        parent.classList.remove('slide-up')
        signup.parentNode.classList.add('slide-up')
    }

});

signup.addEventListener('click', function(e) {
    const parent = signup.parentNode
    if(parent.classList.item(1) !== "slide-up") {
        parent.classList.add('slide-up')
        login.parentNode.parentNode.classList.remove('slide-up')
    }else{

        parent.classList.remove('slide-up')
        login.parentNode.parentNode.classList.add('slide-up')
    }
});

// pour ne pas quitter imediatement
function red(lien) {
    if (window.confirm("voulez vous vraiment quittez ? ")) {
        window.location = (lien);
    }
    else
        die();
}
