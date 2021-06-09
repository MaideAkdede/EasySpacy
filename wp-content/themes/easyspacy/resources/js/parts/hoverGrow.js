export default class HoverGrow {
    static get selector() {
        return '.capsules__container';
    }
    constructor(element) {
        this.moon = element.querySelector('.capsules__difficulty');

        element.addEventListener('mouseover', ()=>{
            element.classList.add('active__container');
        });
        element.addEventListener('mouseout', ()=>{
            element.classList.remove('active__container');

        })
    }
}