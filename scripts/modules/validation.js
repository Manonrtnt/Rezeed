function validatePassword(password) {
    const validationRegex = /^(?!.* )(?=.*[a-z])(?=.*[A-Z])(?=.*[?!@#$&|~°+*/%=])(?=.*[0-9]).{8}/;
    return validationRegex.test(password);
}
function validatePseudo(pseudo) {
    const validationRegex = /^[a-zA-Z]{4,10}[0-9]{0,3}$/;
    return validationRegex.test(pseudo);
}

function conformPassword() {
    const pwd1 = document.querySelector(`form[name=register_form] input[name=pw_user]`).value;
    const pwd2 = document.querySelector(`form[name=register_form] input[name=pwd2_user]`).value;

    console.log("pwd1 === pwd2 : ", pwd1 === pwd2)
    if (pwd1 === pwd2) {
        return true;
    } else {
        alert("Et non ! Tu ne sais pas écrire deux fois un mdp, try again !")
        return false;
    }
}

function validateInfo(type) {
    const pseudo = document.querySelector(`form[name=${type}] input[name=login_user]`).value;
    const password = document.querySelector(`form[name=${type}] input[name=pw_user]`).value;
    const failedConstraints = [];

    if (!validatePseudo(pseudo)) failedConstraints.push("pseudo");
    if (!validatePassword(password)) failedConstraints.push("password");

    if (type === "register_form") {
        if (!conformPassword()) {
            failedConstraints.push("Mots de passe qui ne correspondent pas");
            return failedConstraints;
        }
    }

    return failedConstraints;
}
