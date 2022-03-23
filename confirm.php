<?php
   $name=$_GET['name'];
   $phone=$_GET['phone'];
?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grazie per il tuo ordine!</title>
        <!--[if lt IE 9]>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.8/es5-shim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="confirm/css/fonts.css">
        <link rel="stylesheet" href="confirm/css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <script>
            function $_GET(key) {
                var s = window.location.search;
                s = s.match(new RegExp(key + '=([^&=]+)'));
                return s ? s[1] : '';
            }
    
            var site = $_GET('version')
    
            if (site.replace(/(v\d{1,3}\w{0,2})$/, '') === 'it39') {
                document.write('<scr' + 'ipt src="39/counter.js"></scr' + 'ipt>');
            }
            if (site.replace(/(v\d{1,3}\w{0,2})$/, '') === 'it39prelp') {
                document.write('<scr' + 'ipt src="39/prelp/counter.js"></scr' + 'ipt>');
            }
            if (site.replace(/(v\d{1,3}\w{0,2})$/, '') === 'it1') {
                document.write('<scr' + 'ipt src="1/counter.js"></scr' + 'ipt>');
            }
            if (site.replace(/(v\d{1,3}\w{0,2})$/, '') === 'it1prelp') {
                document.write('<scr' + 'ipt src="1/prelp/counter.js"></scr' + 'ipt>');
            }
        </script>
        <div class="wrapper">
            <div class="thank">
                <div class="thank__logo">
                    <img src="confirm/images/land-icon.png" alt="" /><h1>Reduslim </h1>
                </div><div class="thank__body">
                    <div class="thank__content">
                        <div class="thank__info">
                            <div class="thank__order">
                                <p>Grazie per il tuo ordine!</p>
                            </div><div class="thank__status">
                                <p>La tua richiesta e stata ricevuta! La stiamo elaborando.</p>
                            </div><div class="thank__about">
                                <ul>
                                    <li>
                                        Prodotto: <span class="tovar">Reduslim</span>
                                    </li><li>
                                        Il tuo nome:  <?php echo $name ?> <span id="leadprofit-name" class="name"></span>
                                    </li><li>
                                        Il tuo numero di telefono:  <?php echo $phone ?> <span id="leadprofit-phone" class="phone"></span>
                                    </li>
                                </ul>
                            </div><div class="thank__call">
                                <p>Ha momenti verrai contattato da un nostro specialista per maggiori informazioni.</p>
                            </div>
                        </div><div class="thank__product">
                            <div class="thank__pack">
                                <img src="confirm/images/thank-pack.png" alt="" />
                            </div><div class="thank__glass">
                                <img src="confirm/images/thank-glass.png" alt="" />
                            </div>
                        </div>
                    </div><div class="thank__atten">
                        <div class="thank__atten-desc">
                            <p>Nel caso hai sbagliato nell’inserimento dei dati puoi modificarli 
                                                                    </p>
                        </div><div class="thank__atten-btn">
                            <a id="leadprofit-returnurl" href="#"><button>Modifica</button></a>
                        </div>
                    </div>
                </div>
            </div><div class="question">
                <div class="question__body">
                    <div class="question__doctor">
                        <div class="question__doctor-img">
                            <img src="confirm/images/doctor-img.png" alt="" />
                        </div><div class="question__doctor-content">
                            <div class="question__title">
                                <h2>Le domande più frequenti</h2>
                            </div><div class="question__doctor-answer">
                                <p>Risponde un nostro consulente Medico  Dietologo ed Endocrinologo</p>
                            </div><div class="question__doctor-name">
                                <p>Raffaella Santis</p>
                            </div>
                        </div>
                    </div><div class="question__info">
                        <div class="question__item">
                            <div class="question__ask">
                                <p>— Reduslim aiuta a eliminare il grasso viscerale?  </p>
                            </div><div class="question__answer">
                                <p>Questo prodotto ha una composizione equilibrata, grazie alla quale ha un effetto complesso sul corpo. Combatte il grasso corporeo a tutti i livelli. Reduslim è efficace contro il grasso sottocutaneo e viscerale.</p>
                            </div>
                        </div><div class="question__item">
                            <div class="question__ask">
                                <p>— Come assumere il prodotto?</p>
                            </div><div class="question__answer">
                                <p>Una capsula al giorno dopo il pasto principale. Si consiglia inoltre di mantenere l'idratazione ottimale del corpo. Per fare questo, bere almeno 2 litri di acqua al giorno.</p>
                            </div>
                        </div><div class="question__item">
                            <div class="question__ask">
                                <p>— Quanto tempo ci vuole per ottenere l'effetto?</p>
                            </div><div class="question__answer">
                                <p>Il trattamento ottimale per voi verrà consigliato dal nostro specialista durante la consultazione telefonica. Per ottenere il risultato visibile iniziale, si consiglia di assumere almeno 30 giorni. Per consolidare l'effetto a lungo termine, il corso di ammissione può essere prolungato o usato ripetutamente.</p>
                            </div>
                        </div><div class="question__item">
                            <div class="question__ask">
                                <p>— L'effetto della perdita di peso rimarrà dopo la fine del trattamento?</p>
                            </div><div class="question__answer">
                                <p>Sì. Reduslim corregge il metabolismo, in modo che il risultato raggiunto rimanga a lungo.</p>
                            </div>
                        </div><div class="question__item">
                            <div class="question__ask">
                                <p>— L'efficacia di Reduslim diminuisce con l'età? </p>
                            </div><div class="question__answer">
                                <p>No. Reduslim è ugualmente efficace a qualsiasi età. Agisce sui processi metabolici del corpo che non dipendono dall'età biologica.</p>
                            </div>
                        </div><div class="question__item">
                            <div class="question__ask">
                                <p>— Perché Reduslim è migliore di altri prodotti per la perdita di peso?</p>
                            </div><div class="question__answer">
                                <p>Reduslim attiva la naturale scissione del grasso. Il prodotto non contiene alcuna sostanza creata artificialmente, basata esclusivamente su componenti vegetali. Il rimedio non crea dipendenza e non ha effetti collaterali. Grazie ai componenti attivi, Reduslim migliora normalizzare i livelli di colesterolo, migliora il lavoro del cuore, contribuisce alla normalizzazione del tratto gastrointestinale. Reduslim provoca anche la produzione dell'ormone della gioia - endorfina, che fornisce attività e una scarica di energia. Lo strumento aiuta a perdere peso senza danneggiare la salute e fissare in modo permanente il risultato.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="prefer">
                <div class="prefer__border"></div>
                <div class="prefer__body">
                    <div class="prefer__list">
                        <ul>
                            <li>
                                <div class="prefer__list-desc">
                                    <p>Approvato dalle autorità di regolamentazione.</p>
                                </div>
                            </li><li>
                                <div class="prefer__list-desc">
                                    <p>Garanzia di qualità al 100%.</p>
                                </div>
                            </li><li>
                                <p>
                                Reduslim ha superato tutte le misure di registrazione e controllo con la legislazione attuale
                                </p>
                            </li>
                        </ul>
                    </div><div class="prefer__info">
                        <div class="prefer__award">
                            <img src="confirm/images/prefer-award.png" alt="" />
                        </div><div class="prefer__pack">
                            <img src="confirm/images/prefer-pack.png" alt="" />
                        </div><div class="prefer__sert">
                            <ul>
                                <li>
                                    <img src="confirm/images/prefer-sert1.png" alt="" />
                                </li><li>
                                    <img src="confirm/images/prefer-sert2.png" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feed">
                <div class="feed__title">
                    <h2>Il tuo ordine è in elaborazione, leggi le recensioni di chi ha già provato Reduslim:</h2>
                </div>
                <div class="feed__gif">
                    <ul>
                        <li>
                            <img src="confirm/images/gif1.gif" alt="фото">
                        </li><li>
                           <img src="confirm/images/gif2.gif" alt="фото">
                        </li><li>
                           <img src="confirm/images/gif3.gif" alt="фото">
                        </li>
                    </ul>
                </div>
                
                <div class="feed__content">
                    <div class="feed__item">
                        <div class="feed__img">
                            <img src="confirm/images/feed-img2.png" alt="" />
                        </div><div class="feed__info">
                            <div class="feed__desc">
                                <p><span>Francesca, 23 anni</span> <br> Ho avuto problemi con l'eccesso di peso, non riuscivo a stabilizzarlo. Ero molto preoccupata per questo. Facevo una dieta e poi sgarravo. Pensavo che i miei amici si vergognassero di me e i ragazzi non volevano conoscermi. Ma dopo il corso di Reduslim, tutto è cambiato. Ora mi sento molto più sicura.</p>
                            </div><div class="feed__bottom">
                                <div class="it__rev_content_bottom_wrp">
                                    <span class="st st_2">Mi piace</span>
                                    <span class="st st_2">Condividi</span>
                                    <span class="st st_fl st_like st_Mi piace">
                                        <img src="confirm/images/like.png" alt="лайки">
                                        <span class="st_1">47</span>
                                    </span>
                                    <span class="st st_1"><script type="text/javascript">
                                    var appendNull = function (num) {
                                        return num < 10 ? 0 + num.toString() : num;
                                    };
                                    d = new Date();
                                    p = new Date(d.getTime() - 2 * 86400000);
                                    monthb = 'Januar, Februar, März, April, Maggio, Juni, Juli, August, September, Oktober, November, Dezember'.split(',');
                                    document.write(appendNull(p.getDate()) + '  ' + monthb[p.getMonth()] + '  ' + p.getFullYear());
                                    </script></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feed__item">
                        <div class="feed__img">
                            <img src="confirm/images/feed-img4.png" alt="" />
                        </div><div class="feed__info">
                            <div class="feed__desc">
                                <p><span>Giorgio, 42 anni</span><br>
                                    Non mi è mai piaciuto il mio fisico, sono un buongustaio e mi piace cucinare. Ho sempre voluto perdere almeno qualche chilo di peso in eccesso. Ma le diete non hanno dato il risultato desiderato. Su consiglio di un amico, ho provato Reduslim. In un mese e mezzo mi sono rimesso in forma. Ho preso Reduslim e mi sono allenato in palestra per avere un fisico più rifinito. Ora sono più in armonia, non mi limito nel mangiare e sono in ottima forma. Grazie.</p>
                            </div><div class="feed__bottom">
                                <div class="it__rev_content_bottom_wrp">
                                    <span class="st st_2">Mi piace</span>
                                    <span class="st st_2">Condividi</span>
                                    <span class="st st_fl st_like st_Mi piace">
                                        <img src="confirm/images/like.png" alt="лайки">
                                        <span class="st_1">61</span>
                                    </span>
                                    <span class="st st_1"><script type="text/javascript">
                                    var appendNull = function (num) {
                                        return num < 10 ? 0 + num.toString() : num;
                                    };
                                    d = new Date();
                                    p = new Date(d.getTime() - 2 * 86400000);
                                    monthb = 'Januar, Februar, März, April, Maggio, Juni, Juli, August, September, Oktober, November, Dezember'.split(',');
                                    document.write(appendNull(p.getDate()) + '  ' + monthb[p.getMonth()] + '  ' + p.getFullYear());
                                    </script></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feed__item">
                        <div class="feed__img">
                            <img src="confirm/images/feed-img1.png" alt="" />
                        </div><div class="feed__info">
                            <div class="feed__desc">
                                <p><span>Antonella e Angelo, 32 e 36 anni</span> <br> Mio marito e io abbiamo preso la decisione di perdere peso quando ci è stata diagnosticata l'infertilità. Non siamo riusciti a concepire un bambino a causa del peso in eccesso. Abbiamo provato a seguire diete, ma il desiderio di dolci e grassi ci ha impedito di perdere peso. Poi abbiamo chiesto aiuto al medico e ci ha consigliato un rimedio sicuro e naturale Reduslim. Assumevamo una capsula al giorno dopo il pranzo per tre mesi, questo è il trattamento che ci e stato consigliato durante la consultazione telefonica. Abbiamo perso circa 40 kg per due e siamo riusciti a concepire un bambino. Siamo molto felici, grazie Reduslim!</p>
                            </div><div class="feed__bottom">
                                <div class="it__rev_content_bottom_wrp">
                                    <span class="st st_2">Mi piace</span>
                                    <span class="st st_2">Condividi</span>
                                    <span class="st st_fl st_like st_Mi piace">
                                        <img src="confirm/images/like.png" alt="лайки">
                                        <span class="st_1">55</span>
                                    </span>
                                    <span class="st st_1"><script type="text/javascript">
                                    var appendNull = function (num) {
                                        return num < 10 ? 0 + num.toString() : num;
                                    };
                                    d = new Date();
                                    p = new Date(d.getTime() - 1 * 86400000);
                                    monthb = 'Januar, Februar, März, April, Maggio, Juni, Juli, August, September, Oktober, November, Dezember'.split(',');
                                    document.write(appendNull(p.getDate()) + '  ' + monthb[p.getMonth()] + '  ' + p.getFullYear());
                                    </script></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feed__item">
                        <div class="feed__img">
                            <img src="confirm/images/feed-img3.png" alt="" />
                        </div><div class="feed__info">
                            <div class="feed__desc">
                                <p><span>Sara, 29 anni </span> <br> Dopo il parto sono ingrassata molto. Avevo paura che mio marito mi lasciasse. Mi ama, ma l'uomo vuole comunque una bella moglie in casa. Guardava le belle ragazze per le strade. E quando mi ha guardato, ho capito che ero disgustosa e lui non mi voleva affatto. Grazie a Reduslim sono riuscita a rimettermi in forma, mi sento bene e mi piaccio di nuovo allo specchio. Mio marito e io abbiamo una nuova luna di miele! Grazie!</p>
                            </div><div class="feed__bottom">
                                <div class="it__rev_content_bottom_wrp">
                                    <span class="st st_2">Mi piace</span>
                                    <span class="st st_2">Condividi</span>
                                    <span class="st st_fl st_like st_Mi piace">
                                        <img src="confirm/images/like.png" alt="лайки">
                                        <span class="st_1">48</span>
                                    </span>
                                    <span class="st st_1"><script type="text/javascript">
                                    var appendNull = function (num) {
                                        return num < 10 ? 0 + num.toString() : num;
                                    };
                                    d = new Date();
                                    p = new Date(d.getTime() - 1 * 86400000);
                                    monthb = 'Januar, Februar, März, April, Maggio, Juni, Juli, August, September, Oktober, November, Dezember'.split(',');
                                    document.write(appendNull(p.getDate()) + '  ' + monthb[p.getMonth()] + '  ' + p.getFullYear());
                                    </script></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div><footer>
            <div class="footer__body">
                <div class="footer__logo">
                    <img src="confirm/images/land-icon.png" alt="" /><h3>Reduslim</h3>
                </div><div class="footer__phone">
                    <p>39800168035</p>
                </div><div class="footer__mail">
                    <p>info365help@gmail.com</p>
                </div>
            </div>
        </footer>
        <script src="confirm/js/main.js"></script>

        <!-- new resend lead form. Place it outside main wrapper/container to make styles work properly -->
	<style>
		/* default styles for form */
		#resend-lead-popup {
			display: none;
			position: fixed;
			top: 0;
			right: 0;
			left: 0;
			bottom: 0;
			align-items: center;
			justify-content: center;
		}

		.resend-lead-popup--active {
			display: flex !important;
			z-index: 400;
			background: rgba(0, 0, 0, .5);
		}

		#resend-lead-popup .resend-lead-popup__body {
			width: 90%;
			max-width: 560px;
			min-height: 300px;
			padding: 25px 20px 15px 20px;
			border: 2px solid #267401;
			border-radius: 20px;
			background: #fff;
			/* default font family */
			font-family: 'Roboto', sans-serif;
			z-index: 500;
			position: relative;
		}

		#resend-lead-popup .resend-lead-popup__body .resend-lead-popup__close {
			position: absolute;
			border-radius: 50%;
			top: -15px;
			right: -15px;
			width: 30px;
			height: 30px;
			border-color: #000;
			cursor: pointer;
		}

		#resend-lead-popup .resend-lead-popup__body .resend-lead-popup__close:hover {
			background-color: #267401;
		}

		#resend-lead-popup .resend-lead-form .resend-lead-form__title {
			text-align: center;
			margin-top: 0;
			margin-bottom: 20px;
			font-size: 30px;
		}

		#resend-lead-popup .resend-lead-form .notification {
			display: none;
			color: #fff;
			text-align: center;
			padding: 5px;
		}

		#resend-lead-popup .resend-lead-form .notification.success {
			background: green;
		}

		#resend-lead-popup .resend-lead-form .notification.error {
			background: red;
            margin-bottom: 10px;
		}

		#resend-lead-popup .resend-lead-form .notification.active {
			display: block;
            margin-bottom: 10px;
		}

		#resend-lead-popup .resend-lead-form input {
			display: block;
			width: 90%;
			max-width: 300px;
			height: 40px;
			margin: 0 auto 20px auto;
			border: 2px solid #267401;
			padding: 5px 10px;
			border-radius: 5px;
		}

		#resend-lead-popup .resend-lead-form input::-webkit-outer-spin-button,
		#resend-lead-popup .resend-lead-form input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		#resend-lead-popup .resend-lead-form input[type=number] {
			-moz-appearance: textfield;
		}

		#resend-lead-popup .resend-lead-form .resend-lead__submit {
			display: block;
			width: 200px;
			color: #fff;
			background: -webkit-linear-gradient(298.88deg, #34a400 49.07%, #267202 130.88%);
            background: linear-gradient(151.12deg, #34a400 49.07%, #267202 130.88%);
            -webkit-box-shadow: 0 4px 4px rgba(0, 0, 0, .4), inset 0 4px 4px rgba(255, 255, 255, .25);
            box-shadow: 0 4px 4px rgba(0, 0, 0, .4), inset 0 4px 4px rgba(255, 255, 255, .25);
            border: 2px solid rgba(255, 255, 255, .3);
			height: 40px;
			margin: 10px auto 0 auto;
			cursor: pointer;
            -webkit-animation: animate_gradient 5s ease infinite;
            animation: animate_gradient 5s ease infinite;
            -webkit-transition: .5s;
            transition: .5s
		}

        #resend-lead-popup .resend-lead-form .resend-lead__submit:hover {
            background: -webkit-linear-gradient(298.88deg, #267202 49.07%, #34a400 130.88%);
            background: linear-gradient(151.12deg, #267202 49.07%, #34a400 130.88%);
            -webkit-box-shadow: 0 4px 4px rgba(0, 0, 0, .4), inset 0 4px 4px rgba(255, 255, 255, .25);
            box-shadow: 0 4px 4px rgba(0, 0, 0, .4), inset 0 4px 4px rgba(255, 255, 255, .25);
            background-size: 400% 400%;
            -webkit-animation: animate_gradient2 5s ease infinite;
            animation: animate_gradient2 5s ease infinite
        }
	</style>

	<div id="resend-lead-popup">
		<div class="resend-lead-popup__body">
			<button type="button" class="resend-lead-popup__close">
				<svg width="14px" height="14px" viewBox="0 0 311 311.07733" xmlns="http://www.w3.org/2000/svg">
					<path
						d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0" />
					<path
						d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0" />
				</svg>
			</button>
			<form class="resend-lead-form">
				<!-- Тут нужно перевести контент на язык ленда  -->
				<h3 class="resend-lead-form__title">Modifica il tuo ordine</h3>
				<!-- Две ошибки, тк сервер текст ошибок не возвращает, тем более под нужный язык не переводит -->
				<p class="notification success">La tua richiesta e stata aggiornata!</p>
				<p class="notification error">Ci e stato qualche errore. Prova a rifare la richiesta dalla pagina iniziale.
				</p>
				<!-- форма -->
				<input id="resend-lead-name" placeholder="Il tuo nome" name="name" type="text">
                
				<input id="resend-lead-phone" placeholder="Numero di telefono" name="phone">
                <script>
                    // REMOVE number="number" fom input above to make it work
                    // script to work with masked phone number 
                    var re = /[^\d\+\s()]/
                    var phoneInputPopup = document.getElementById('resend-lead-phone')
                    console.log(phoneInputPopup);
                    phoneInputPopup.addEventListener('input', function(e) {
                        e.target.value = e.target.value.replace(re, '')
                    })
                </script>
				<button type="submit" class="resend-lead__submit">
					Modifica i dati
				</button>
			</form>
		</div>
	</div>
	<!-- end of new form -->

        <!-- Подключение к гиту -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-url-parser/2.3.1/purl.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
        <!-- leadprofit.js - скрипт подключения к пп -->
        <script src="https://click.lucky.online/js/leadprofit.js"></script>
        <script>
            $(document).ready(function () {
                $(document).leadprofitConfirm();
            });
        </script>
    </body>
</html>