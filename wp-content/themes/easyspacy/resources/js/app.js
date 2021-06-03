import Pluton from "@whitecube/pluton/pluton";

class EasySpacy {
    constructor(){
        //TODO
        console.log('Pluton EasySpacy Todo');

    }
    load(){
        this.pluton = new Pluton();
        console.log('Pluton EasySpacy');
    }
}
window.addEventListener('load', (e)=>{
    window.EasySpacy = new EasySpacy();
    window.EasySpacy.load();
})
