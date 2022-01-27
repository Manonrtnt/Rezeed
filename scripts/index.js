// check formModule.js

(function main(){
    connectionForm();
    registerForm();

    window.addEventListener('locationchange', function(){
        console.log('location changed!');
    })
})();
