window.addEventListener('load', start);
const inputFields = document.querySelectorAll('input');
const inputText = document.querySelector('#menssageid');
let emptyField = true;

function start() {
  console.log('Script carregado com sucesso!');
}

function verifiedFields() {
  function valid() {
    let required;

    for (x = 0; x < 4; x++) {
      if (inputFields[x].value === '') {
        switch (x) {
          case 0:
            required = document.querySelector('.required_name');
            required.style.visibility = 'visible';
            break;
          case 1:
            required = document.querySelector('.required_lastname');
            required.style.visibility = 'visible';
            break;
          case 2:
            required = document.querySelector('.required_fone');
            required.style.visibility = 'visible';
            break;
          case 3:
            required = document.querySelector('.required_email');
            required.style.visibility = 'visible';
            break;
        }
        emptyField = true;
      } else {
        switch (x) {
          case 0:
            required = document.querySelector('.required_name');
            required.style.visibility = 'hidden';
            break;
          case 1:
            required = document.querySelector('.required_lastname');
            required.style.visibility = 'hidden';
            break;
          case 2:
            required = document.querySelector('.required_fone');
            required.style.visibility = 'hidden';
            break;
          case 3:
            required = document.querySelector('.required_email');
            required.style.visibility = 'hidden';
            break;
        }
        emptyField = false;
      }
    }

    if (inputText.value === '') {
      required = document.querySelector('.required_menssage');
      required.style.visibility = 'visible';
      emptyField = true;
    } else {
      required = document.querySelector('.required_menssage');
      required.style.visibility = 'hidden';
      emptyField = false;
    }

    return emptyField;
  }

  let result = valid();
  console.log(result);

  if (result === true) {
    alert('Preencha todos os campos obrigatórios!');
  } else {
    send();
  }
}

function send() {
  const name = inputFields[0].value;
  let menssage_complete = `*Oi Fernando!*%0D%0DEu me chamo *${inputFields[0].value} ${inputFields[1].value}!*%0D%0DQueria te dizer: _*${inputText.value}*_.%0D%0DPeço que entre em contato comigo no _*telefone: ${inputFields[2].value}, ou no email: ${inputFields[3].value}*_ .%0D%0DDesde já agradeço!`;

  window.location.assign(
    `https://api.whatsapp.com/send?phone=5538998413862&text=${menssage_complete}`
  );
}
