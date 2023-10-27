let forma = document.querySelector("form");

let FName = document.getElementById("fn");
let Email = document.getElementById("email");
let Password = document.getElementById("password");

let DD = document.getElementById("DD");
let MM = document.getElementById("MM");
let YYYY = document.getElementById("YYYY");

let Male = document.getElementById("gender-male");
let Female = document.getElementById("gender-female");

let Credit_card = document.getElementById("payment-method-card");
let Paypal = document.getElementById("payment-method-paypal");

let CNum = document.getElementById("Card_Num");
let CCVC = document.getElementById("Card_CVC");

let date1 = document.getElementById("date1");
let date2 = document.getElementById("date2");
////////////////получаем значение из поля с выбором пола//////////////////////
function getZn(){
    let selectedGender = document.getElementsByName('gender');
    for (var i = 0; i < selectedGender.length; i++) {
        if (selectedGender[i].checked) {
            return (selectedGender[i].value);
            break;
        }
    }
}
//////////////////проверка чек бокса//////////////////////////
document.getElementById("but").onclick = function(){
    if (document.getElementById("terms").checked) { alert("Вы согласились с условиями"); } else { alert("Вы не согласились с условиями"); }
    }
///////////////////////вывод введенных данных в окно//////////////////////////////
forma.addEventListener("submit", function(e){
    e.preventDefault()
    alert(FName.value + " " 
    + Email.value + " " 
    + Password.value + " " 
    + DD.value + " "
    + MM.value + " "
    + getZn() + " "
    );
})