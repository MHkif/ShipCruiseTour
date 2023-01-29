var modal = document.getElementById("reservation-modal");



function showModal(event){
    var button = event.target;
    var id = button.parentElement.parentElement.id;
    var descT = button.parentElement.parentElement.parentElement.firstElementChild.innerText;
    var periodT = button.parentElement.parentElement.parentElement.childNodes[5].value;
    var deadlin = button.parentElement.parentElement.parentElement.childNodes[7].value;


    console.log(id)
    console.log(descT)
    console.log(periodT)
    console.log(deadlin)
    // console.log("ggrfg");

    document.querySelector(".tasknameU").value = descT;
    document.querySelector(".deadlinU").value = deadlin;
    document.querySelector(".periodU").value = periodT;
    document.querySelector(".idTasksU").value = id;



    modal.classList.remove("hidden")

}