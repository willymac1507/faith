import './bootstrap';

import Alpine from 'alpinejs';
import {Dropzone} from "dropzone";

window.Alpine = Alpine;
let myDropzone = new Dropzone("form#myDropForm");
myDropzone.on("addedfile", file => {
    console.log("A file has been added!");
})

Alpine.start();

function imageViewer() {
    return {
        imageUrl: '',

        fileChosen(event) {
            this.fileToDataUrl(event, src => this.imageUrl = src)
        },

        fileToDataUrl(event, callback) {
            if (!event.target.files.length) return

            let file = event.target.files[0],
                reader = new FileReader()

            reader.readAsDataURL(file)
            reader.onload = e => callback(e.target.result)
        },
    }
}
