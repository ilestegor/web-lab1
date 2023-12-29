let form = document.getElementById("input-form");
form.addEventListener("submit", getData);
const xhr = new XMLHttpRequest();
function getData(event){
    event.preventDefault();
    let xValue = getInput()[xIndex];
    let yValue = getInput()[yIndex].value.replace(",", ".");
    let rValue = getInput()[rIndex].value;

    if (validateInput(event)){
        xhr.open('GET', 'php/mainValidator.php?' + 'x=' + xValue.value + '&y=' + yValue + '&r=' + rValue);
        xhr.responseType = 'text';
        xhr.send();
    }

    xhr.onload = () => {
        if (xhr.readyState === 4 && xhr.status === 200){
            addToTable(xhr.response);
        }
    }
}







