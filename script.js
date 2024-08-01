function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({
        behavior: 'smooth'
    });
}

// document.querySelector('form').addEventListener('submit', function(event) {
//     event.preventDefault();
//     alert('Message sent!');
// });

function toggle(){
    let T =document.getElementById('navigation')
    if(T.style.display == 'none'){
        T.style.display = 'block'
        
    }else{
        T.style.display = 'none'
    }
}
