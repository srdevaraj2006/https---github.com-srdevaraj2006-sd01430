function checkcon() {
            const emailval = document.getElementById('loginemail').value
            const passValue = document.getElementById('loginpassword').value
            var email = "srdevaraj2006@gmail.com";
            var pass = "123"
            if(emailval == email && passValue==pass) {
               window.open("siteindex.html")
               window.close("login.html")
            }
            else{
                alert("Invalid details")
            }
}`  `
function gotosignup(){
    window.open("index.html")
    window.close("login.html")
}
function gotologin(){
    window.open("login.html")
    window.close("index.html")
}
function logout(){
    window.open("login.html")
    window.close("profileinfo.html")
}
function gotoprofileinfo(){
    window.open("profileinfo.html")
    window.close("siteindex.html")
}
function gotoaddstudent(){
    window.open("addstudent.html")
    window.close()
}
function gotoremstudent(){
    window.open("remstudent.html")
    window.close()
}
function profileinfotosite(){
    window.open("siteindex.html")
    window.close("profileinfo.html")
}