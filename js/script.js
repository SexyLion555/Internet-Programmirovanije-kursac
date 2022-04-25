const buybtn = document.querySelector(".middle");
const btnShop = document.querySelector(".btn_shop");
const btnNews = document.querySelector('.btn_news');
const btnSignUp = document.querySelector('.btn_sign_up');
const catalog = document.querySelector(".catalog")
const textNews = document.querySelector(".catalog_news")
const auth = document.querySelector(".auth")
const formbtn = document.querySelector(".btn_sign_up_send");
const form = document.querySelector(".form_signup");
const suc = document.querySelector('.suc');

btnShop.addEventListener('click', (event)=>{
    catalog.style.display = "block";
    textNews.style.display = "none";
    auth.style.display = "none";
    suc.style.display = "none";
})

btnNews.addEventListener('click', (event)=>{
    catalog.style.display = "none";
    textNews.style.display = "block";
    auth.style.display = "none";
    suc.style.display = "none";
})

btnSignUp.addEventListener('click', (event)=>{
    catalog.style.display = "none";
    textNews.style.display = "none";
    auth.style.display = "block";
    suc.style.display = "none";
})

formbtn.addEventListener('click', (event)=>{
    suc.style.display = "block";
    event.preventDefault();

    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.onload = function() {
        document.querySelector(".sucText").innerHTML = this.responseText;
      }
    xhr.open("GET", '../index.html')
    xhr.open("post", '../php/save.php');
    xhr.send(formData)
})
