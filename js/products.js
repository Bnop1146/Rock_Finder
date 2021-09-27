export default class Products {
    constructor() {
        this.data = {
            password: "Bnop1146"

        }

        this.rootElem = document.querySelector('.products');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.trackSearch = this.filter.querySelector('.trackSearch');
    }

    async init(){
        this.trackSearch.addEventListener('input', () => {
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
                <div class="card h-100">
                    <img src="uploads/${item.muPicture}" class="card-img-top">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">${item.muTrack}</h5>
                            <h6 class="card-undertitle">${item.muArtist}</h6>
                            <p class="card-text">${item.muAlbum}</p>
                        </div>
                        <a href="muPage.php?rockId=${item.rockId}" class="btn btn-primary text-white w-100 ">View</a>
                    </div>
                </div>
            
            `;


            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row)


    }


    async getData (){
        console.log(this.trackSearch.value)
        this.data.trackSearch = this.trackSearch.value;

        const response = await fetch('muApi.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();

    }

}