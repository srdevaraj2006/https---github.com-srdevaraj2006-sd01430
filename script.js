function checkcon() {
            const emailval = document.getElementById('loginemail').value
            const passValue = document.getElementById('loginpassword').value
            var email = "srdevaraj2006@gmail.com";
            var pass = "SGrajseaker@1234"
            if(emailval == email && passValue==pass) {
               window.open("siteindex11.html")
               window.close("login11.html")
            }
            else{
                alert("Invalid details")
            }
}`  `
function gotosignup(){
    window.open("index.html")
    window.close("login11.html")
}
function gotologin(){
    window.open("login11.html")
    window.close("ind.html")
}
function logout(){
    window.open("login11.html")
    window.close("profileinfo.html")
}
function gotoprofileinfo(){
    window.open("profileinfo.html")
    window.close("siteindex11.html")
}
function gotoaddstudent(){
    window.open("addstudent.html")
}
function gotoremstudent(){
    window.open("remstudent.html")
}
function profileinfotosite(){
    window.open("siteindex11.html")
    window.close("profileinfo.html")
}