'use strict'
// ========================================================
// ON READY
// ========================================================
document.addEventListener('DOMContentLoaded', function () {
	console.log('main.js is working');

	// variables
	const viewMediumDevices = '768px';

	// Re-arange the DOM for agenda-item
	const agendaItems = document.querySelectorAll('.agenda-item');
	agendaItems.forEach(item => {
		//new AgendaItem(item, viewMediumDevices);
	});

}, false);
/*
class AgendaItem {
	constructor(node, breakPoint) {
		this.node = node;
		this.breakPoint = breakPoint;
		if (!this.node || !this.breakPoint) return;
		this.name = this.node.querySelector('.agenda-item__name');
		this.hour = this.node.querySelector('.agenda-item__hour');
		this.location = this.node.querySelector('.agenda-item__location');
		this.detailParent = this.node.querySelector('.agenda-item__visible');
		window.addEventListener('resize', this.resize.bind(this), false);
		this.init();
	}

	init() {
		if (window.matchMedia('(min-width: ' + this.breakPoint + ')').matches) {
			this.changeDOMToDesktop();
		} else {
			return;
		}
	}

	resize() {
		if (window.matchMedia('(min-width: ' + this.breakPoint + ')').matches) {
			this.changeDOMToDesktop();
		} else {
			this.changeDOMToMobile();
		}
	}

	changeDOMToDesktop() {
		let html = this.hour.outerHTML + this.location.outerHTML;
		this.name.insertAdjacentHTML('afterend', html);
	}

	changeDOMToMobile() {
		let newHour, newLocation;
		newHour = this.detailParent.querySelector('.agenda-item__hour');
		newLocation = this.detailParent.querySelector('.agenda-item__location');
		console.log(newHour);
		this.detailParent.removeChild(newHour);
		this.detailParent.removeChild(newLocation);
	}
}*/

