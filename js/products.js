export default class Products {
    constructor() {
        this.data = {
            password: "Bnop1146"

        }

        this.rootElem = document.querySelector('.products');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.trackSearch = this.filter.querySelector('.trackSearch');
        this.releaseSearch = this.filter.querySelector('.releaseSearch');
    }

    async init(){
        this.trackSearch.addEventListener('input', () => {
            this.render();

        });


        this.releaseSearch.addEventListener('input', () => {
            this.render();

        });




        await this.render();

    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML = `
                <div class="card h-100 text-white itemsImg">
                   
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="text-center">
                            <img src="uploads/${item.muPicture}" class="card-img-top" alt="">
                            <h5 class="card-title text-black mt-5 ">${item.muTrack}</h5>
                            <p class="text-muted mb-3">Fra ${item.muArtist} kr/md.</p>
                           
                            <p class="card-text p-1 text-black">${item.muAlbum}</p>
                            <p class="card-text p-1 text-black">${item.muGenre}</p>
                            <p class="card-text p-1 text-black">${item.muStyles}</p>

                            
                        </div>
                        <a href="muPage.php?rockId=${item.rockId}" 
                            class="btn btn-floating btn-rounded w-100 mt-4 text-white">
                                 Læs mere
                                
                        </a>
                    </div>
                </div>
                
                
                
                
            
            `;


            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row)


    }


    async getData (){


        this.data.trackSearch = this.trackSearch.value;
        this.data.artistSearch = this.trackSearch.value;
        this.data.releaseSearch = this.releaseSearch.value;

        const response = await fetch('muApi.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();

    }

}