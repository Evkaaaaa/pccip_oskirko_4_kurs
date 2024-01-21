let form = document.querySelector('.formJS');
//let formData = {};

function getPrettyCookies() {
    var cookiesArr = document.cookie.split(';');
    var cookiesStr = '';
    for (var i = 0; i < cookiesArr.length; i++) {
        var cookie = cookiesArr[i].trim(); // помощью trim можно убрать начальные пробелы
        const eqPos = cookie.indexOf('='); // позиция знака равно
        if (eqPos > -1) {
            const name = cookie.substring(0, eqPos);
            const value = cookie.substring(eqPos + 1);
            cookiesStr += name + ' = ' + decodeURIComponent(value) + "\n"; // декодируем значение
        }
        else {
          cookiesStr += cookie + "\n";
        }
    }
    return cookiesStr;
}
  
//получить данные (formta - объект)
/*form.addEventListener('input', function(event){
    formData[event.target.name] = event.target.value;
});

//

//устанавливаем
function setCookie(name, value) {
    document.cookie = name + "=" + value;
}*/
// Функция для установки куки
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
      let date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }
  
  // Функция для получения значения куки по имени
  function getCookie(name) {
    let nameEQ = name + "=";
    let cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
      let cookie = cookies[i];
      while (cookie.charAt(0) === ' ') {
        cookie = cookie.substring(1, cookie.length);
      }
      if (cookie.indexOf(nameEQ) === 0) {
        return cookie.substring(nameEQ.length, cookie.length);
      }
    }
    return null;
  }
  
  
  
  


form.addEventListener('submit', e =>{
    e.preventDefault();
    let FIO = document.querySelector('#FIO').value;
    let mail = document.querySelector('#mail').value;
    let placeOfBirth = document.querySelector('#placeOfBirth').value;
    let hobbies = document.querySelector('#hobbies').value;
    let dateOfBirth = document.querySelector('#dateOfBirth').value;
    console.log(dateOfBirth);

// Сохранение значений в куки
  setCookie("FIO", String(FIO), 365);
  setCookie("mail", mail, 365);
  setCookie("placeOfBirth", placeOfBirth, 365);
  setCookie("hobbies", hobbies, 365);
  setCookie("dateOfBirth", dateOfBirth, 365);

  // Вывод значений из куки в alert
  alert("FIO: " + getCookie("FIO") +
        "\nmail: " + getCookie("mail") +
        "\nPlace of Birth: " + getCookie("placeOfBirth") +
        "\nHobbies: " + getCookie("hobbies") +
        "\nDate of Birth: " + getCookie("dateOfBirth"));

    /*document.cookie = "FIO=" + encodeURIComponent(FIO);
    document.cookie = "mail=" + encodeURIComponent(mail);
    document.cookie = "placeOfBirth=" + encodeURIComponent(placeOfBirth);
    document.cookie = "hobbies=" + encodeURIComponent(hobbies);
    document.cookie = "dateOfBirth=" + encodeURIComponent(dateOfBirth);

    alert ('Выши данные: \n' + getPrettyCookies());*/
});

function deleteAllCookies() {
    var cookies = document.cookie.split(";");
  
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i];
      var eqPos = cookie.indexOf("=");
      var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
    }
  }
  
document.querySelector('.clearCookie').addEventListener('click', e =>{
    e.preventDefault();
    deleteAllCookies();
    alert ('Выши данные: \n' + getPrettyCookies());
});