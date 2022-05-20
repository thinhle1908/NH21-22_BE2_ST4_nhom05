const btnShowMoreProducts = document.querySelector('#btnshowmore'); 
const divResult = document.querySelector('#result');

btnShowMoreProducts.addEventListener('click', (e) => {
    showMoreProduct();
});
async function showMoreProduct() {
    const qty = btnShowMoreProducts.getAttribute('value');
    const url = './api/product/qty/' + qty;
    const response = await fetch(url);
     // Bước 2: đọc dữ liệu trả về
     const result = await response.json();
    console.log(parseInt(qty)+9);
    result.forEach(element => {
        divResult.innerHTML += `
        <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="images/product-details/${element.image}" alt="" height="250px"
                        width="250px" />
                    <h2>${element.price}</h2>
                    <p>${element.name.substr(0,30)}...</p>
                    <a href="#" class="btn btn-default add-to-cart"><i
                            class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>${element.price} $</h2>
                        <p>${element.name} </p>
                        <a href="#" class="btn btn-default add-to-cart"><i
                                class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>
        </div>
    </div>
    `;

    });
    btnShowMoreProducts.setAttribute('value',parseInt(qty)+9);
}