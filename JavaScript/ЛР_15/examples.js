//1
function countPirojok() {
    for(let i=1; i<=6; i++) {
    alert("Пирожок" + " " +i);
    }
    }
//2
elem.onclick = function() {
    alert("Люблю пирожки!")};

//5-6
function handler1() {
    alert("Не обижайся, если я не отвечу на твоё приветствие на улице. Просто я ношу звуконепроницаемые наушники, вот и всё.");
    };
    function handler2() {
    alert("Рановато для меня, позволь мне сначала выпить чашку кофе.");
    };
    
    elem1.onclick = () => alert("Приветствую");
    elem1.addEventListener("click", handler1); 
    elem1.addEventListener("click", handler2); 

    input.addEventListener("click", handler1);
    input.removeEventListener("click", handler1);