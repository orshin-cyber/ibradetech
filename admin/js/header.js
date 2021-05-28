
        const username = document.getElementById('username');
        const password = document.getElementById('pass');
        const login = document.getElementById('login');

        login.addEventListener('click', () => {
          if(username.value == ""){
            username.setAttribute('required', true);
            username.style.border = '1px solid red';

          }else if(password.value == ""){          	
            password.setAttribute('required', true);
            password.style.border = '1px solid red';
            username.style.border = '1px solid green';
          }
          else{
            username.style.border = '1px solid green';
            password.style.border = '1px solid green';
          }
        });

// document.getElementById('customerMail').addEventListener('submit', getMail);

// function getMail(e){
//     e.preventDefault();
//     var name = document.getElementById('name').value;
//     var title = document.getElementById('title').value;
//     var mail = document.getElementById('mail').value;
//     var body = document.getElementById('body').value;

//     var params = "name"+name + "&title"+title + "&mail"+mail + "&body"+body;

//     var xhr = XMLHttpRequest();
//     xhr.open('POOST', 'script/message.php', true);
//     xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//     xhr.onload = function (){
//         console.log(this.responseText);
//     }
//     xhr.send(params);
// }