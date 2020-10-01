console.log('helelelel')
if(document.querySelectorAll('.percent')) {
    document.querySelectorAll('.percent').forEach(element => {
        const vote = 107 - (107 * (parseFloat(element.querySelector('.vote').innerHTML) * 100 / 10)) / 100;
        element.querySelector('svg circle:nth-child(2)').style.strokeDashoffset = vote;
    })
}

// document.querySelector('#page').addEventListener('change', element => {
//     const val = element.target.value
//     document.querySelector('#text').value = val;
//     console.log(element.target.value)
// })

// console.log(document.querySelector('#page'))