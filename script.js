// ------------ Popup CarsMenu ------------ //

const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const openModalButtons2 = document.querySelectorAll('[data-modal-target2]')
const closeModalButtons2 = document.querySelectorAll('[data-close-button2]')
const openModalButtons3 = document.querySelectorAll('[data-modal-target3]')
const closeModalButtons3 = document.querySelectorAll('[data-close-button3]')
//const overlay = document.getElementById("overlay")

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
      const modal = document.querySelector(button.dataset.modalTarget)
      openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
      closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
      const modal = button.closest('.modal')
      closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) {return }
  modal.classList.add('active')
  overlay.classList.add('active')

}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
  
}


/*---- Below is 2nd Modal (For Index) ----*/

openModalButtons2.forEach(imgElement => {
  imgElement.addEventListener('click', () => {
    const modal = document.querySelector(imgElement.dataset.modalTarget2)
    var carImg = document.getElementById("carimg").src;
    
    openModal2(modal, carImg)
  })
})


closeModalButtons2.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal2(modal)
  })
})

function openModal2(modal, carImg) {

  if (modal == null) return;

  console.log(carImg)
  const imgElement = modal.querySelector("img"); // Find the <img> element inside the modal
  imgElement.src = carImg; // Set the src attribute of the <img> element
  carImg.textContent = carImg;
  modal.classList.add('active');
  overlay.classList.add('active');
}

function closeModal2(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}


closeModalButtons3.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal3')
    closeModal2(modal)
  })
})

function openModal3(modal) {

  if (modal == null) return;

  modal.classList.add('active');
  overlay.classList.add('active');
}


function closeModal3(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}

// ------------ Popup Checkout ------------ //











// ------------ Cookie Zone ------------ //

function MyCookie(carModel) { 
  let availabilityCheck = carModel.split(':');
  if (availabilityCheck[1] == "True") {
    setItemCookie(availabilityCheck[0], availabilityCheck[1])
  } 
  else if (availabilityCheck[1] ="False") {
    const modal  = document.querySelector('.modal3');
    openModal3(modal)

  }
    
     // if it's not then doesn't create a new entry to the cookie
}

function setItemCookie(cname,cvalue) {
    document.cookie = cname + "=" + cvalue;
}

function getItemCookie(cName) {
    

    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie); //to be careful
    const cArr = cDecoded.split('; ');
    let itemQuantity;
    cArr.forEach(val => {
    if (val.indexOf(name) === 0) itemQuantity = val.substring(name.length);
    })
    // This section checks if the current Item has a quantity
    if (itemQuantity > 0) {
        // If so, add another
        itemQuantity = Number(itemQuantity) + 1;
    } else {
        // otherwise create the cookie starting at 1
        itemQuantity = 1;
    }
    return itemQuantity;
}