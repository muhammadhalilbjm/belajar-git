let details = document.querySelectorAll('.detail-btn');
let detailContainer = document.querySelector('.detail');

details.forEach( detail => {
    detail.addEventListener('click', e => {
        e.preventDefault();
        if( detailContainer.classList.contains('none') ) {
            detailContainer.classList.remove('none');
        }
    });
});

detailContainer.addEventListener('click', e => {
    if( e.target.classList.contains('detail') ) {
        document.location = "http://localhost/belajar-git/";
    }
});