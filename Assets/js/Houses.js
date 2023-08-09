let IconFilter = document.querySelector(".filterIcon");
let filterComp = document.getElementById("filter");
let IconClose = document.querySelector(".closeIcon");
let filterVisible = localStorage.getItem("filterVisible");
if(filterVisible=="visible"){
    filterComp.style.display = "block";
    IconFilter.style.display ="none";
}else{
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