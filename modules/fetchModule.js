//== INFO: Client-side fetch on any API
const url = "APIURL";

async function fetchApi() {
   let response;
   let data;

   try {
      response = await fetch(url);
      if (response.ok) {      
         try {
            data = await response.json();
            if (Object.keys(data)[0] === "errors") {  //== If response.json() returns an array of errors
               throw new Error("Parsing to JSON returned errors: ");
            }
            return data;
         } catch (e){
            console.error(`${e}\nErrors :`, data.errors);
            alert(data.errors[0].description);
            return {};
         }
      }
      else {
         throw new Error("Cannot communicate with the music service !") //== Case when code is not 20X
      }
   } catch (e) {
      alert(e);
      console.error(`Music API returned an error : code ${response.status}`);
      return {};
   } 
}
