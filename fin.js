const temp = JSON.parse(localStorage.getItem('name'));
const cartitem = (temp || [])


var reply_click = function () {
    var s = this.id

    document.getElementById("add" + (s)).style.display = "none";
    document.getElementById("count" + (s)).style.display = "block";
    cartitem.push(document.getElementById("name" + (s)).innerHTML);
    localStorage.setItem("name", JSON.stringify(cartitem))
    // localStorage.clear();
    console.log(localStorage.getItem('name'));
    w = document.getElementById("name" + (s)).innerHTML;
    a = localStorage.getItem(w)
    document.getElementById("num" + (s)).innerText = 01;
    localStorage.setItem(w + "rs", document.getElementById("pr" + (s)).innerHTML)



}
document.getElementById('1').onclick = reply_click;
document.getElementById('2').onclick = reply_click;

var plus_click = function () {
    var s = this.id
    s= s.slice(3)
    console.log(s)
    var a = 01
    var w = document.getElementById("name" + (s)).innerHTML;
    a = localStorage.getItem(w)
        a++;
        a = (a < 10) ? "0" + a : a;
        document.getElementById("num" + (s)).innerText = a;
        localStorage.setItem(w, a)
        console.log(localStorage.getItem(w));

    }

    var minus_click = function () {
        var s = this.id
        s= s.slice(3)
        var a = 01;
        var w = document.getElementById("name" + (s)).innerHTML;
        a = localStorage.getItem(w);
            if (a > 1) {
                a--;
                a = (a < 10) ? "0" + a : a;
                document.getElementById("num" + (s)).innerText = a;
                localStorage.setItem(w, a)
            } else {
                cartitem.splice(w, 1,);
                localStorage.setItem("name", JSON.stringify(cartitem))
                document.getElementById("count" + (s)).style.display = "none";
                document.getElementById("add" + (s)).style.display = "block";
                console.log(cartitem)
                console.log(localStorage.getItem('name'))
                localStorage.removeItem(w + "rs");
                localStorage.removeItem(w);
            }
        }





    function fu() {
        localStorage.clear();
        window.location.reload()
    }
//document.getElementById('pul1').onclick = plus_click;
//document.getElementById('min1').onclick = minus_click;
//document.getElementById('pul1').onclick = plus_click;
//document.getElementById('min1').onclick = minus_click;
//document.getElementById('pul1').onclick = plus_click;
//document.getElementById('min1').onclick = minus_click;
//document.getElementById('pul1').onclick = plus_click;
//document.getElementById('min1').onclick = minus_click;


        



