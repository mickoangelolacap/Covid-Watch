// RESET Local Storage
const logout = () => {
	localStorage.clear()
}

document.querySelector('#reTest').addEventListener('click', () => {
	logout()
})
// END RESET


// let identifier = localStorage.getItem("nonTravSummary")

// if (identifier !== null) {
//   nonTravSummary();

// }
// else{
  travSummary();
// }



// traveller
function travSummary(){

  // traveller
  const travelHistory = "Travel in the past 14 days to countries with local transmission or areas with Enhanced Community Quarantine"
  const travellerExposure = ["Providing direct care for COVID-19 patient", 
    "Working together or staying in the same close environment of a COVID-19", 
    "Travelling together with COVID-19 patient in any kind of conveyance", 
    "Living in the same household as a COVID-19 patient within a 14-day period"
  ]
  const travellerSymptoms = "Is your body temparature 38 and above? OR Do you have any respiratory illness such as cold or cough?"
  const travellerStatus = ["pui", "npuipum", "pum"]
  
  // for title case
  // function fullName(name) {
  //   name = name.toLowerCase().split(' ');
  //   for (let i = 0; i < name.length; i++) {
  //     name[i] = name[i].charAt(0).toUpperCase() + name[i].slice(1); 
  //   }
  //   return name.join(' ');
  // }
  // name 
  // document.querySelector('#getName').innerHTML = fullName(localStorage.name)

  // status
  travellerStatus.forEach((element) =>{
    console.log('#'+element)
    document.querySelector(`#${element}`).style.display = "none"

    if (element === localStorage.status){
      document.querySelector(`#${element}`).style.display = "block"
      // document.querySelector(`#${element}`).style.visibility = "visible"
      console.log("querySelector matched", element)
    }
  })
 
// symptoms
if (localStorage.symptoms == "notApplicable") {
    console.log("symptoms localStorage value is ", localStorage.symptoms)
}
else{
  (localStorage.symptoms !== "no") ?
  document.querySelector('#symptoms1').innerHTML = `<td>"${travellerSymptoms}"</td><td>Yes</td>`
  :document.querySelector('#symptoms1').innerHTML = `<td>"${travellerSymptoms}"</td><td>No</td>`;
}

  // output summary
  (localStorage.travhis !== "no") ?
  document.querySelector('#exposure1').innerHTML = `<td>"${travelHistory}"</td><td>Yes</td>`
  :document.querySelector('#exposure1').innerHTML = `<td>"${travelHistory}"</td><td>No</td>`;


  if(localStorage.exposenone === "yes") {
    document.querySelector('#symptoms2').innerHTML =`<td>COVID-19 Exposure History</td><td>None</td>`
  }
  else {
    (localStorage.exposenone === "notApplicable")
    console.log("check exposure not Applicable")
  }
   
    localStorage.expose1 === "yes" ?
    document.querySelector('#exposure2').innerHTML = `<td>"${travellerExposure[0]}"</td><td>Yes</td>`
    :console.log("e1")
    // :document.querySelector('#exposure2').innerHTML = `<td>"${travellerExposure[0]}"</td><td>No</td>`;

    localStorage.expose2 === "yes" ?
    document.querySelector('#exposure3').innerHTML = `<td>"${travellerExposure[1]}"</td><td>Yes</td>`
    :console.log("e2")
    // (localStorage.expose2 !== "no") ?
    // :document.querySelector('#exposure3').innerHTML = `<td>"${travellerExposure[1]}"</td><td>No</td>`;

    localStorage.expose3 === "yes" ?
    document.querySelector('#exposure4').innerHTML = `<td>"${travellerExposure[2]}"</td><td>Yes</td>`
    :console.log("e3")
    // (localStorage.expose3 !== "no") ?
    // :document.querySelector('#exposure4').innerHTML = `<td>"${travellerExposure[2]}"</td><td>No</td>`;

    localStorage.expose4 === "yes" ?
    document.querySelector('#exposure5').innerHTML = `<td>"${travellerExposure[3]}"</td><td>Yes</td>`
    :console.log("e4")
    // (localStorage.expose4 !== "no") ?
    // :document.querySelector('#exposure5').innerHTML = `<td>"${travellerExposure[3]}"</td><td>No</td>`;


}



