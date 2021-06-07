export default class MenuToggle {
    static get selector() {
        return '.menu__open';
    }

    constructor(element) {
        this.burger = element;
        this.menu = document.querySelector('.menu');
        this.close = document.querySelector('.menu__close');

        this.burger.addEventListener('click', (e)=>{
            this.openMenu(e);
        });
        this.close.addEventListener('click', (e)=>{
            this.closeMenu(e);
        })
    }
    openMenu(e){
        e.preventDefault();
        this.menu.classList.add('menu__active');
    }
    closeMenu(e){
        e.preventDefault();
        this.menu.classList.remove('menu__active');
    }

}