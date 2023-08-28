const IconFilter = document.querySelector(".filterIcon");
const filterComp = document.getElementById("filter");
const IconClose = document.querySelector(".closeIcon");
const filterVisible = localStorage.getItem("filterVisible");
if(filterVisible=="visible"){
    filterComp.style.display = "block";
    IconFilter.style.display ="none";
}
else {
    filterComp.style.display = "none";
    IconFilter.style.display ="block";
}
IconFilter.onclick = ()=>{
     filterComp.style.display = "block";
    IconFilter.style.display ="none";
    localStorage.setItem('filterVisible',"visible")
}
IconClose.onclick =()=>{
    filterComp.style.display = "none";
    IconFilter.style.display ="block";
    localStorage.setItem('filterVisible',"invisible")
}

