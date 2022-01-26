function validatePassword(password) {
    const validationRegex = /^(?!.* )(?=.*[a-z])(?=.*[A-Z])(?=.*[?!@#$&|~°+*/%=])(?=.*[0-9]).{8}/;
    return validationRegex.test(password);
}
function validatePseudo(pseudo) {
    const validationRegex = /^[a-zA-Z]{4,10}[0-9]{0,3}$/;
    return validationRegex.test(pseudo);
}

function validateInfo(pseudo, password, password2 = null) {
    const failedConstraints = [];

    if (!validatePseudo(pseudo)) failedConstraints.push("pseudo");
    if (!validatePassword(password)) failedConstraints.push("password");
    if (password2 !== null && password !== password2) {
        failedConstraints.push("Wrong confirmation password");
        alert("Et non ! Tu ne sais pas écrire deux fois un mdp, try again !"); 
    }

    return failedConstraints;
}