// end traveller



// non traveller
// function nonTravSummary(){

//   let name = localStorage.getItem('name')
//   document.querySelector('#getName').innerHTML = name;
//   //show pui or pum or notpuipum
//   let final = localStorage.getItem('final');
//   console.log(final);
//   if (final === 'pui') {
//     document.querySelector("#pui").innerHTML = `<h5>You are categorized as PUI (Person Under Investigation).</h5><p>Please seek medical assistance immediately.</p>`
//     document.querySelector("#pui").style.visibility = "visible";
//   }
//   else if (final === 'pum' ) {
//     document.querySelector("#pum").innerHTML = `<h5>You are categorized as PUM (Person Under Monitoring). Self-Isolate</h5><p>You should stay home and away from others. If you can, have a room and bathroom that’s just for you. This can be hard when you’re not feeling well, but it will protect those around you.</p>`
//     document.querySelector("#pum").style.visibility = "visible";
//   }
//   else{
//     document.querySelector("#npuipum").innerHTML= `<h5>You are neither PUI nor PUM. Stay healthy. Observe Social Distancing</h5><p>Help stop the spread. When outside the home, stay at least six feet away from other people, avoid groups, and only use public transit if necessary.</p>`;
//     document.querySelector("#npuipum").style.visibility = "visible";
//   }

//   // patientSymptomsResult
//   const patientRow = [
//     document.querySelector("#nonA"),
//     document.querySelector("#nonB"),
//     document.querySelector("#nonC"),
//     document.querySelector("#nonD"),
//     ];
//   let patients = localStorage.getItem('patientSymptoms');
//     if (patients !== null) {

//       patients = patients.split(',');
//       let x;
//       for (x = 0; x < patients.length; x++){
//         patientRow[x].innerHTML = `<td> ${patients[x]} </td><td>YES</td>`;
//       }
//     }

//   //notTravellerResult
//   let nTravYes = localStorage.getItem('nTravYes');
//   let nTravYesQ = localStorage.getItem('nTravYesQ')
//   if (nTravYes !==null && nTravYesQ !== null) {

//     document.querySelector("#nonE").innerHTML = `<td> ${nTravYesQ} </td><td>${nTravYes}</td>`;
//   }
    
//   //occurenceResult
//   let occyes = localStorage.getItem('occyes');
//   let occyesQ = localStorage.getItem('occyesQ')
//   if (occyes !== null && occyesQ !== null) {

//     document.querySelector("#nonF").innerHTML = `<td> ${occyesQ} </td><td>${occyes}</td>`;
//   }

//   //closeContactResult
//   const closeContactRow = [
//     document.querySelector("#nonG"),
//     document.querySelector("#nonH"),
//     document.querySelector("#nonI"),
//     document.querySelector("#nonJ"),
//     ];
//   let closeContact = localStorage.getItem('closeContact');
//   if (closeContact !== null) {
//     closeContact = closeContact.split(',');
//     let y;
//     for (y = 0; y < closeContact.length; y++){
//       closeContactRow[y].innerHTML = `<td> ${closeContact[y]} </td><td>YES</td>`;
//     }
//   }  
   


//   //respiratoryProblemResult
//   const respiratoryProblemRow = [
//     document.querySelector("#nonK"),
//     document.querySelector("#nonL"),
//     document.querySelector("#nonM"),
//     document.querySelector("#nonN"),
//     ];
//   let respiratoryProblem = localStorage.getItem('respiratoryProblem');
//   if (respiratoryProblem !== null) {
//       respiratoryProblem = respiratoryProblem.split(',');
//       let z;
//       for (z = 0; z < respiratoryProblem.length; z++){
//         respiratoryProblemRow[z].innerHTML = `<td> ${respiratoryProblem[z]} </td><td>YES</td>`;
//       }

//   }

// }



