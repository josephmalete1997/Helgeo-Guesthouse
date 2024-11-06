import units from './gallery.js';

const subNav = document.querySelector('.sub-nav');
const selfCateringUnits = units.filter(item => item.catering === "Self-Catering");
const standardUnits = units.filter(item => item.catering === "Standard");

subNav.innerHTML = `
<div class="fr">
  <div class="flx-1">
    <h2 style="font-weight:100;">Self-Catering Units</h2>
    <div>
      ${selfCateringUnits.map(item => `
        <div class="unit fr" id="${item.name}">
        <img src="${item.photos[0]}" style="border-radius:5px;margin: 5px;margin-right: 15px;margin-left: 0px;" width="20%" alt="unit image"/>
            <div>
                <h2 style="font-weight:100;">${item.name}</h2>
                <p><i class="fa-solid fa-tag"></i> R${item.price}</p>
                <p style="
                font-size:12px;
                font-family:'montserrat-light';
                ">Features : ${item.features.slice(0,3).map(item =>
                    `<span style="
                    padding:2px 5px;
                    ">${item}</span>`)}</p>
            </div>
        </div>
      `).join('')}
    </div>
  </div>
  <div class="flx-1"> 
  <h2 style="font-weight:100;">Standard Units</h2>
  <div>
    ${standardUnits.map(item => `
      <div class="unit fr" id="${item.name}">
      <img src="${item.photos[0]}" style="border-radius:5px;margin: 5px;margin-right: 15px;margin-left: 0px;" width="20%" alt="unit image"/>
      <div>
      <h2 style="font-weight:100;">${item.name}</h2>
      <p><i class="fa-solid fa-tag"></i> ${item.price}</p>
      <p style="
      font-size:12px;
      ">Features : ${item.features.slice(0,3).map(item =>
          `<span style="
          padding:2px 5px;
          ">${item}</span>`)}</p>
  </div>
      </div>
    `).join('')}
  </div></div>
</div>
`;

const unitsList = document.querySelectorAll('.unit');

unitsList[0].addEventListener('click',()=>{
    saveUnit(units[0]);
})

unitsList[1].addEventListener('click',()=>{
    saveUnit(units[2]);
})

unitsList[2].addEventListener('click',()=>{
    saveUnit(units[3]);
})

unitsList[3].addEventListener('click',()=>{
    saveUnit(units[1]);
})

function saveUnit(unit){
    localStorage.setItem('title', unit.name);
    localStorage.setItem('accommodation', JSON.stringify(unit));
    window.location.href = './accommodation';
}

let ticking = false;

function updateSubNavPosition() {
    const header = document.querySelector('.header');
    const subNav = document.querySelector('.sub-nav');
    
    const navBottom = header.getBoundingClientRect().bottom;
    subNav.style.top = `${navBottom}px`;

}

document.querySelector(".sub-item").addEventListener('mouseover',()=>{
  updateSubNavPosition();
})

function onScroll() {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            updateSubNavPosition();
            ticking = false;
        });
        ticking = true;
    }
}

// Initial positioning
updateSubNavPosition();



// Listen for scroll events
window.addEventListener('scroll', onScroll);