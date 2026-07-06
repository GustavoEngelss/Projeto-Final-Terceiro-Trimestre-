/*Script do menu*/
var menuItem = document.querySelectorAll('.item-menu')
function selectLinck(){
    menuItem.forEach((item)=>
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}
menuItem.forEach((item)=>
    item.addEventListener('click',selectLinck)
)
//expandir o menu
var btnExpande = document.querySelector('#btn-expandir')
var menu = document.querySelector('.menu-lateral')
btnExpande.addEventListener('click', function(){
    menu.classList.toggle('expandir')
})

