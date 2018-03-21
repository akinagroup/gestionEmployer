console.log('nous somme des bleus en js');
let prenom: string = 'Aminata';
let nom : string = 'Sankare' ;
let age: number = 11 ;
let sexe : boolean = true;
let list : number[] = [1, 2, 3,4];
// let list1: Array = [1, 2, 3];
for (let i = 0; i < list.length; i++) {
    const element = list[i];
    console.log(element);

}
list.forEach(element => {
    console.log(element);

});

enum Sexe {
    homme,
    femme,
    Unknown,

}
namespace Sexe {
    export function isBusinessDay(day: Sexe) {
        switch (day) {
            case Sexe.homme:
            case Sexe.femme:
                return false;
            default:
                return true;
        }
    }
}
/*
if (sexe == true){
let response :string = 'femme' ;
let reponse : string = `Hello, mon nom est ${ nom } ${ prenom } . J'ai ${ age + 1 } et je suis un(e) ${ response }.`;
    console.log(reponse);
}
let x : boolean = true ; x = false;
*/
//let arr_names:number[] = new Array(4)
/*let list: Array<number> = [0,1,4,2,4,5,2,4];
for(let i = 0;i<list.length;i++) {
    list[i] = i * 2;
    console.log(list[i]);
};
/*
function foo() {
    // okay to capture 'a'
let nom : Array<string> = ['Aminata','Yande'];
 let prenom : Array<string> = ['Sankare','Ndiaye'];
 let email : Array<string> = ['nefer@gmail.com','yande@gmail.com'];
 let address : Array<string> = ['nord foire','damel'];
 let identite : Array<number> = [4522145522,548754245];
 let telephone: Array<number> = [55412457,7858547];
 let codebanquaire: Array<number> = [56865854,965689];
}*/
let prorietaire: (x: string, y:string) => string =
    function(x: string, y: string): string { return x + y };