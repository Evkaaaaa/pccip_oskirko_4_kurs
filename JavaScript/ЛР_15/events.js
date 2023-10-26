 // События мыши
 document.getElementById("mouseButton").addEventListener("mouseover", function() {
    document.getElementById("mouseEvent").textContent = "Мышь наведена на кнопку.";
});
document.getElementById("mouseButton").addEventListener("mouseout", function() {
    document.getElementById("mouseEvent").textContent = "Мышь убрана с кнопки.";
});

// События клавиатуры
document.getElementById("keyboardInput").addEventListener("keyup", function(event) {
    document.getElementById("keyboardEvent").textContent = "Нажата клавиша: " + event.key;
});

// Drag & Drop события
document.getElementById("dragTarget").addEventListener("dragstart", function(event) {
    event.dataTransfer.setData("text/plain", event.target.id);
});

// События указателя
document.getElementById("pointerTarget").addEventListener("pointerenter", function() {
    document.getElementById("pointerEvent").textContent = "Указатель мыши вошел в элемент.";
});
document.getElementById("pointerTarget").addEventListener("pointerleave", function() {
    document.getElementById("pointerEvent").textContent = "Указатель мыши покинул элемент.";
});

// События полосы прокрутки
window.addEventListener("scroll", function() {
    document.getElementById("scrollEvent").textContent = "Прокрутка страницы: " + window.scrollY + "px";
});

// События сенсорных экранов (потребуется более сложная настройка для обработки жестов на устройствах с сенсорными экранами)
document.getElementById("touchEventDiv").addEventListener("touchstart", function(event) {
    document.getElementById("touchEvent").textContent = "Сенсорное касание обнаружено.";
});

//таймер начать отсчет
var c=0;
var t;
var timer_is_on=0;

function timedCount()
{
document.getElementById("txt").value=c;
c=c+1;
t=setTimeout("timedCount()",1000);
}

function doTimer()
{
if (!timer_is_on)
    {
timer_is_on=1;

timedCount();
    }
}
//прекратить считать
function stopCount()
{
clearTimeout(t);
timer_is_on=0;
}