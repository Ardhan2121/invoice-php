var input1 = document.getElementById("input1")
var input2 = document.getElementById("input2")
var con = document.getElementById("basic_checkbox_1")
con.addEventListener("click",()=>{
    if(con.checked){
        input1.type="text"
        input2.type="text"
    }else{
        input1.type="password"
        input2.type="password"
    }
})