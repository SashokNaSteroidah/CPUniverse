
let cart = {
    'add1' : {
        'count' : +document.querySelector('#count_items_add1').innerHTML,
        'price_one' : document.querySelector('#add2_price').innerHTML
    },
    'add2' : {
        'count' : +document.querySelector('#count_items_add2').innerHTML,
        'price_one' : document.querySelector('#add2_price').innerHTML
    },
}

document.onclick = event => {

    if (event.target.classList.contains('plus')){
        plusFun(event.target.dataset.id)
    }
    if (event.target.classList.contains('minus')){
        minusFun(event.target.dataset.id)
    }
}

let plusFun = id => {
    cart[id]['count']++
    document.querySelector('#count_items_add2').innerHTML = cart[id]['count']
    price_plus(id)
}
let minusFun = id => {
    if (cart[id]['count'] - 1 === 0){
        return false
    }
    cart[id]['count']--
    document.querySelector('#count_items_add2').innerHTML = cart[id]['count']
    price_minus(id)
}

let price_plus = (e) => {
    let str = cart[e]['price_one']
    let str_now = document.querySelector('#add2_price').innerHTML
    str = +str.replace(/[^0-9]/g, '');
    str_now = +str_now.replace(/[^0-9]/g, '');
    let final_price = str+str_now
    final_price = final_price + 'р'
    document.querySelector('#add2_price').innerHTML = final_price
}

let price_minus = (e) => {
    let str = cart[e]['price_one']
    let str_now = document.querySelector('#add2_price').innerHTML
    str = +str.replace(/[^0-9]/g, '');
    str_now = +str_now.replace(/[^0-9]/g, '');
    let final_price = str_now-str
    final_price = final_price + 'р'
    document.querySelector('#add2_price').innerHTML = final_price
}

document.querySelector('.cross1').onclick = () => {
    document.querySelector('#item1').style.display = 'none'
}