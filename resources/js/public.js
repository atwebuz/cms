/**
 * Bootstrap
 */
import Dropdown from 'bootstrap/js/dist/dropdown';
import Collapse from 'bootstrap/js/dist/collapse';
import Alert from 'bootstrap/js/dist/alert';

/**
 * Swiper
 */
import Swiper, {
    Navigation,
    Pagination,
    Autoplay,
    Parallax,
    EffectFade,
} from 'swiper';
Swiper.use([Navigation, Pagination, Autoplay, Parallax, EffectFade]);
window.Swiper = Swiper;

/**
 * Get files from /resources/js/public
 */
import enableAnchorTop from './public/anchor-top.ts';
enableAnchorTop();
import enableOffCanvas from './public/offcanvas.ts';
enableOffCanvas();

/**
 * For TypiCMS’s Places module
 */
// import initMap from './public/map';
// window.initMap = initMap;
