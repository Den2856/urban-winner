let head = document.querySelector('.top')
let logo = document.querySelector('.logoof')
let logoHover = document.querySelector('.logo')
let header = document.querySelector('.header')

let secondMenu = document.querySelector('.sub-menu')

window.addEventListener('scroll', function(){
    head.classList.add('fix')
    logoHover.style.cssText = 'width: 78px; height: 30px;'
    logo.style.cssText = 'width: 78px; height: 30px;'
    header.style.cssText = 'height: 50px;'
    
    if(this.scrollY === 0){
        head.classList.remove('fix')
        logoHover.style.cssText = 'width: 176px; height: 68px;'
        logo.style.cssText = 'width: 176px; height: 68px;'
        header.style.cssText = 'height: 118px;'
    }   
})

function season(){
    secondMenu.style.visibility = 'visible'
    secondMenu.style.opacity = '1'
}

function seasonHide(){
    secondMenu.style.visibility = 'hidden'
    secondMenu.style.opacity = '0'
}