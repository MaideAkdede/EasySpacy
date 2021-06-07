export default class MenuFix {
    static get selector() {
        return 'html';
    }
    constructor() {
        this.element = document.querySelector('.header');
        window.addEventListener('scroll', ()=>{
            this.fixMenu();
        })
    }
    fixMenu(){
        if(window.scrollY >= 150){
            this.element.classList.add('header__fixed');
        } else if (window.scrollY < 150){
            this.element.classList.remove('header__fixed');
        }
    }

}