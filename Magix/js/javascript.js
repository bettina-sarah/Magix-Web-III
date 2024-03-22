window.onload = () => {

   //si bouton existe seulement:
   if(document.querySelector("#btn-deck")){
    document.querySelector("#btn-deck").onclick = () => {
        toggleDeck();
    }
   }
}

//styles CHAT
const applyStyles = iframe => {
	let styles = {
		fontColor : "#333",
		backgroundColor : "rgba(87, 41, 5, 0.2)",
		fontGoogleName : "Sofia",
		fontSize : "20px",
		hideIcons : false,
		inputBackgroundColor : "red",
		inputFontColor : "blue",
		height : "700px",
		padding: "5px",
		memberListFontColor : "#ff00dd",
		borderColor : "blue",
		memberListBackgroundColor : "white",
		hideScrollBar: true, // pour cacher le scroll bar
	}
	
	setTimeout(() => {
		iframe.contentWindow.postMessage(JSON.stringify(styles), "*");	
}, 100);
}

const toggleDeck = () => {
    let deck = document.querySelector("#iframe-deck");
    if(deck.style.display == "none"){
        deck.style.display = "block";
    }
    else{
        deck.style.display = "none";
    }
    

     
}
