class Carousel {
    constructor(element, options = {}) {
        this.element = element
        this.options = options
        console.log('Bonjour')

    }
}



document.addEventListener('load', () => {
    new Carousel(document.querySelector('.slider'), {
        slidersToScroll: 2,
        slidersVisible: 2
    })

})

