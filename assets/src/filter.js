document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card-lesson');
    const arr =
    {
        level: {
            traine: false,
            jun: false,
            middle: false,
            hard: false,
        },
        type: {
            hatha: false,
            vinasa: false,
            kundalini: false,
            meditation: false,
        },
        traner: {
            rezeda: false,
            olga: false,
            stepan: false,
            marina: false,
        }

    };

    arr.traner.marina = true;

    const level = document.querySelectorAll('.form-check');

    cards.forEach(element => {
        // console.log(element.querySelector('.lesson-name-type').textContent);
        // console.log(element.querySelector('.card-text-lesson').textContent);
        // console.log(element.querySelector('.card-text-lesson-bottom').textContent);
    })


    btnFilter.addEventListener('click', () => {
        // console.log(level[0].querySelector('.form-check-input').checked);
    })

})