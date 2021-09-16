
let calculate = () => {
    let fromDaySelect = document.getElementById('from-day')
    let fromMonthSelect = document.getElementById('from-month')
    let fromYearSelect = document.getElementById('from-year')
    
    let toDaySelect = document.getElementById('to-day')
    let toMonthSelect = document.getElementById('to-month')
    let toYearSelect = document.getElementById('to-year')
    
    
    let fromDay = fromDaySelect.value
    let fromMonth = fromMonthSelect.value
    let fromYear = fromYearSelect.value
    let toDay = toDaySelect.value
    let toMonth = toMonthSelect.value
    let toYear = toYearSelect.value

    let dateTo = new Date(`${toMonth}/${toDay}/${toYear}`)
    let dateFrom = new Date(`${fromMonth}/${fromDay}/${fromYear}`)

    let secondsDiff = dateTo.getTime() - dateFrom.getTime()
    let daysDiff = secondsDiff / ( 10000 * 360 * 24 )

    return daysDiff
}

let calculateButton = document.getElementById('calculate-button')
let daysDisplay = document.getElementById('days-diff')

calculateButton.addEventListener('click', () => {
    var currentdate = new Date(); 
var datetime =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
    var addOn = document.querySelector('input[name="service"]:checked').value*1;
    let name = sessionStorage.getItem('villaName')
    let price = sessionStorage.getItem('pricePerDay')
 
    let fullPrice = price*calculate() + addOn;

    document.getElementById("nameSpan").innerText = "Villa Name: "  + name;

    document.getElementById("priceSpan").innerText = "Price: " + fullPrice + "$";
    document.getElementById("timeSpan").innerText = "Time of reservation: "  + datetime;
})
