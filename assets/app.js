/*
 * Welcome to your app's main JavaScript file!
 *
 * Nous allons charger les dépendances et le code d'initialisation ici.
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import './styles/main.css';
import '@popperjs/core';
// ----------------------------------------------------------------------
// 1. Initialisation des dépendances globales (jQuery, Bootstrap, Headroom)
// ----------------------------------------------------------------------

// A. Importez et exposez jQuery en premier.
// C'est CRUCIAL pour que les plugins jQuery puissent se lier correctement.
import $ from 'jquery';
window.$ = $;
window.jQuery = $;

// B. Importez Bootstrap.
// J'ai ajouté l'extension (.js) et corrigé le chemin basé sur la v3/v4 standard.
// Assurez-vous que ces chemins correspondent aux fichiers dans node_modules/bootstrap/dist/
import 'bootstrap/dist/js/bootstrap.min.js';
import 'bootstrap/dist/css/bootstrap.css'; 
// Si le .css ne fonctionne pas pour la v3, essayez 'bootstrap/dist/css/bootstrap.min.css'

// C. Importez Headroom.js (librairie de base et plugin jQuery)
import 'headroom.js'; 
import 'headroom.js/dist/jQuery.headroom'; 

// D. Démarrage de l'application Stimulus (laissez-le à la fin des imports)
import './bootstrap';

// Import the core CSS file
import '@fortawesome/fontawesome-free/css/all.min.css';
// Dans assets/app.js
import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';

// Import jQuery Easing
require('jquery.easing');

// Import Chart.js (optionnel)
import Chart from 'chart.js/auto';

// Import SB Admin 2
import 'startbootstrap-sb-admin-2/css/sb-admin-2.min.css';
import 'startbootstrap-sb-admin-2/js/sb-admin-2.min.js';

// 2. Thème SB Admin 2 (doit venir après les librairies qu'il surcharge)
import '../node_modules/startbootstrap-sb-admin-2/css/sb-admin-2.min.css';

// Rendre jQuery disponible globalement
// window.$ = $;
// window.jQuery = $;
//window.Chart = Chart;

// ----------------------------------------------------------------------
// 2. Initialisation du plugin Headroom.js
// ----------------------------------------------------------------------

// Le $(function() {}) est l'équivalent court de $(document).ready(function() {})
// et garantit que le DOM est prêt.
$(function() {
    // Initialisation du plugin sur l'élément avec la classe 'headroom'
    $('.headroom').headroom({
        // Options Headroom.js
        tolerance: 5,
        offset: 205
    });
});