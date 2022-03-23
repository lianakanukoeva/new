//Название id формы
let nameForm = 'order_form2'

let form = document.querySelector(`form#${nameForm}`)
console.log(form)
if (form) {
  form.addEventListener('submit', sumbitEvents)

  function sumbitEvents(e) {
    function parseGetParams() {
      var $_GET = {};
      var __GET = window.location.search.substring(1).split("&");
      for (var i = 0; i < __GET.length; i++) {
        var getVar = __GET[i].split("=");
        $_GET[getVar[0]] = typeof (getVar[1]) == "undefined" ? "" : getVar[1];
      }
      return $_GET;
    }

    let data = parseGetParams()
    let pixelId = data.pixel;

    if (pixelId) {
      startPixel();
    }

    function startPixel() {
      e.preventDefault()
      !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', pixelId);
      fbq('track', 'Lead');
      removeSubmit()
      return false
    }

    function removeSubmit() {
      form.removeEventListener('submit', sumbitEvents);
      let loadingBlock = document.createElement('div');
      loadingBlock.style.cssText = `
    position: fixed;
    display: flex;
    justify-content:center;
    align-items: center;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 999;
    background: url('img/Spinner-5.gif') center no-repeat;
    background-color: white;
      `;
      document.body.append(loadingBlock);
      setTimeout(() => {
        console.log(form);
        form.submit();
      }, 600)
    }
  }

}