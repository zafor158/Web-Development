document.getElementById("getLocationButton").addEventListener("click",() =>{
	if("geolocation" in navigator){
	navigator.geolocation.getCurrentPosition(function(position) {
		const latitude=position.coords.latitude;
		const longitude=position.coords.longitude;

		sendLocationToServer(latitude,longitude);

	});

	}else{
		alert("geolocation is not available in this browser");
	}
});
function sendLocationToServer(latitude,longitude){
	const xhr=new XMLHttpRequest();
	xhr.open("POST","save_location.php",true);
	xhr.setRequestHeader("Content-Type","application/x-www-urlencoded");
	xhr.onreadystatechange=function(){
		if(xhr.readyState===XMLHttpRequest.DONE&&xhr.status===200){

		}
	};
	const data='latitude=${latitude}&longitude=${longitude}';
	xhr.send(data);

}