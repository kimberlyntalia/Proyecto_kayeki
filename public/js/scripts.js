/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

/*
/* interaccion del select dr organiar por mayor y menos*/
const customSelect = document.getElementById("customSort");
const selected = customSelect.querySelector(".select-selected");
const items = customSelect.querySelector(".select-items");

selected.addEventListener("click", () => {
  items.style.display = items.style.display === "block" ? "none" : "block";
});

items.querySelectorAll("div").forEach(option => {
  option.addEventListener("click", () => {
    selected.innerHTML = option.textContent + ' <span class="select-arrow">▼</span>';
    items.style.display = "none";
    console.log("Seleccionado:", option.dataset.value);
  });
});

document.addEventListener("click", (e) => {
  if (!customSelect.contains(e.target)) items.style.display = "none";
});