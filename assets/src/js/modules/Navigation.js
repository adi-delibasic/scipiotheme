class Navigation {
	constructor() {
		this.spanElement = document.querySelectorAll('.dropdown-icon');
		this.dropdownMenu();
	}

	events() {}

	// Handlers

	// Methods
	dropdownMenu() {
		// Check is element exists
		if (this.spanElement) {
			/**
			 * Add event listener
			 * Prevent span elements from default behaviour
			 */
			for (let span of this.spanElement) {
				span.addEventListener('click', (event) => {
					event.preventDefault();
					/**
					 * Select the first element
					 * to prevent opening all submenus
					 */
					let spanParent = span.parentElement.parentElement
						.getElementsByClassName('dropdown-menu')
						.item(0);
					spanParent.classList.toggle('h-auto');
				});
			}
		}
	}
}

export default Navigation;
