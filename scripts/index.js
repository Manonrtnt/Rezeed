// const formattedFormData = new FormData(form);

// check formModule.js
function main(){
    connection();
    register();
}

async function userQuery(data) {
    const response = await fetch
        (
            `./index.php?`, {
            method: 'POST',
            body: data
        });
    return response;
}
