export default class ScrollTop {

    static get selector() {
        return '.footer__svg--link';
    }

    constructor(element) {
        element.addEventListener('click', (e)=>{
            e.preventDefault();
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        });
    }
}