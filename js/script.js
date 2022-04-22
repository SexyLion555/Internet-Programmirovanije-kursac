const buybtn = document.querySelector(".middle");
const btnShop = document.querySelector(".btn_shop");
const btnNews = document.querySelector('.btn_news');
const catalog = document.querySelector(".catalog")
const textNews = document.querySelector(".catalog_news")

btnShop.addEventListener('click', (event)=>{
    catalog.style.display = "block";
    textNews.style.display = "none";
})

btnNews.addEventListener('click', (event)=>{
    catalog.style.display = "none";
    textNews.style.display = "block";
})
