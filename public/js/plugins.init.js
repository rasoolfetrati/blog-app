/* Template Name: Getblog - Creative Minimal Blog Template
   Author: Shreethemes
   E-mail: support@shreethemes.in
   Website: https://shreethemes.in
   Created: September 2021
   Version: 1.0.0
   File Description: Common JS file of the template(plugins.init.js)
*/


/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Tiny Slider          *
 *     02.  Data Counter         *
 *     03.  Gallery filter js    * (For Portfolio pages)
 *     04.  Tobii lightbox       * (For Portfolio pages)
 ================================*/
         
//=========================================//
/*            01) Tiny slider              */
//=========================================//

if(document.getElementsByClassName('tiny-single-item').length > 0) {
    var slider = tns({
        container: '.tiny-single-item',
        items: 1,
        controls: false,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        speed: 400,
        gutter: 0,
    });
};

if(document.getElementsByClassName('tiny-three-item').length > 0) {
    var slider = tns({
        container: '.tiny-three-item',
        controls: true,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
        nav: false,
        speed: 400,
        gutter: 12,
        responsive: {
            992: {
                items: 3
            },

            767: {
                items: 2
            },

            320: {
                items: 1
            },
        },
    });
};

if(document.getElementsByClassName('tiny-six-item').length > 0) {
    var slider = tns({
        container: '.tiny-six-item',
        controls: true,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
        nav: false,
        speed: 400,
        gutter: 0,
        responsive: {
            1025: {
                items: 6
            },

            992: {
                items: 3
            },

            767: {
                items: 2
            },

            320: {
                items: 1
            },
        },
    });
};

if(document.getElementsByClassName('tiny-eight-item').length > 0) {
    var slider = tns({
        container: '.tiny-eight-item',
        controls: true,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
        nav: false,
        speed: 400,
        gutter: 0,
        responsive: {
            1025: {
                items: 8
            },

            992: {
                items: 6
            },

            767: {
                items: 4
            },

            320: {
                items: 2
            },
        },
    });
};

if(document.getElementsByClassName('tiny-twelve-item').length > 0) {
    var slider = tns({
        container: '.tiny-twelve-item',
        controls: true,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
        nav: false,
        speed: 400,
        gutter: 0,
        responsive: {
            1025: {
                items: 10
            },

            992: {
                items: 8
            },

            767: {
                items: 6
            },

            320: {
                items: 2
            },
        },
    });
};

//=========================================//
/*/*            02) Data Counter           */
//=========================================//

try {
    const counter = document.querySelectorAll('.counter-value');
    const speed = 2500; // The lower the slower

    counter.forEach(counter_value => {
        const updateCount = () => {
            const target = +counter_value.getAttribute('data-target');
            const count = +counter_value.innerText;

            // Lower inc to slow and higher to slow
            var inc = target / speed;

            if (inc < 1) {
                inc = 1;
            }

            // Check if target is reached
            if (count < target) {
                // Add inc to count and output in counter_value
                counter_value.innerText = (count + inc).toFixed(0);
                // Call function every ms
                setTimeout(updateCount, 1);
            } else {
                counter_value.innerText = target;
            }
        };

        updateCount();
    });
} catch (err) {

}

//=========================================//
/*/*            03) Gallery filter js      */
//=========================================//

try {
    var Shuffle = window.Shuffle;

    class Demo {
        constructor(element) {
            if(element){
                this.element = element;
                this.shuffle = new Shuffle(element, {
                    itemSelector: '.picture-item',
                    sizer: element.querySelector('.my-sizer-element'),
                });

                // Log events.
                this.addShuffleEventListeners();
                this._activeFilters = [];
                this.addFilterButtons();
            }
        }

        /**
         * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
         * for them like you normally would (with jQuery for example).
         */
        addShuffleEventListeners() {
            this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
                console.log('layout. data:', data);
            });
            this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
                console.log('removed. data:', data);
            });
        }

        addFilterButtons() {
            const options = document.querySelector('.filter-options');
            if (!options) {
                return;
            }

            const filterButtons = Array.from(options.children);
            const onClick = this._handleFilterClick.bind(this);
            filterButtons.forEach((button) => {
                button.addEventListener('click', onClick, false);
            });
        }

        _handleFilterClick(evt) {
            const btn = evt.currentTarget;
            const isActive = btn.classList.contains('active');
            const btnGroup = btn.getAttribute('data-group');

            this._removeActiveClassFromChildren(btn.parentNode);

            let filterGroup;
            if (isActive) {
                btn.classList.remove('active');
                filterGroup = Shuffle.ALL_ITEMS;
            } else {
                btn.classList.add('active');
                filterGroup = btnGroup;
            }

            this.shuffle.filter(filterGroup);
        }

        _removeActiveClassFromChildren(parent) {
            const { children } = parent;
            for (let i = children.length - 1; i >= 0; i--) {
                children[i].classList.remove('active');
            }
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        window.demo = new Demo(document.getElementById('grid'));
    });
} catch (err) {

}


//=========================================//
/*/*            04) Tobii lightbox         */
//=========================================//

try {
    const tobii = new Tobii()
} catch (err) {

}