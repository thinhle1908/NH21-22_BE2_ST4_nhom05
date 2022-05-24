const btnShowMoreProducts = document.querySelector('#btnshowmore');
const btnShowBackMoreFuature = document.querySelector('#btnshowbackmorefuature');
const divResult = document.querySelector('#result');
const resultFilter = document.querySelector('#result-filter');
const btnShowMoreFuature = document.querySelector('#btnshowmorefuature');
const divResultFeature = document.querySelector('#result-feature');
const pricerange = document.querySelector('#pricerange');








btnShowMoreProducts.addEventListener('click', () => {
    showMoreProduct();
});
async function showMoreProduct() {
    const qty = btnShowMoreProducts.getAttribute('value');
    const url = './api/product/qty/' + qty;
    const response = await fetch(url);
    // Bước 2: đọc dữ liệu trả về
    const result = await response.json();
    result.forEach(element => {
        divResult.innerHTML += `
        <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="images/product-details/${element.image}" alt="" height="250px"
                        width="250px" />
                    <h2>${element.price}$</h2>
                    <p>${element.name.substr(0, 30)}...</p>
                    <a href="#" class="btn btn-default add-to-cart"><i
                            class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>${element.price} $</h2>
                        <a href="/product-details/${element.id}"><p>${element.name}</p></a>
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
    btnShowMoreProducts.setAttribute('value', parseInt(qty) + 9);
}

btnShowMoreFuature.addEventListener('click', () => {
    showMoreProductFeature();
});
async function showMoreProductFeature() {
    const featureqty = btnShowMoreFuature.getAttribute('value');
    const url = './api/product-feature/qty/' + featureqty;

    const response = await fetch(url);
    // Bước 2: đọc dữ liệu trả về
    const result = await response.json();
    if (result != ""  && featureqty > 0) {
        divResultFeature.innerHTML = ``;
        result.forEach(element => {
            divResultFeature.innerHTML += `
        <div class="item active">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/product-details/${element.image}" height="250px"
                                width="250px" />
                            <h2>${element.price}$</h2>
                            <p>${element.name.substr(0, 30)}...</p>
                            <a href="#" class="btn btn-default add-to-cart"><i
                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
        });
        btnShowMoreFuature.setAttribute('value', parseInt(featureqty) - 3);
        btnShowBackMoreFuature.setAttribute('value', parseInt(btnShowBackMoreFuature.getAttribute('value')) - 3);
    }

}
btnShowBackMoreFuature.addEventListener('click', () => {
    showBackMoreProductFeature();
});
async function showBackMoreProductFeature() {
    const featureqty = btnShowBackMoreFuature.getAttribute('value');
    const url = './api/product-feature/qty/' + featureqty;

    const response = await fetch(url);
    // Bước 2: đọc dữ liệu trả về
    const result = await response.json();
    if (result != "" && featureqty > -3 ) {
        divResultFeature.innerHTML = ``;
        result.forEach(element => {
            divResultFeature.innerHTML += `
        <div class="item active">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/product-details/${element.image}" height="250px"
                                width="250px" />
                            <h2>${element.price}$</h2>
                            <p>${element.name.substr(0, 30)}...</p>
                            <a href="#" class="btn btn-default add-to-cart"><i
                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
        });
        btnShowMoreFuature.setAttribute('value', parseInt(btnShowMoreFuature.getAttribute('value')) + 3);
        btnShowBackMoreFuature.setAttribute('value', parseInt(featureqty) + 3);
    }

}
pricerange.addEventListener('click', () => {
    filterAllProducts();
})
async function filterAllProducts() {
    const tooltip = document.querySelectorAll('.tooltip-inner');
    let total;
    tooltip.forEach(element => {
        total = element.innerHTML;
    });
    const myArray = total.split(":");
    const min = myArray[0].replace(" ", "");
    const max = myArray[1].replace(" ", "");

    console.log(myArray);
    const url = './api/filter/' + min + "/" + max;
    const response = await fetch(url);
    // Bước 2: đọc dữ liệu trả về
    const result = await response.json();
    resultFilter.innerHTML = ``;
    result.forEach(element => {
        resultFilter.innerHTML += `
        <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="images/product-details/${element.image}" alt="" height="250px"
                        width="250px" />
                    <h2>${element.price}</h2>
                    <p>${element.name.substr(0, 30)}...</p>
                    <a href="#" class="btn btn-default add-to-cart"><i
                            class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>${element.price} $</h2>
                        <a href="/product-details/${element.id}"><p>${element.name}</p></a>
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

}
