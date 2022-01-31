require('./bootstrap');
import Vue from 'vue';
import { BootstrapVue } from 'bootstrap-vue';

Vue.use(BootstrapVue);
Vue.component('arcade', require('./vue/components/arcade.vue').default);


if (document.getElementById('app')) {
    new Vue({
        el: '#app'
    });
}

const accordionItems = document.getElementsByClassName("accordion-item");

for (let i = 0, len = accordionItems.length; i < len; i++){
    accordionItems[i].addEventListener("click", accordionClick);
}

function accordionClick(event) {
    toggleAccordion(event.currentTarget);
}

function toggleAccordion(item) {
    const expandedPanel = document.querySelector(".accordion-item.active");
    if (expandedPanel) {
        expandedPanel.classList.remove("active");
    }

    item.classList.add("active");
}
