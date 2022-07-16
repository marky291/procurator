import './bootstrap';

import Alpine from 'alpinejs';
import ClipboardJS from "clipboard";

window.Alpine = Alpine;

Alpine.start();

new ClipboardJS('.clipboard');
