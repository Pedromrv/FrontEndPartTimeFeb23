let addTitle = document.querySelectorAll('*.important');
addTitle.forEach(element => {
    element.setAttribute('title', 'This is an important item');    
});

let img = document.querySelectorAll('img');

img.forEach(element => {
 if(!element.classList.contains("important")){
    element.style.display = 'none';
}
});

let p = document.querySelectorAll('p');

random = () => {
    let r = Math.floor(Math.random() * 256);
    let g = Math.floor(Math.random() * 256);
    let b = Math.floor(Math.random() * 256);
    return `rgb(${r}, ${g}, ${b})`;
  };

p.forEach(element => {
    console.log(`${element.innerText} ${element.className}`);
    if(element.classList == ""){
        element.style.color = random();
    }
});




