/*const car={
}
car.name="Benz";
car.plaque="RAB 437";
car.id=20;
car.color="Blue";
delete car.id;
let mine="This "+car.color+" "+car.name+" have palaque "+car.plaque+" and it is number "+car.id;
document.getElementById('demo').innerHTML=mine;*/


const myobj={
    name:"Eloi",
    age:20,
    car:{
        car1:"Benz",
        car2:"BMW",
        car3:"Toyota"
    },
    fullDisc:function(){
        return ("My name is "+this.name+" am "+this.age+" old. I have 3 cars "+this.car.car1+","+this.car.car2
        +","+this.car.car3+".").toUpperCase();
    }
}
document.getElementById('demo').innerHTML=myobj.fullDisc();
//Looping to display object
const myobj2={
    name:"Jux",
    age:24,
    address:"Kigali",
    natiionality:"Rwanda",
}
let text=" ";
for(let x in myobj2){
    text+=myobj2[x]+" ";
    document.getElementById('demo2').innerHTML=text;
}
//Date making
const d = new Date();
const time=d.getFullYear;
document.getElementById('date').innerHTML=time;