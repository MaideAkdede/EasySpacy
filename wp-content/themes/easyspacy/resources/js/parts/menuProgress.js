export default class MenuProgress {
    static get selector() {
        return '.progress';
    }
    constructor(element) {
        //elements
        this.element = element;
        this.bar = element.querySelector('.progress__bar');
        //calcul
        this.scrollTop = window.scrollY; //element qu‘on a scroll
        this.height = document.body.clientHeight - window.innerHeight ; //hauteur total de la page - ce qu‘on voit (donc qui ne sera jamais scroll)
        this.percent = (this.scrollTop / this.height) * 100;
        //event
        window.addEventListener('scroll', ()=>{
            this.scrollTop = window.scrollY;
            this.height = document.body.clientHeight - window.innerHeight;
            this.percent = (this.scrollTop / this.height) * 100;
           this.bar.style.width = this.percent + '%' ;
        });

    }

}