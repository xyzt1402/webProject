/*
     * LetterAvatar
     * 
     * Artur Heinze
     * Create Letter avatar based on Initials
     * based on https://gist.github.com/leecrossley/6027780
     */
    (function(w, d){


        function LetterAvatar (name, size) {

            name  = name || '';
            size  = size || 60;

            var colours = ["#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e", "#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50", "#f1c40f", "#e67e22", "#e74c3c", "#95a5a6", "#f39c12", "#d35400", "#c0392b", "#bdc3c7", "#7f8c8d"];

            var nameSplit = name.split(" "),
                initials = nameSplit[0].charAt(0).toUpperCase() + nameSplit[1].charAt(0).toUpperCase();
            
            var charIndex = initials.charCodeAt(0) - 65,
                colourIndex = charIndex % 19;
            
            var canvas = document.getElementById("user-icon");
            var context = canvas.getContext("2d");
            
            var canvasWidth = $(canvas).attr("width"),
                canvasHeight = $(canvas).attr("height"),
                canvasCssWidth = canvasWidth,
                canvasCssHeight = canvasHeight;
            
            if (window.devicePixelRatio) {
                $(canvas).attr("width", canvasWidth * window.devicePixelRatio);
                $(canvas).attr("height", canvasHeight * window.devicePixelRatio);
                $(canvas).css("width", canvasCssWidth);
                $(canvas).css("height", canvasCssHeight);
                context.scale(window.devicePixelRatio, window.devicePixelRatio);
            }
            
            context.fillStyle = colours[colourIndex];
            context.fillRect (0, 0, canvas.width, canvas.height);
            context.font = "128px Arial";
            context.textAlign = "center";
            context.fillStyle = "#FFF";
            context.fillText(initials, canvasCssWidth / 2, canvasCssHeight / 1.5);

            dataURI = canvas.toDataURL();
            canvas  = null;

            return dataURI;
        }

        LetterAvatar.transform = function() {

            Array.prototype.forEach.call(d.querySelectorAll('img[avatar]'), function(img, name) {
                name = img.getAttribute('avatar');
                img.src = LetterAvatar(name, img.getAttribute('width'));
                img.removeAttribute('avatar');
                img.setAttribute('alt', name);
            });
        };


        // AMD support
        if (typeof define === 'function' && define.amd) {
            
            define(function () { return LetterAvatar; });
        
        // CommonJS and Node.js module support.
        } else if (typeof exports !== 'undefined') {
            
            // Support Node.js specific `module.exports` (which can be a function)
            if (typeof module != 'undefined' && module.exports) {
                exports = module.exports = LetterAvatar;
            }

            // But always support CommonJS module 1.1.1 spec (`exports` cannot be a function)
            exports.LetterAvatar = LetterAvatar;

        } else {
            
            window.LetterAvatar = LetterAvatar;

            d.addEventListener('DOMContentLoaded', function(event) {
                LetterAvatar.transform();
            });
        }

    })(window, document);