const form = document.querySelector('form'),
statusTxt = form.querySelector('.button-area');

form.onsubmit = (e)=> {
    e.preventDefault();

    let xhr = new XMLHttpRequest();
    xhr.open('POST','message.php', true);
    xhr.onload = ()=> {
        if(xhr.readyState ==4  && xhr.status == 200){
            let response = xhr.response;
            
            statusTxt.innerText = response;
        }
    }
let formData = new FormData(form);
xhr.send(formData);

    xhr.send();
}