export default class Users {
    constructor() {
        this.rootElem = document.querySelector('.users');
    }

    init(){
        this.render();
    }

    async render(){
        const data = await this.getData();
        console.log(data)

        const row = document.createElement('div');
        row.classList.add('row');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-6');

            col.innerHTML = `
                <div class="bg-warning">
                    <p>${item.name}</p>
                    <p>${item.age}</p>
                    <p>${item.image}</p>
                
            
            
                    ${item.favoriteColores.map(color => {
                return `<p>${color}</p>`;
            }).join('')}
                    
                    ${Object.entries(item.hobbies).map(([hobby, level]) => {
                return `<p>${hobby} : ${level}</p>`;
            }).join('')}
                
                </div>
            `;


            row.appendChild(col);
        }

        this.rootElem.appendChild(row)

    }


    async getData (){
        const response = await fetch('users.json');
        return await response.json();

    }

}