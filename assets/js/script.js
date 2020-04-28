// =======travellers script =========
function traveller(){

	console.log("travellerUser function activated")

	let proceed = document.querySelector("#proceed")
	let expo =document.getElementsByName('check')



	function travelYesOrNo() {
		document.querySelector("#traveller").style.display = "block";
		// proceed.style.visibility = "visible"
		// proceed.style.display = "inline-block"
		
		// setting default values to local storage
		localStorage.setItem("travhis", 'no');
		localStorage.setItem('exposenone', 'yes')
		localStorage.setItem('symptoms', 'notApplicable')
		localStorage.setItem('status', 'npuipum')
		console.log(localStorage.travhis)

		// =========== this code block disable the proceed button ========
		// document.querySelector('#travyes').addEventListener('click', function(){
		// 	localStorage.setItem("travhis", 'yes');
		// 	localStorage.setItem('exposenone', 'notApplicable')
		// 	localStorage.setItem('symptoms', 'no')
		// 	console.log("forwarded by travelYesOrNo function for symptoms checing")
		// 	checkSymptoms()
		// 	document.querySelector("#traveller").style.display = "none";

		// })
		// document.querySelector('#travno').addEventListener('click', function(){
		// 	localStorage.setItem("travhis", 'no');
		// 	console.log("forwarded by travelYesOrNo function for expusure checking")
		// 	checkExposure()
		// 	document.querySelector("#traveller").style.display = "none";

		// })
		// ============================================================================

		// set value = yes to local storage
		document.querySelector('#travyes').addEventListener('click', function(){
				localStorage.setItem("travhis", 'yes');
				localStorage.setItem('exposenone', 'notApplicable')
				localStorage.setItem('symptoms', 'no')
				localStorage.setItem('status', 'pum')
				console.log(localStorage.travhis)
				console.log(localStorage.symptoms)
				console.log(localStorage.exposenone)
				console.log("Yes was chosen")
			})

		// set value = no to local storage
		document.querySelector('#travno').addEventListener('click', function(){
				localStorage.setItem("travhis", 'no');
				localStorage.setItem('exposenone', 'yes')
				localStorage.setItem('symptoms', 'notApplicable')
				localStorage.setItem('status', 'npuipum')
				console.log(localStorage.travhis)
				console.log(localStorage.exposenone)
				console.log("no was chosen")
			})

		// set default values to local storage before next question and go next
		proceed.addEventListener('click', function(){
			if(localStorage.travhis === 'yes') {
				checkSymptoms()
				console.log("Yes was chosen")
				console.log("forwarded by travelYesOrNo function for symptoms checking")
			}
			else {
				checkExposure()
				console.log("No was chosen")
				console.log("forwarded by travelYesOrNo function for expusure checking")
			}
			
			document.querySelector("#traveller").style.display = "none";
		})
	}
	// end of function travelYesOrNo
	
	function checkExposure(){
		document.querySelector("#exposure").style.display = "block";
		console.log("checkExposure function activated")
		
		// enable proceed button
		// proceed.style.visibility = "visible";
		// proceed.style.display = "inline-block";
		
		// set default value of exposenone
		// localStorage.setItem(expo[expo.length-1].id, 'yes')
		console.log("localStorage exposenone value is ",localStorage.exposenone)

		// check each element
		expo.forEach( (element) =>{
			console.log(element.type, element.name, element.id, element.checked)
			console.log(expo.length)
			// change element values every click
			element.addEventListener('click',() => {
				if(element.checked === true) {

					// check if exposenone change its value and other elements will reset to default values 
					if(element.id === "exposenone"){
						for(let index = 0; index < expo.length-1; index++){
							localStorage.setItem(expo[index].id, 'no');
							expo[index].checked = false
						}
						localStorage.setItem("exposenone", 'yes');
						localStorage.setItem('symptoms', 'notApplicable')
						localStorage.setItem('status', 'npuipum')
					}

					// other elements will change its value and exposenone value = false
					else {
					expo[expo.length-1].checked = false
					localStorage.setItem('exposenone', 'no');
					localStorage.setItem('symptoms', 'no')
					localStorage.setItem('status', 'pum')				
					localStorage.setItem(element.id, 'yes');

					}
				}
				else{
					localStorage.setItem(element.id, 'no');
				}
				console.log("this is from localStorage ",localStorage.getItem(element.id));
			})

		});
		// end of expo.forEach

		document.querySelector("#proceed2").addEventListener('click', function(){
			// document.querySelector("#exposure").style.display = "none";
			
			// proceed.style.visibility = "hidden"
			// proceed.style.display = "none"
			
			
			if (localStorage.exposenone === "yes"){
				window.location.href= "../views/summary.php"
				console.log("for summary Remarks is npuipum")
			} 
			else{
				checkSymptoms()
				console.log("forwarded by checkExposure function")
			}
		})
	}
	// end of function checkExposure

	function checkSymptoms() {
		console.log("checkSymptoms function activated")
		document.querySelector("#exposure").style.display = "none";
		document.querySelector("#symptoms").style.display = "block";
		
		// proceed.style.visibility = "hidden"
		// proceed.style.display = "none"
		
		document.querySelector("#sympyes").addEventListener('click', function(){
			localStorage.setItem('symptoms', 'yes')
			localStorage.setItem('status', 'pui')
			console.log("for summary Remarks: pui") 
			console.log(localStorage.symptoms) 
			console.log(localStorage.status) 
			// window.location.href= "./summary.php"
		})
		
		document.querySelector("#sympno").addEventListener('click', function(){
			localStorage.setItem('symptoms', 'no')
			localStorage.setItem('status', 'pum')
			console.log("for summary Remark: pum") 
			console.log(localStorage.symptoms) 
			console.log(localStorage.status) 
			// window.location.href= "./summary.php"
		})
		
		document.querySelector("#proceed3").addEventListener('click', function(){
			window.location.href= "../views/summary.php"
			console.log(localStorage.travhis) 
			console.log(localStorage.exposenone) 
			console.log(localStorage.symptoms) 
			console.log(localStorage.status) 
		})
	}
	// end of function checkSymptoms

	travelYesOrNo()
}

traveller()

// =============end travellers script ======