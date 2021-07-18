const height = document.querySelector("#height");
const weight = document.querySelector("#weight");
const calculate = document.querySelector("#calculate");
const yourBMI = document.querySelector("#yourBMI");
const under = document.querySelector("#under");
const normal = document.querySelector("#normal");
const over = document.querySelector("#over");
const obesity = document.querySelector("#obesity");

calculate.addEventListener("click", ()=>{

    // BMI = Body Mass Index
    // m = Mass Means Weight (KG)
    // h = Height (CM)
    // Formula = B = m/h^2
    if(height.value != "" && weight.value != ""){
        let bmiValue = weight.value / (height.value* height.value) * 10000;
        yourBMI.innerHTML = 'Your BMI Is :' + bmiValue.toFixed(2);
    

            
        if (bmiValue< 18.5){
            document.getElementById("under").style.color = "skyblue";
            document.getElementById("under").style.marginBottom = "40px";
            document.getElementById("under").style.fontSize = "20px";
            document.getElementById("yourBMI").style.color = "skyblue";
            document.getElementById("yourBMI").style.fontSize = "20px";
        }

        if (bmiValue >= 18.5 && bmiValue <= 24.9){
            document.getElementById("normal").style.color = "green";
            document.getElementById("normal").style.marginBottom = "40px";
            document.getElementById("normal").style.fontSize = "20px";
            document.getElementById("yourBMI").style.color = "green";
            document.getElementById("yourBMI").style.fontSize = "20px";
        }

        if (bmiValue > 24.9 && bmiValue <= 29.9){
            document.getElementById("over").style.color = "orange";
            document.getElementById("over").style.marginBottom = "40px";
            document.getElementById("over").style.fontSize = "20px";
            document.getElementById("yourBMI").style.color = "orange";
            document.getElementById("yourBMI").style.fontSize = "20px";
        }

        if (bmiValue >=30){
            document.getElementById("obesity").style.color = "red";
            document.getElementById("obesity").style.marginBottom = "40px";
            document.getElementById("obesity").style.fontSize = "20px";
            document.getElementById("yourBMI").style.color = "red";
            document.getElementById("yourBMI").style.fontSize = "20px";
        }

    }
    else{
        yourBMI.innerHTML = "Please Enter Correct Value"
    }
    alert("Hey There! \n Make Sure You Visit Our Health Page!")

});

function ShowImage() {        
    document.getElementById("picture").style.visibility="visible";
    document.getElementById("picture").style.borderRadius = "40px";
    document.getElementById("picture").style.marginTop = "50px";
    document.getElementById("picture").style.boxShadow ="2px 2px 10px 5px gray";



}