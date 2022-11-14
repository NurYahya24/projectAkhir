window.onload =() =>{
	let circularProgress = document.querySelector(".circular-progress"),
    progressValue = document.querySelector(".progress-value");

	let progressStartValue = 0,    
    progressEndValue = parseInt(document.getElementById('presentase').value, 10),    
    speed = 3;
    if(progressStartValue != progressEndValue){
    
		let progress = setInterval(() => {
    		progressStartValue++;

    		progressValue.textContent = `${progressStartValue}%`
    		circularProgress.style.background = `conic-gradient(#7d2ae8 ${progressStartValue * 3.6}deg, #ededed 0deg)`
    		if(progressStartValue == progressEndValue){
        		clearInterval(progress);
    		}
    	    
		}, speed);
	}
	var menuList = document.getElementById("menuList");
	menuList.style.maxHeight = "0px";
	const btn = document.querySelector("button");
	const post = document.querySelector(".post");	
	const widget = document.querySelector(".star-widget");
	const editBtn = document.querySelector(".edit");
	// btn.onclick = ()=>{
	// 	widget.style.display = "none";
	// 	post.style.display = "block";
		editBtn.onclick = ()=>{
			widget.style.display = "block";
			post.style.display = "none";
		}
		return false;
	
}



function togglemenu(){
	if(menuList.style.maxHeight == "0px"){
		menuList.style.maxHeight = "130px";
	}
	else{
		menuList.style.maxHeight = "0px";
	}
}
