/*Login Page JS*/
var trol = ["admin", "stat", "worker"];
var tmp = ["admin", "cal", "pain"];

function indi(t,n,ch){
var ix=-1;
var i=-1;
	do{
		i=i+1; 
			if(t[i]==ch){
				ix=i;
			}

	} while(!((ix!=-1) || (i==n)));
	return (ix);

}

function verif(){
	var rolep=document.getElementById("role").value; 
	var mdpp=document.getElementById("pwd").value; 

	var ix=indi(trol,2,rolep);
		if (ix==-1){
			alert("You have entered a false role try again");
		}
		else{
			if (mdpp==tmp[ix]){
				localStorage.setItem("acc", mdpp);
				window.location.assign("index.html");

			}
			else{
				alert("Your password is false try again");
			}
		}
}