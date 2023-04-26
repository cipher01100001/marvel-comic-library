const publicKey = 'fc853aafea66be8a96b7ba778b4019c9';
const privateKey = '202616a7d32f8e42590c387e353c5132394d3b55';
const ts = Math.floor(Date.now() / 1000);
const hash = CryptoJS.MD5(ts + privateKey + publicKey);
let limit = 15;
let offset = 0;
const format = "comic";
const orderBy = "title";

const apiUrl = 'http://gateway.marvel.com/v1/public/comics';
let queryParams = `?limit=${limit}&offset=${offset}&format=${format}&orderBy=${orderBy}&ts=${ts}&apikey=${publicKey}&hash=${hash}`;
let apiUrlWithParams = apiUrl + queryParams;

const getImageComic = (images) => {
    let img = '../../public/img/default-comic-cover.png';
    if (images.length > 0) {
        img = images[0].path + "." + images[0].extension;
    }
    return img;
}

const addFavorite = (data) => {
    fetch('../../app/controllers/add-favorite.php', {
        method: 'POST',
        body: JSON.stringify(data),
    })

        .then(response => response.json())
        .then(data => {
            alert(data.message)
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

const loadComics = () => {
    fetch(apiUrlWithParams)
        .then(response => response.json())
        .then(data => {
            const results = data.data.results;
            const fragment = document.createDocumentFragment();
            results.map(result => {
                const div = document.createElement('div');
                div.classList.add('col-md-4');
                div.classList.add('mb-3');

                div.innerHTML = `<div class="card bg-dark m-3">
                                    <img class="card-img-top" src="${getImageComic(result.images)}" alt="Imagen 1">
                                    <div class="card-body">
                                        <h5 class="card-title text-white">${result.title}</h5>
                                        <p class="card-text text-white">${result.description}</p>
                                        <div class="d-flex justify-content-end">
                                            <button id="${result.id}" class="btn btn-danger"><i class="fa-solid fa-heart-circle-plus mx-1"></i>Añadir</i></button>
                                        </div>
                                    </div>
                                </div>`;
                fragment.appendChild(div);
                document.getElementById('results-container').appendChild(fragment);



                document.getElementById(result.id).addEventListener('click', () => {
                    addFavorite(result);
                });
            })


            offset += limit;
            queryParams = `?limit=${limit}&offset=${offset}&format=${format}&ts=${ts}&apikey=${publicKey}&hash=${hash}`;
            apiUrlWithParams = apiUrl + queryParams;

            if (results.length < limit) {
                document.getElementById('show-more-button').style.display = 'none';
            }

        })
        .catch(error => console.error(error));
}

loadComics();

document.getElementById('show-more-button').addEventListener('click', () => {
    loadComics();
});