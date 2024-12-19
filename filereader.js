let inputfile = document.getElementById("inputfile");
let outfile = document.getElementById("outputfile");
inputfile.addEventListener('change',()=>{
    let readfile = new FileReader();
    readfile.readAsText(inputfile.files[0]);
    readfile.onload = function(){
        outfile.innerHTML = readfile.result;
    };
});