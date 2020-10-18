let itemIndex = 0;
const mItem = document.querySelectorAll('.data')

console.log('helelelel')
if(document.querySelectorAll('.percent')) {
  document.querySelectorAll('.percent').forEach(element => {
    const vote = 107 - (107 * (parseFloat(element.querySelector('.vote').innerHTML) * 100 / 10)) / 100;
    element.querySelector('svg circle:nth-child(2)').style.strokeDashoffset = vote;
  })
}

mItem.forEach((item,index) => {
  const a = item.querySelector('.backdrop').getAttribute('data-img')
  console.log(a)
  item.querySelector('img').addEventListener('click', ()=> {
    itemIndex = index
    setBox()
    togglelightbox()
    console.log('event listener')
  })
})

const setBox = () => {
  const backdrop = mItem[itemIndex].querySelector('.backdrop').getAttribute('data-img'),
        img = mItem[itemIndex].querySelector('img').getAttribute('src'),
        title = mItem[itemIndex].querySelector('h4').innerHTML,
        date = mItem[itemIndex].querySelector('date').innerHTML,
        voteVal = mItem[itemIndex].querySelector('.percent .vote').innerHTML,
        overview = mItem[itemIndex].querySelector('.overview').getAttribute('data-ovw')

  document.querySelector('.lightback').style.backgroundImage = `url(${backdrop})`
  document.querySelector('.lightImg img').src = img;
  document.querySelector('.lightboxCaption h2').innerHTML = title
  document.querySelector('.lightboxCaption date').innerHTML = 'Release Date : ' + date;
  document.querySelector('.lightboxCaption overview').innerHTML = overview
  document.querySelector('.lightboxCaption .vote').innerHTML = voteVal

  if(document.querySelectorAll('.lightPerc')) {
    document.querySelectorAll('.lightPerc').forEach(element => {
      const vote = 255 - (255 * (parseFloat(voteVal) * 100 / 10)) / 100;
      element.querySelector('.lightPerc svg circle:nth-child(2)').style.strokeDashoffset = vote;
    })
  }
}

function togglelightbox() {
    document.querySelector('.lightbox').classList.toggle('show');
    console.log('toggle')
}

window.togglelightbox = togglelightbox