const a = email_redact_profil.innerText;
const b = name_redact_profil.innerText;
const c = surname_redact_profil.innerText;
const d = otchestvo_redact_profil.innerText;
function replace() {
  if (redact_profil.innerText == 'Редактировать') {
    console.log(email_redact_profil.innerText);
    email_redact_profil.innerHTML = '<input value="'+ a +'" name="input_email_redact" class="input_redact" /><input placeholder="Пароль" name="input_pass_redact" class="input_redact" />';
    name_redact_profil.innerHTML = '<input value="'+ b +'" name="input_name_redact" class="input_redact" />';
    surname_redact_profil.innerHTML = '<input name="input_surname_redact" class="input_redact" value="'+ c +'" />';
    otchestvo_redact_profil.innerHTML = '<input name="input_otchestvo_redact" class="input_redact" value="'+ d +'" />';
    div_redact_profil.innerHTML = '<button id="redact_profil" onclick="replace();" class="redact-button">Отменить</button><br><button name="submit_redact_profil" type="submit" class="redact-button">Сохранить</button>'
  } else {
    email_redact_profil.innerHTML = a;
    name_redact_profil.innerHTML = b;
    surname_redact_profil.innerHTML = c;
    otchestvo_redact_profil.innerHTML = d;
    div_redact_profil.innerHTML = '<button id="redact_profil" onclick="replace();" class="redact-button">Редактировать</button>'
  }
}
