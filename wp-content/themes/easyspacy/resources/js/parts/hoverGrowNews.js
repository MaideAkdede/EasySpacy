export default class HoverGrow {
    static get selector() {
        return '.news__news';
    }
    constructor(element) {
        element.addEventListener('mouseover', ()=>{
            element.classList.add('active__container');
        });
        element.addEventListener('mouseout', ()=>{
            element.classList.remove('active__container');

        })
    }
}